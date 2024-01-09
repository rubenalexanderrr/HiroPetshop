<!doctype html>
<html>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
@vite('resources/css/app.css')
</head>

<body>
    <div class=""><img src="../assets/bg3.jpg" class="h-screen w-screen" alt=""></div>
    <div id="login-popup" tabindex="-1" class="bg-black/50 overflow-y-hidden overflow-x-hidden absolute top-0 right-0 left-0 z-50 h-full items-center justify-center flex font-orkney">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow">
                <div class="px-6 py-3">
                    <div class="">
                        <div class="flex justify-center items-center mt-5">
                            <img class="w-[120px]" src="../assets/logo.svg" alt="">
                        </div>
                        <p class="my-7 text-2xl font-semibold leading-5 text-slate-900 text-center">
                            Admin login
                        </p>

                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mt-2 text-primary">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="my-4 text-primary">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-between my-5">
                                <x-primary-button class="font-normal bg-primary">
                                    {{ __('Login') }}
                                </x-primary-button>

                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

</body>

</html>