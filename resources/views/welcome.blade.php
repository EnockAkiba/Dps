@extends('back.layout')

@section('main')

<!-- @section('content') -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>division provincial de la Santé Nord-Kivu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
    </head>
    <body class="antialiased ">
        <div class="container-fluid">
            <header>
                <h1>Division provinciale de la Santé Nord-Kivu</h1>
                <nav>
                    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log    in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
                    @endif
                </nav>
            </header>
            <section>
                <div>
                    <h1>Cholera</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis adipisci facere pariatur dolore tempore
                         inventore ab eos a odio harum omnis, molestiae corrupti sapiente error excepturi reprehenderit perspiciatis nam asperiores.
                    </p>
                    <img src="" alt="image de l'épidemie" srcset="">
                </div>
            </section>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
@endsectim