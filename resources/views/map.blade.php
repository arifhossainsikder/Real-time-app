<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{asset('css/map.css')}}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"><</script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"><</script>
    <script src="{{asset('js/map.js')}}"><</script>
    </head>
    <body>
<div id="map" class="">
         <input id="pac-input" class="controls" placeholder="insert the location" ame="location" type="text">
         <div id="map-canvas"> <</div>
         <input name="lat" class="lat" type="hidden">
         <input name="lon" class="lon" type="hidden">
    </div>
    </body>
</html>
