<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calendar Test</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


        <div class="max-w-7xl mx-auto p-6 lg:p-8 ">

            <div class="grid place-content-center gap-6 lg:gap-8">
                <div
                    class="w-[320px] scale-100 py-6 bg-white  from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none  motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="flex items-center justify-center flex-col w-full">
                        <div
                            class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <svg viewBox="0 0 1024 1024" class="icon" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M106.666667 810.666667V298.666667h810.666666v512c0 46.933333-38.4 85.333333-85.333333 85.333333H192c-46.933333 0-85.333333-38.4-85.333333-85.333333z"
                                        fill="#CFD8DC"></path>
                                    <path
                                        d="M917.333333 213.333333v128H106.666667v-128c0-46.933333 38.4-85.333333 85.333333-85.333333h640c46.933333 0 85.333333 38.4 85.333333 85.333333z"
                                        fill="#F44336"></path>
                                    <path d="M704 213.333333m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#B71C1C">
                                    </path>
                                    <path d="M320 213.333333m-64 0a64 64 0 1 0 128 0 64 64 0 1 0-128 0Z" fill="#B71C1C">
                                    </path>
                                    <path
                                        d="M704 64c-23.466667 0-42.666667 19.2-42.666667 42.666667v106.666666c0 23.466667 19.2 42.666667 42.666667 42.666667s42.666667-19.2 42.666667-42.666667V106.666667c0-23.466667-19.2-42.666667-42.666667-42.666667zM320 64c-23.466667 0-42.666667 19.2-42.666667 42.666667v106.666666c0 23.466667 19.2 42.666667 42.666667 42.666667s42.666667-19.2 42.666667-42.666667V106.666667c0-23.466667-19.2-42.666667-42.666667-42.666667z"
                                        fill="#B0BEC5"></path>
                                    <path
                                        d="M277.333333 426.666667h85.333334v85.333333h-85.333334zM405.333333 426.666667h85.333334v85.333333h-85.333334zM533.333333 426.666667h85.333334v85.333333h-85.333334zM661.333333 426.666667h85.333334v85.333333h-85.333334zM277.333333 554.666667h85.333334v85.333333h-85.333334zM405.333333 554.666667h85.333334v85.333333h-85.333334zM533.333333 554.666667h85.333334v85.333333h-85.333334zM661.333333 554.666667h85.333334v85.333333h-85.333334zM277.333333 682.666667h85.333334v85.333333h-85.333334zM405.333333 682.666667h85.333334v85.333333h-85.333334zM533.333333 682.666667h85.333334v85.333333h-85.333334zM661.333333 682.666667h85.333334v85.333333h-85.333334z"
                                        fill="#90A4AE"></path>
                                </g>
                            </svg>
                        </div>

                        <h2 class="w-40 text-center mt-6 mb-4 text-xl font-semibold text-gray-900 dark:text-white">Registrar nuevo evento</h2>

                        <form action="{{ route('booking.store') }}" method="post">
                            @csrf
                            <div class="flex justify-center items-start flex-col gap-y-2">
                                <label for="name">Nombre evento:</label>
                                <input class="placeholder:text-slate-400 bg-gray-100 border border-gray-300 rounded-md focus:outline-none 
                                focus:border-blue-300 focus:ring-1 px-2 py-2 w-full"
                                  name="name" type="text"/> 
                           
                                <label for="meeting-time">Fecha evento:</label>
                                <input class="bg-gray-100 cursor-pointer py-2 px-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-300 focus:ring-1" type="date" name="event_date" id="">
                           
                                <label for="meeting-time">Hora evento:</label>
                                <input class="bg-gray-100 cursor-pointer py-2 px-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-300 focus:ring-1" type="time" name="event_time" id="">
                            </div>
                            <button class="bg-black text-white py-2 px-2 w-full mt-6 rounded-md hover:bg-blue-300 duration-300 transition-all ease-in-out" type="submit">Crear evento</button>

                        </form>
                    </div>


                </div>

            </div>
        </div>
</body>

</html>
