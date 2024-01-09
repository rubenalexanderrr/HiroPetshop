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
                            Login to your account
                        </p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mt-2 text-primary">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-2 text-primary">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-2 text-primary">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-between mt-3">
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

                        <div class="flex w-full items-center gap-2 py-5 text-sm text-slate-600">
                            <div class="h-px w-full bg-slate-200"></div>
                            OR
                            <div class="h-px w-full bg-slate-200"></div>
                        </div>
                        <p class="text-center text-sm leading-4 text-slate-600">
                            You must be logged in to perform this action.
                        </p>
                    </div>

                    <div class="mt-7 flex flex-col gap-2">

                        <button class="inline-flex h-10 w-full items-center justify-center gap-2  border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60 hover:bg-gray-200 transition-all"><img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-[18px] w-[18px] ">Continue with
                            Google
                        </button>
                        <button class="inline-flex h-10 w-full items-center justify-center gap-2  border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60 hover:bg-gray-200 transition-all"><img src="https://www.svgrepo.com/show/511330/apple-173.svg" alt="Google" class="h-[18px] w-[18px] ">Continue with
                            Apple
                        </button>
                        <button class="inline-flex h-10 w-full items-center justify-center gap-2  border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60 hover:bg-gray-200 transition-all"><img src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Google" class="h-[18px] w-[18px] ">Continue with
                            Facebook
                        </button>

                    </div>

                    <div class="mt-6 text-center text-sm text-slate-600">
                        Don't have an account?
                        <a href="/register" class="font-medium text-[#4285f4]">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>