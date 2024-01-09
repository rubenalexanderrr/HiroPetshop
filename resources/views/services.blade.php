<!doctype html>
<html>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
@vite('resources/css/app.css')
</head>

<body class="">

    <div class="py-2 px-6 w-screen flex items-center justify-between font-orkney">
        <div class="m-[20px]">
            <a href="/dashboard">
                <img class="w-[120px]" src="../assets/logo.svg" alt="">
            </a>
        </div>
        <nav class="m-[20px] w-[650px] flex items-center justify-between text-sm font-light text-primary">
            <ul>
                <li class="w-[80px] h-[28px] inline-flex items-center">
                    <a href="/whoweare" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Who we are</a>
                </li>
            </ul>
            <ul>
                <li class="w-[80px] h-[28px] inline-flex items-center">
                    <a href="/whatwedo" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">What we do</a>
                </li>
            </ul>
            <ul>
                <div>
                    <li class="w-[80px] h-[28px]">
                        <div class="flex p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">
                            <a class="" href="/services">Services</a>
                            <div onclick="toggleDropdown()">
                                <button id=" dropdownDefaultButton" data-dropdown-toggle="dropdown" class="inline-flex items-center" type="button">
                                    <svg class="transition-all duration-500 chevron w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </li>
                    <div class="fixed hidden show-reverse transition-all items-center bg-white w-[100px] right-[318px] text-center z-50" id="dropdown">
                        <ul class="text-sm text-primary" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/adoption" class="block p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">Adoption</a>
                            </li>
                            <li>
                                <a href="/adoption" class="block p-[5px] my-2 hover:font-medium transition-all opacity-70 hover:opacity-100">Grooming</a>
                            </li>
                            <li>
                                <a href="/adoption" class="block p-[5px] my-2 hover:font-medium transition-all opacity-70 hover:opacity-100">Catalogue</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
            <ul>
                <li class="w-[80px] h-[28px] inline-flex">
                    <a href="/gallery" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Gallery</a>
                </li>
            </ul>
            <div>
                <a class="border text-center border-primary border-opacity-50 px-4 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </nav>
    </div>

    <section class="flex px-6 py-2 mb-5 justify-between font-orkney mx-[20px]">
        <div class="">
            <a class="transition-all opacity-70 hover:opacity-100 hover:font-medium" href="/dashboard">Back</a>
        </div>
        <div class="flex gap-20">
            <span class="opacity-70" href="/dashboard">Home</span>
            <span class="opacity-70">/</span>
            <span class="opacity-70" href="">Services</span>
        </div>
    </section>

    <section class="flex justify-evenly gap-16 px-6 py-2 mx-[20px] font-orkney">
        <div class="w-auto opacity-75 hover:opacity-100 transition-all">
            <a href="/adoption">
                <img src="../assets/adoption.svg" class="h-[220px]" alt="">
            </a>
            <div class="h-14 bg-primary rounded-full justify-end items-center px-8 flex relative bottom-14">
                <img src="../assets/arrowup.svg" class="h-[20px]" alt="">
            </div>
            <div class="fixed bottom-7">
                <h1 class="text-lg font-medium">Adoption</h1>
                <p class="w-[275px] mt-3">Discover high-quality pet supplies, from cozy beds to essential accessories, enhancing your pet's life.</p>
                <p class="mt-3">Terms of adoption:</p>
                <ul class="list-disc ms-5">
                    <li>Adoption Process.</li>
                    <li>Personal Information.</li>
                    <li>Return Policy.</li>
                    <li>Capabilty.</li>
                </ul>
            </div>
        </div>
        <div class="w-auto opacity-75 hover:opacity-100 transition-all">
            <a href="/adoption">
                <img src="../assets/grooming.svg" class="h-[220px]" alt="">
            </a>
            <div class="h-14 bg-primary rounded-full justify-end items-center px-8 flex relative bottom-14">
                <img src="../assets/arrowup.svg" class="h-[20px]" alt="">
            </div>
            <div class="fixed bottom-12">
                <h1 class="text-lg font-medium">Grooming</h1>
                <p class="w-[275px] mt-3">Treat your pet to a spa day with our skilled groomers, ensuring they look and feel their best for pet.</p>
                <p class="mt-3">Terms of adoption:</p>
                <ul class="list-disc ms-5">
                    <li>Only serves dog and cat care.</li>
                    <li>Grooming Fee.</li>
                    <li>Return Policy.</li>
                </ul>
            </div>
        </div>
        <div class="w-auto opacity-75 hover:opacity-100 transition-all">
            <a href="/adoption">
                <img src="../assets/adoption.svg" class="h-[220px]" alt="">
            </a>
            <div class="h-14 bg-primary rounded-full justify-end items-center px-8 flex relative bottom-14">
                <img src="../assets/arrowup.svg" class="h-[20px]" alt="">
            </div>
            <div class="fixed bottom-7">
                <h1 class="text-lg font-medium">Catalogue</h1>
                <p class="w-[275px] mt-3">Choose from a variety of premium pet food brands, each tailored to your pet's specific dietary needs.</p>
                <p class="mt-3">Terms of catalogue:</p>
                <ul class="list-disc ms-5">
                    <li>Follow ordering process.</li>
                    <li>Pricing and Payment.</li>
                    <li>Returns and Refunds.</li>
                    <li>Privacy and Security.</li>
                </ul>
            </div>
        </div>
    </section>

    <script>

        function toggleHidden() {
            dropdown.classList.toggle('hidden');
        }

        function toggleDropdown() {
            let dropdown = document.querySelector("#dropdown");
            let chevron = document.querySelector(".chevron");
            chevron.classList.toggle('-rotate-180');
            dropdown.classList.toggle('show');
            dropdown.classList.toggle('show-reverse');
            if (dropdown.classList.contains("hidden")) {
                setTimeout(toggleHidden, 50);
            } else {
                setTimeout(toggleHidden, 370);
            }
        }
    </script>
</body>

</html>