<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/google.css')}}">
    </head>
    <body class="bg-[#ffffff] dark:bg-[#ffffff] text-[#1b1b18] flex items-center lg:justify-center w-screen h-screen flex-col">
        <div class="flex h-full w-full">
            <div class="flex flex-col justify-around items-center w-full h-full bg-[#000000] dark:bg-[#000000] px-10 py-7">
                <div class="w-32 h-32">
                    <img src="/assets/images/logo/logo-transparent.png" alt="" class="w-full h-full">
                </div>
                <div class="flex w-full h-fit">
                    <form action="" class="flex flex-col w-full h-fit justify-center items-center gap-3 text-base">
                        <input type="text" placeholder="Nome de Usuário" required class="w-full px-3 py-4 rounded-lg bg-[#ffffff]">
                        <input type="email" placeholder="example@email.com" required class="w-full px-3 py-4 rounded-lg bg-[#ffffff]">
                        <input type="password" placeholder="********" required class="w-full px-3 py-4 rounded-lg bg-[#ffffff]">
                        <button class="w-full px-3 py-4 rounded-lg bg-[#FFC700] text-lg font-bold">Cadastre-se</button>
                    </form>
                </div>
                <div class="flex w-full h-fit justify-center items-center gap-6">
                    <img src="assets/icons/norse-line.png" alt="" class="w-32 h-4">
                    <img src="assets/icons/norse-ouroborus-golden.png" alt="" class="w-12 h-12">
                    <img src="assets/icons/norse-line.png" alt="" class="w-32 h-4">
                </div>

                <div class="flex w-full h-fit justify-center">
                    <button class="gsi-material-button" style="width: 400px">
                        <div class="gsi-material-button-state"></div>
                        <div class="gsi-material-button-content-wrapper">
                            <div class="gsi-material-button-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                <path fill="none" d="M0 0h48v48H0z"></path>
                            </svg>
                            </div>
                            <span class="gsi-material-button-contents">Sign up with Google</span>
                            <span style="display: none;">Sign up with Google</span>
                        </div>
                    </button>
                </div>
                <div class="flex w-full h-fit justify-center gap-1">
                    <p class="text-white font-bold text-base">Já tem conta?</p>
                    <a href="/" class="text-[#FFC700] underline">Login</a>
                </div>
            </div>
            <div class="flex w-full h-full">
                <img src="/assets/images/login-background.png" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </body>
</html>
