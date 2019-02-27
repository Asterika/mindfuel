<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'MindFuel')</title>
    </head>

    <body>
        
        <h1>@yield('content')</h1>

        <ul>
        
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
                <!-- <ul onclick="">
                    <li>About Krystal</li>
                    <li>FAQs</li>
                    <li>Testimonials</li>
                </ul> -->
            <li><a href="/about">About</a></li>
            <li><a href="/schedule">Schedule</a></li>
            <li><a href="/connect">Connect</a></li>
        
        </ul>

    </body>

</html>