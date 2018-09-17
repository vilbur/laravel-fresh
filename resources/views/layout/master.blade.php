<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{env('APP_NAME', 'Laravel-Fresh')}}</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet" >

		<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
		<div id="app">
		
			<div id="content">
				<navbar></navbar>
				<router-component v-if="! $root.loading"></router-component>
			</div>
				
			<footer-component v-if="! $root.loading"></footer-component>

		</div>
    </body>

	<script src="{{ asset('/js/app.js') }}"></script>

</html>
