<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/output.css')
    <link rel="icon" type="DLOR" href="{{ asset('/assets/favicon.ico') }}" />
    <title>Explore The Milky Way</title>
</head>


<body class="bg-dark-space bg-cover">

    <section id="login">
        <!-- Center Login Container -->
        <div class="flex flex-col justify-center items-center h-screen">
            <!-- Login Container -->
            <div class="flex flex-col justify-evenly items-center h-4/5">
                <!-- Title Container -->
                <div class="font-arcade text-white text-center text-5xl">
                    <h1>WELCOME ADVENTURER</h1>
                </div>

                <form action="/loginAdminPost" method="post" class="flex flex-col items-center justify-between font-arcade text-white text-2xl h-60">
                    @csrf
                    <input type="text" name="ascod" placeholder="KODE ASISTEN" class="w-64 h-16 bg-transparent text-center shadow-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun active:shadow-semi-sm active:shadow-bright-sun">
                    <input type="password" name="password" placeholder="PASSWORD" class="w-64 h-16 bg-transparent text-center shadow-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun active:active:shadow-bright-sun">

                    <button type="submit" class="w-32 h-12 bg-dark-sky text-center shadow-semi-sm shadow-white rounded-lg duration-200 hover:shadow-semi-sm hover:shadow-dark-sun hover:bg-deep-sky active:shadow-semi-sm active:shadow-bright-sun">
                        <h1 class="triangle flex justify-center items-center h-12 hover:text-3xl active:text-2xl">▶</h1>
                    </button>
                </form>
            </div>

    </section>
</body>
</html>
