<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{env('APP_NAME', 'Laravel')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<script src='/js/app.js'></script>

    </head>
    <body>

        <div id='wrapper'>
            <div class='row'>
                <div class='col-xs-12' id='layout-wrapper'>
                    @yield('content')
                </div>
            </div>

        </div>
    </body>

</html>