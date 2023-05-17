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
<body class="bg-slate-50">
    <div class="container mx-auto min-h-screen space-y-4">

        <main class="grid grid-cols-1  bg-slate-50">
            {{-- <section class=" ">navigations</section> --}}
            <section id="vote_image" class=" col-span-4 md:min-h-[32rem]">ELection News</section>
            {{-- <section id="comment" class="bg-slate-50 col-span-2 flex flex-col py-10 px-5 text-center space-y-4">
                <h1>Comments</h1>
                <div>

                    <article class="text-teal-950  py-1 px-2"><span class="inline-blocl h-10 w-10">i</span> 1askdkdkkdkdkkkdk</article>

                </div>

            </section> --}}
        </main>
        <header class="bg-teal-950  text-teal-100 py-4 flex rounded-full ">
            <nav class="flex w-full justify-around ">
                <div class="">Vota</div>
                <div class="">login</div>
                <div class="">register</div>
                <div class="">service</div>
            </nav>
        </header>
    </div>
</body>
</html>


