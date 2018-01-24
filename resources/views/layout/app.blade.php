<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{env('APP_NAME', 'Laravel')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<!--<script src='/js/app.js'></script>-->

	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
	<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    </head>


    <body>
		<div id="app">
			@yield('content')
		</div>
    </body>


	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/vuetify/dist/vuetify.min.js"></script>
  <script>
    //new Vue({ el: '#app' })

	new Vue({
	  el: '#app'
	})

  </script>

</html>
