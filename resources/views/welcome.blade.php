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
                    <a href="" class="p-[5px] hover:font-semibold ease-linear duration-150">Who we are</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="" class="p-[5px] hover:font-semibold ease-linear duration-150">What we do</a>
                </li>
            </ul>
            <ul>
                <div>
                    <li class="flex">
                        <div onclick="toggleDropdown()" class="p-[5px] hover:font-semibold transition-all">Services</div>
                        <img class="transition-all duration-500" onclick="toggleDropdown()" id="chevron" src="../assets/chevron-down.svg" alt="">
                    </li>
                    <div class="absolute hidden  show-reverse transition-all text-center items-center" id="dropdown">
                        <li class="my-4">
                            <a href="" class="hover:font-semibold ease-linear duration-150">Adoption</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="hover:font-semibold ease-linear duration-150">Grooming</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="hover:font-semibold ease-linear duration-150">Catalogue</a>
                        </li>
                    </div>
                </div>
            </ul>
            <ul>
                <li>
                    <a href="" class="p-[5px] hover:font-semibold ease-linear duration-150">Gallery</a>
                </li>
            </ul>
            <div class="w-[158px] flex items-center justify-between ml-2">
                <ul>
                    <li class="w-[70px] border text-center border-primary border-opacity-30 p-[5px]">
                        <a href="" class="">Signup</a>
                    </li>
                </ul>
                <ul>
                    <li class="w-[70px] border text-center border-primary border-opacity-30 p-[5px]">
                        <a href="">Login</a>
                    </li>
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