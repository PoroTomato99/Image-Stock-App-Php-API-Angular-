<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Image Upload Website</title>

{{-- not sure why default bootstrap cant use --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
    html, body {
        height: 100%;
    }
    #app{
        height: 100%;
    }
</style>
</head>
<body>
    <div id="app">
        <base-app></base-app>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
   
</body>
</html>