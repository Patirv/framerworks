<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiase content-center bg-[#ffedd5]">
<div class="w-[300px] mx-auto">
<div class="text-center my-8">
    <h1 class="text-3xl mb-1 font-bold">ROCKET<span class="text-[#995000]">COFFEE</span></h1>
    <p class="text-sm">Aberto todos os dias. 8h - 20h</p>
</div>

<div class="font-bold">

   <h3 class="test-lg bg-[#fed7aa] text-center mb-6">BRUNCH</h3>
<div class="mb-2 flex flex-col space-x-40">
    <p class="text-base flex-2">WAFFLE DOCE</p>
    <P class="flex1">R$ 37.40</P>
</div>
</div>
</div>
        
    </body>
</html>
