<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>

<body class="overflow-x-hidden">

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
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block p-[5px] hover:font-medium transition-all opacity-70 hover:opacity-100">Logout</a>

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
                    <a href="/admin/dashboard" class="flex items-center gap-5 opacity-50 hover:opacity-100 transition-all">
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
                    <a href="/admin/payment" class="flex items-center gap-5 ">
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
        <div class="flex flex-nowrap w-full p-8">
            <table class="w-full h-full">
                <thead class="flex font-inter opacity-80 border-b-2">
                    <tr class="flex items-center justify-between border-b w-full">
                        <th class="font-medium opacity-80 p-3 w-[20px] text-left">ID</th>
                        <th class="font-medium opacity-80 p-3 w-[100px] text-left">Name</th>
                        <th class="font-medium opacity-80 p-3 w-[150px] text-left">Email</th>
                        <th class="font-medium opacity-80 p-3 w-[100px] text-left">Address</th>
                        <th class="font-medium opacity-80 p-3 w-[100px] text-left">Number</th>
                        <th class="font-medium opacity-80 p-3 w-[80px] text-left ">Payment</th>
                        <th class="font-medium opacity-80 p-3 w-[80px] text-left">Category</th>
                        <th class="font-medium opacity-80 p-3 w-[100px] text-left">Amount</th>
                        <th class="font-medium opacity-80 p-3 w-[80px] text-left">Delivery</th>
                        <th class="font-medium opacity-80 p-3 w-[50px] text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="flex flex-col font-inter overflow-y-scroll w-full h-full no-scrollbar">
                    @foreach ($customers as $customer)
                    <tr class="flex items-center justify-between border-b w-[1101px] h-[100px]">
                        <td class="w-[0px] p-3">{{ $customer->id }}</td>
                        <td class="w-[100px] p-3">{{ $customer->name }}</td>
                        <td class="w-[150px] p-3">{{ $customer->email }}</td>
                        <td class="w-[100px] p-3">{{ $customer->address }}</td>
                        <td class="w-[100px] p-3">{{ $customer->number }}</td>
                        <td class="w-[75px] p-3">{{ $customer->payment }}</td>
                        <td class="w-[75px] p-3">Adopt</td>
                        <td class="w-[100px] p-3">Rp 2.000.000</td>
                        <td class="w-[80px] p-3">{{ $customer->delivery }}</td>
                        <td class="w-[50px] p-3">
                            <div class="flex flex-col justify-center items-center gap-2 ">

                                <a href=" {{ route('update', ['customer_id'=>$customer->id] ) }}" class="">
                                    <div class="w-[60px] border text-center border-primary border-opacity-50 px-1 py-1 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10">
                                        Update
                                    </div>
                                </a>

                                <div onclick="toggleDelete()" class="cursor-pointer w-[60px] border text-center border-primary border-opacity-50 px-1 py-1 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10">
                                    Delete
                                </div>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="delete">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Delete Data</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Are you sure you want to delete these? All of your data will be permanently removed. This action cannot be undone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <form action="{{ route('delete', ['customer_id'=>$customer->id] ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Delete</button>
                        </form>
                        <div onclick="toggleDelete()" type="button" class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                            Cancel
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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

        function toggleDelete() {
            let modal = document.querySelector("#delete");

            modal.classList.toggle('hidden');
        }
    </script>
</body>

</html>