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
                <div class="px-5 py-3">
                    <div class="">
                        <div class="flex justify-center items-center">
                            <img class="w-[120px]" src="../assets/logo.svg" alt="">
                        </div>
                        <p class="my-2 text-2xl font-semibold leading-5 text-slate-900 text-center">
                            Create an account
                        </p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <x-primary-button class="">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>



                        <div class="mt-6 text-center text-sm text-slate-600">
                            Have an account?
                            <a href="/login" class="font-medium text-[#4285f4]">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>