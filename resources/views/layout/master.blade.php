<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{env('APP_NAME', 'Laravel')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet" >

		<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
		<div id="app">
			{{--@include('partials.navigation.navbar')--}}
			<navbar></navbar>
			<router-view style="margin-top:80px"></router-view>
		</div>

		{{--@include('partials.footer')--}}

		<script src="{{ asset('/js/app.js') }}"></script>
    </body>


</html>
