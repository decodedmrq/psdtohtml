<?php
/**
 * Created by IntelliJ IDEA.
 * User: nvquyen
 * Date: 6/24/17
 * Time: 10:53
 */

namespace App\Modules;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


class Recaptcha
{
    const CLIENT_API = 'https://www.google.com/recaptcha/api.js';
    const VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';

    /**
     * The reaptcha secret key.
     *
     * @var string
     */
    protected $secret;
    /**
     * The recaptcha sitekey key.
     *
     * @var string
     */
    protected $sitekey;
    /**
     * @var \GuzzleHttp\Client
     */
    protected $http;

    public function __construct($secret, $sitekey)
    {
        $this->secret = $secret;
        $this->sitekey = $sitekey;
        $this->http = new Client(['timeout' => 2.0]);
    }

    public function render($attributes = [], $lang = 'en')
    {
        $attributes['data-sitekey'] = $this->sitekey;
        $html = '<script src="' . $this->getJsLink($lang) . '" async defer></script>' . "\n";
        $html .= '<div class="g-recaptcha"' . $this->buildAttributes($attributes) . '></div>';

        return $html;
    }

    protected function buildAttributes(array $attributes)
    {
        $html = [];
        foreach ($attributes as $key => $value) {
            $html[] = $key . '="' . $value . '"';
        }

        return count($html) ? ' ' . implode(' ', $html) : '';
    }

    protected function getJsLink($lang = null)
    {
        return $lang ? static::CLIENT_API . '?hl=' . $lang : static::CLIENT_API;
    }

    public function verifyResponse(Request $request)
    {
        $reCaptchaResponse = $request->get('g-recaptcha-response');
        if (!$request->has('g-recaptcha-response') && empty($reCaptchaResponse)) {
            return false;
        }

        $response = $this->sendRequestVerify([
            'secret' => $this->secret,
            'response' => $reCaptchaResponse,
            'remoteip' => $request->getClientIp(),
        ]);

        return isset($response['success']) && $response['success'] === true;
    }

    protected function sendRequestVerify(array $query = [])
    {
        $response = $this->http->request('POST', static::VERIFY_URL, [
            'form_params' => $query,
        ]);

        return json_decode($response->getBody(), true);
    }

}