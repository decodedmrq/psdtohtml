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

if (!function_exists('is_odd_number')) {
    function is_odd_number($number)
    {
        return $number % 2 == 1 ? true : false;
    }
}

if (!function_exists('nav_item_class')) {
    function nav_item_class($routeName)
    {
        return Route::currentRouteName() == $routeName ? 'nav-item active' : 'nav-item';
    }
}

if (!function_exists('make_break_line')) {
    function make_break_line(string $string = '', int $wordPerLine = 2, string $tagName = 'div', string $class = '')
    {
        $arr = explode(' ', $string);
        $wordCount = count($arr);
        $lineCount = ceil($wordCount / $wordPerLine);

        $html = '';
        foreach (range(0, $lineCount - 1) as $line) {
            $words = array_slice($arr, $wordPerLine * $line, $wordPerLine);

            $string = '';
            foreach ($words as $word) {
                $string .= $word . ' ';
            }
            $string = trim($string);

            $html .= "<$tagName class='{$class}'>{$string}</$tagName>";
        }

        return $html;
    }
}

if (!function_exists('make_string_time')) {
    function make_string_time(int $time = 0)
    {
        return $time >= 10 ? "{$time}" : "0{$time}";
    }
}

if (!function_exists('make_a_tag')) {
    function make_a_tag(string $href, string $content)
    {
        return "
            <a href='$href' title='$content' hreflang='vi'>$content</a>
        ";
    }
}


//  Extend Services

if (!function_exists('facebook_sdk')) {
    function facebook_sdk()
    {
        return "
            <div id=\"fb-root\"></div>
            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                      appId      : '309095902879405',
                      xfbml      : true,
                      version    : 'v2.9'
                    });
                    FB.AppEvents.logPageView();
                };
                
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) { return; }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = \"//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=309095902879405\";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        ";
    }
}

if (!function_exists('js_structured_data')) {
    function js_structured_data()
    {
        return '
            <script type="application/ld+json">
                {
                  "@context": "http://schema.org",
                  "@type": "Organization",
                  "url": "http://www.your-company-site.com",
                  "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+1-401-555-1212",
                    "contactType": "customer service"
                  }]
                }
            </script>
        ';
    }
}

if (!function_exists('js_ga')) {
    function js_ga()
    {
        return "<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                ga('create', 'UA-97122236-2', 'auto');
                ga('send', 'pageview');
            </script>";
    }
}
