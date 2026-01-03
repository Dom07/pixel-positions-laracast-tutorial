<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo"/>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            
            @auth
            <div class="flex space-x-6 font-bold">
                <div>
                    <a href="/jobs/create">
                        Post a job
                    </a>
                </div>
                <div>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="cursor-pointer">Log Out</button>
                    </form>
                </div>
            </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>

         <main class="mt-10 mx-auto">
        {{ $slot }}
    </main>
    </div>
</body>
</html>