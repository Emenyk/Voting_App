<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vota</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-200">
    <div class="container mx-auto min-h-screen ">
        <header class="bg-teal-950  text-teal-100 py-4 flex">
            <div class="w-1/2 flex justify-center">Vota</div>
            <nav class="flex w-full justify-around ">
                <div class="">login</div>
                <div class="">register</div>
                <div class="">service</div>
            </nav>
        </header>
        <div id="image" class="h-12 w-full">5</div>
        <main class="grid grid-cols-1 md:grid-cols-7 ">
            <section class="bg-teal-950 ">navigations</section>
            <section class="bg-slate-50 col-span-4 md:min-h-[32rem]">ELection News</section>
            <section id="comment" class="bg-slate-50 col-span-2 flex flex-col py-10 px-5 text-center space-y-4">
                <h1>Comments</h1>
                <div>

                    <article class="text-teal-950  py-1 px-2"><span class="inline-blocl h-10 w-10">i</span> 1askdkdkkdkdkkkdk</article>

                </div>

            </section>
        </main>
    </div>
</body>
</html>

