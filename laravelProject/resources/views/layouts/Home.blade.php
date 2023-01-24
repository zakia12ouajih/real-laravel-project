<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      @vite(['resources/js/app.js'])
   </head>
   <body>
      @extends('layouts.navBar')

      <div class=" container-fluid position-absolute h-100   w-100 ">
         @yield('content')
      </div>
      
      @extends('layouts.footer')
   </body>
</html>
