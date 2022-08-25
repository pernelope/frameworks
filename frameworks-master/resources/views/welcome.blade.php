<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiase content-center bg-[#ffedd5] font-serif">
    <div class="w-[300px] mx-auto">
        <div class="text-center my-8">
          <h1 class="text-3xl mb-1 font-bold">ROCKECT<spam class="text-[#995000]">COFFE<spam></h1>
          <p class="text-sm"> Aberto todos os dias das 8h ás -21h </p>
        </div>

            <div class="font-bold">
                
                <h3 class="text-lg bg-[#fed7aa] text-center mb-6"> BRUNCH </h3>

                <div class="mb-2 flex flex-col space-x-40">
                    <p class="text-base flex-2"> WAFFLE DOCE </p>
                    <p class="flex-1"> R$ 37,40 </p>
                </div>
            </div>
    </div>
    </body>
</html>
