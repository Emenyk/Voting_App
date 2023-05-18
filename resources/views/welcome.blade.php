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
<body class="bg-sky-950 ">
    <div class="container relative mx-auto min-h-screen ">

        <main class="flex w-full absolute h-full">

            <section id="form" class=" w-1/2 md:min-h-[90%]"></section>
            <section id="image" class="w-1/2  "></section>

        </main>
        <nav class=" absolute  left-3 top-[2%] border border-teal-50 border-r-0 border-b-0 flex  hover:bg-sky-900  rounded-full rounded-r-none hover:rounded-r-full">


                <button class="flex gap-5 justify-center text-sky-50 transition-colors">
                    {{-- <span class="">Vota</span> --}}
                    <span class="hover:animate-pulse hover:bg-sky-950 rounded-full py-2 px-3 text-sky-50">login</span>
                    <span class="hover:animate-pulse hover:bg-sky-950 rounded-full py-2 px-3">register</span>
                    <span class="hover:animate-pulse hover:bg-sky-950 rounded-full py-2 px-3">service</span>


                </button>



        </nav>
    </div>
</body>
</html>


