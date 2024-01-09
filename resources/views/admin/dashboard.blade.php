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
        <nav class="m-[20px] w-[1000px] flex items-center justify-between text-sm font-light text-primary">
            <ul>
                <li class="w-[100px] h-[28px]">
                    <div class="flex p-[5px] items-center justify-center">
                        <img class="h-[24px] w-[24px]" src="../assets/notif.svg" alt="">
                    </div>
                </li>
            </ul>
            <ul>
                <div>
                    <li class="w-[100px] h-[28px]">
                        <div class="flex p-[5px] items-center">
                            <div class="h-[24px] w-[24px] bg-red-200 rounded-full me-2"></div>
                            <div onclick="toggleDropdown()">
                                <button id=" dropdownDefaultButton" data-dropdown-toggle="dropdown" class="hover:font-medium transition-all opacity-70 hover:opacity-100 inline-flex items-center" type="button">Admin
                                    <svg class="transition-all duration-500 chevron w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </li>
                    <div class="fixed hidden show-reverse transition-all items-center bottom-1 w-[100px] right-[785px] text-center" id="dropdown">
                        <ul class="text-sm text-primary" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route ('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">Logout</a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
            <div class="w-[700px] h-[40px] bg-neutral-200 text-primary text-opacity-80 p-[5px] px-5 flex items-center">
                Search informations, messages and resources
            </div>
        </nav>
    </div>

    <section class="flex font-orkney justify-between">
        <div class="w-[190px] px-2 py-20 ms-12">
            <ul>
                <li>
                    <a href="/admin/dashboard" class="flex items-center gap-5">
                        <img src="../assets/home.svg" class="w-[15%] my-5" alt="">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/product" class="flex items-center gap-5 opacity-50 hover:opacity-100 transition-all">
                        <img src="../assets/product.svg" class="w-[15%]  my-5" alt="">
                        <span>Product Catalog</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/management" class="flex items-center gap-5 opacity-50 hover:opacity-100 transition-all">
                        <img src="../assets/manag.svg" class="w-[15%]  my-5" alt="">
                        <span>Management Catalog</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/payment" class="flex items-center gap-5 opacity-50 hover:opacity-100 transition-all">
                        <img src="../assets/manag.svg" class="w-[15%]  my-5" alt="">
                        <span>Payment Order</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center gap-5 opacity-50 hover:opacity-100 transition-all">
                        <img src="../assets/manag.svg" class="w-[15%]  my-5" alt="">
                        <span>Chats</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-[700px]">
            <div class="flex items-center shadow-md w-[90px] p-2 mt-2 mb-2">
                <span class="text-[10px]""">Last 30 Days</span>
                <svg class="transition-all duration-500 chevron w-2.5 h-2.5 ms-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </div>
            <div class="shadow-md p-3 mb-2">
                <span class="text-[10px]">Views</span>
                <div class="flex justify-between items-center mt-1">
                    <span class="text-lg">721K</span>
                    <span class="text-[10px] text-green-500">+11.01%</span>
                </div>
            </div>
            <div class="shadow-md p-3 mb-2">
                <span class="text-[10px]">Visits</span>
                <div class="flex justify-between items-center mt-1">
                    <span class="text-lg">367K</span>
                    <span class="text-[10px] text-red-500">-0.03%</span>
                </div>
            </div>
            <div class="shadow-md bg-primary p-3 text-white">
                <div class="flex justify-between">
                    <span class="text-[12px]" -"">Total Orders</span>
                    <span class="text-base">25.7K</span>
                </div>
                <div class="flex justify-between items-center mt-1">
                    <span class="text-[10px]">Last 30 days</span>
                </div>
            </div>
            <div class="flex justify-center mt-2">
                <img class="w-[90%]" src="../assets/topplace.svg" alt="">
            </div>
        </div>
        <div>
            <img src="../assets/rightbar.svg" class="w-[56%]" alt="">
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