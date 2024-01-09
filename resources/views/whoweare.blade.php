<!doctype html>
<html>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
@vite('resources/css/app.css')
</head>

<body>

    <div class="py-2 px-6 w-screen flex items-center justify-between font-orkney">
        <div class="m-[20px]">
            <a href="/dashboard">
                <img class="w-[120px]" src="../assets/logo.svg" alt="">
            </a>
        </div>
        <nav class="m-[20px] w-[650px] flex items-center justify-between text-sm font-light text-primary">
            <ul>
                <li class="w-[80px] h-[28px] inline-flex items-center">
                    <a href="" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Who we are</a>
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
                                <a href="#" class="block p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">Adoption</a>
                            </li>
                            <li>
                                <a href="#" class="block p-[5px] my-2 hover:font-medium transition-all opacity-70 hover:opacity-100">Grooming</a>
                            </li>
                            <li>
                                <a href="#" class="block p-[5px] my-2 hover:font-medium transition-all opacity-70 hover:opacity-100">Catalogue</a>
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

    <section class="flex px-6 py-2 mb-9 justify-between font-orkney mx-[20px]">
        <div class="">
            <a class="transition-all opacity-70 hover:opacity-100 hover:font-medium" href="/dashboard">Back</a>
        </div>
        <div class="flex gap-20">
            <span class="opacity-70" href="/dashboard">Home</span>
            <span class="opacity-70">/</span>
            <span class="opacity-70" href="">Who we are</span>
        </div>
    </section>

    <section class="font-orkney">
        <div class="flex justify-center">
            <img src="../assets/h.svg" class="h-[250px] w-[200px] mx-7 object-cover grayscale hover:grayscale-0 transition-all" alt="">
            <img src="../assets/i.svg" class="h-[250px] mx-7 object-cover grayscale hover:grayscale-0 transition-all" alt="">
            <img src="../assets/r.svg" class="h-[250px] w-[200px] mx-7 object-cover grayscale hover:grayscale-0 transition-all" alt="">
            <img src="../assets/o.svg" class="h-[250px] w-auto object-cover grayscale hover:grayscale-0 transition-all" alt="">
        </div>
        <div class="text-center font-medium opacity-80 mt-10 text-[50px] py-10">
            <h1>Committed to Pet Happiness</h1>
            <h1 class="mt-10">Every Paw Step of the Way</h1>
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