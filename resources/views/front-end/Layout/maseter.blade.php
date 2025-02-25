
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
      </head>
    <body>
    @include('front-end.Layout.header') 

    @yield('body-section') 

    @include('front-end.Layout.footer')
    
    </body>
    </html>
    