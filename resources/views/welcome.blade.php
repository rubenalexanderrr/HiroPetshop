<!doctype html>
<html>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
@vite('resources/css/app.css')
</head>

<body>

    <div class="container fixed left-[40px] top-[30px] flex items-center justify-between font-orkney">
        <div class="m-[20px]">
            <img class="w-[120px]" src="../assets/logo.svg" alt="">
        </div>
        <nav class="m-[20px] w-[750px] flex items-center justify-between text-sm font-light text-primary">
            <ul>
                <li>
                    <a href="" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Who we are</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">What we do</a>
                </li>
            </ul>
            <ul>
                <div>
                    <li class="">
                        <div onclick="toggleDropdown()" class="flex gap-1 p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">Services
                            <img class="transition-all duration-500 opacity-70 hover:opacity-100" onclick="toggleDropdown()" id="chevron" src="../assets/chevron-down.svg" alt="">
                        </div>
                    </li>
                    <div class="absolute hidden show-reverse transition-all text-center items-center" id="dropdown">
                        <li class="my-4">
                            <a href="" class="hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Adoption</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Grooming</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Catalogue</a>
                        </li>
                    </div>
                </div>
            </ul>
            <ul>
                <li>
                    <a href="" class="p-[5px] hover:font-medium ease-linear duration-150 opacity-70 hover:opacity-100">Gallery</a>
                </li>
            </ul>
            <div class="w-[158px] flex items-center justify-between ml-2">
                <ul>
                    <a class="" href="{{ url('login')}}">
                        <div class="opacity-70 hover:opacity-100 hover:bg-gray-100 hover:font-medium transition-all w-[70px] border text-center border-primary border-opacity-30 p-[5px]">Login
                        </div>
                    </a>
                </ul>
                <ul>
                    <a class="" href="{{ url('login')}}">
                        <div class="opacity-70 hover:opacity-100 hover:bg-gray-100 hover:font-medium transition-all w-[70px] border text-center border-primary border-opacity-30 p-[5px]">Signup
                        </div>
                    </a>
                </ul>
        </nav>
    </div>
    </div>


    <script>
        function toggleHidden() {
            dropdown.classList.toggle('hidden');
        }

        function toggleDropdown() {
            let dropdown = document.querySelector("#dropdown");
            let chevron = document.querySelector("#chevron");
            chevron.classList.toggle('rotate-180');
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