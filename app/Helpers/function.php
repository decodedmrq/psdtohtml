<?php

use App\Helpers\HtmlHelper;

if (!function_exists('html_helper')) {
    /**
     * @return App\Helpers\HtmlHelper
     */
    function html_helper()
    {
        return app(HtmlHelper::class);
    }
}

if (!function_exists('html')) {
    /**
     * @return \Collective\Html\HtmlBuilder
     */
    function html()
    {
        return app('html');
    }
}

if (!function_exists('form')) {
    /**
     * @return \Collective\Html\FormBuilder
     */
    function form()
    {
        return app('form');
    }
}

if (!function_exists('cloud_link')) {
    function cloud_link($path = null)
    {
        return "http://files.hocnhantuong.com/{$path}";
    }
}

if (!function_exists('js_trans')) {
    function js_trans($except = [])
    {
        $locale = config('app.locale');
        $files = glob(resource_path("lang/{$locale}/*.{php}"), GLOB_BRACE);
        $data = [];
        foreach ($files as $file) {
            $trans = basename($file, '.php');
            if (in_array($trans, $except)) {
                continue;
            }
            $data[$trans] = trans($trans);
        }

        return json_encode($data);
    }
}

if (!function_exists('response_json')) {
    function response_json($data = [], $success = true, $message = '')
    {
        $data = is_object($data) ? $data->toArray() : $data;
        $result = [
            'data' => $data,
            'success' => $success,
            'message' => $message,
        ];

        return response()->json($result);
    }
}

if (!function_exists('link_to_route_html')) {
    function link_to_route_html($name, $html, $parameters = [], $attributes = [])
    {
        $url = route($name, $parameters);
        return '<a href="' . $url . '" ' . html()->attributes($attributes) . '>' . $html . '</a>';
    }
}
