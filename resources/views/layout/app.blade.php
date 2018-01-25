<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{env('APP_NAME', 'Laravel')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    </head>

    <body>
		@yield('content')
    </body>

	<script src='/js/app.js'></script>

</html>