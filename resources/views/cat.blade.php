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

    <section class="flex px-6 py-2 mb-7 justify-between font-orkney mx-[20px]">
        <div class="">
            <a class="transition-all opacity-70 hover:opacity-100 hover:font-medium" href="/dashboard">Back</a>
        </div>
        <div class="flex gap-20">
            <span class="opacity-70" href="/dashboard">Home</span>
            <span class="opacity-70">/</span>
            <span class="opacity-70" href="">Services</span>
            <span class="opacity-70">/</span>
            <span class="opacity-70" href="">Adoption</span>
        </div>
    </section>

    <section class="flex flex-col bg-white m-auto p-auto font-orkney">
        <div class="flex overflow-x-scroll pb-3 pt-3 no-scrollbar mx-10">
            <div class="flex flex-nowrap gap-10">
                <!-- card -->
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
                <div class="w-[220px] overflow-hidden shadow-md">
                    <img class="w-[220px]" src="../assets/mowy.svg" alt="">
                    <div class="px-6 py-4">
                        <img class="w-full" src="../assets/cardcat.svg" alt="">
                        <p class="font-medium mt-3">Mowy</p>
                        <p class="text-primary mt-3 text-ellipsis overflow-hidden whitespace-nowrap w-[190px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                        <p class="text-harga font-medium mt-3 mb-5">Rp. 2.000.000</p>
                        <div class="flex justify-between items-center">
                            <div onclick="toggleModal()" class="hover:font-medium opacity-90 cursor-pointer text-primary border text-center border-primary border-opacity-30 px-3 py-2 hover:text-black hover:border-opacity-80 hover:bg-primary hover:bg-opacity-10" href="">Adopt</div>
                            <a class="text-primary font-medium opacity-75" href="">contact owner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="relative z-10 hidden modal-reverse opacity-0" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" onclick="toggleModal()"></div>
        <div class="fixed inset-0 z-10 w-[150vh] top-[60px] left-[233.5px] text-primary font-orkney">
            <div class="flex justify-center">
                <div class="flex gap-6 flex-col bg-white h-[90vh] w-[150vh] items-center justify-center">
                    <!-- Modal 1 -->
                    <div class="flex gap-6 flex-col items-center" id="modal1">
                        <img src="../assets/catDisplay.svg" alt="" class="w-[25vw]">
                        <div class="flex gap-8 items-center">
                            <div class="border w-[120px] p-5">
                                <span class="font-bold">Mowy</span><br>
                                <span>Maine Coon</span>
                            </div>
                            <p class="text-xs text-justify w-[450px]">A Maine Coon cat ready for adoption is a large-sized pet with beautiful fur, long tufted ears, and big eyes. They are known to be friendly, gentle, and affectionate, as well as intelligent. These "gentle giants" are suitable for families and love to play and communicate. Adopting a Maine Coon cat is an opportunity to gain a loyal and friendly companion. Ensure you provide a comfortable and loving environment for them.</p>
                            <span class="text-lg">Rp 2.000.000</span>
                        </div>
                        <div class="flex items-center gap-5">
                            <div onclick="toggleModal()" class="cursor-pointer">Back</div>
                            <div onclick="toggleModal1()" class="rounded-full bg-primary w-[500px] p-5 text-white text-center cursor-pointer">
                                Start Adoption
                            </div>
                        </div>
                    </div>
                    <!-- Modal 2 -->
                    <div class="flex gap-6 flex-col items-center text-justify hidden" id="modal2">
                        <h1 class="text-3xl font-bold mt-2">Terms and Conditions.</h1>
                        <p class=" text-[10px] leading-4 w-[420px]">Welcome to Hiro Petshop. Prior to adopting through our website, kindly review the following Terms and Conditions attentively, as they regulate the contractual relationship between you and Hiro Petshop. By utilizing our website, you acknowledge that you have read, understood, and agreed to these Terms and Conditions in their entirety.</p>
                        <div class="flex text-justify items-center justify-center gap-10 px-14">
                            <div class="border p-4 rounded-lg w-[400px] h-[100px]">
                                <h2 class="text-lg font-bold">→ Adoption Process</h2>
                                <p class="text-[10px] leading-4">Submit your application online, undergo review by our adoption team, and follow provided instructions upon approval. By agreeing to our terms, you commit to adhering to the established adoption process.</p>
                            </div>
                            <div class="border p-4 rounded-lg w-[400px] h-[100px]">
                                <h2 class="text-lg font-bold">→ Personal Information</h2>
                                <p class="text-[10px] leading-4">Submit your application online, undergo review by our adoption team, and follow provided instructions upon approval. By agreeing to our terms, you commit to adhering to the established adoption process.</p>
                            </div>
                        </div>
                        <div class="flex text-justify items-center justify-center gap-10 px-14">
                            <div class="border p-4 rounded-lg w-[400px] h-[100px]">
                                <h2 class="text-lg font-bold">→ Return Policy</h2>
                                <p class="text-[10px] leading-4">Our return policy outlines the guidelines and procedures for returning products purchased from our store. We prioritize customer satisfaction and aim to provide a transparent and fair process for handling returns.</p>
                            </div>
                            <div class="border p-4 rounded-lg w-[400px] h-[100px]">
                                <h2 class="text-lg font-bold">→ Capability</h2>
                                <p class="text-[10px] leading-4">By agreeing to our terms, you affirm financial capability and adequate knowledge to responsibly care for the adopted animal's needs and well-being.</p>
                            </div>
                        </div>
                        <p class="text-[10px] leading-4 w-[420px]">By confirm this content you agree to abide by these Terms and Conditions. These Terms and Conditions may be updated by Hiro at any time, and the latest version will be made available on our website.</p>
                        <div class="flex items-center gap-5">
                            <div onclick="toggleModal1()" class="cursor-pointer">Back</div>
                            <div onclick="toggleModal2()" class="cursor-pointer rounded-full bg-primary w-[500px] p-5 text-white text-center">
                                Confirm
                            </div>
                        </div>
                    </div>
                    <!-- Modal 3 -->
                    <form method="POST" action="{{ route('insert') }}">
                        @csrf
                        <div class="flex gap-8 flex-col items-center text-justify hidden" id="modal3">
                            <div class="flex gap-10">
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <h2 class="text-[14px] font-medium mb-3">Full Name*</h2>
                                    <input type="text" class=" bg-gray-100 border-gray-300 px-5 py-3 opacity-90 w-[300px] placeholder:text-[12px]" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" placeholder="Full Name *" name="name">
                                    <p class="font-thin text-xs mt-2 opacity-70">We'll never share your name with anyone else.
                                    </p>
                                </div>
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <h2 class="text-[14px] font-medium mb-3">Email Address*</h2>
                                    <input class=" bg-gray-100 border-gray-300 px-5 py-3 opacity-90 w-[300px] placeholder:text-[12px]" name="email" type="text" placeholder="Email Address *">
                                    <p class="font-thin text-xs mt-2 opacity-70">We'll never share your email with anyone else.
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-10">
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <h2 class="text-[14px] font-medium mb-3">Contact Number*</h2>
                                    <input class=" bg-gray-100 border-gray-300 px-5 py-3 opacity-90 w-[300px] placeholder:text-[12px]" name="number" type="text" placeholder="Contact Number *">
                                    <p class="font-thin text-xs mt-2 opacity-70">We'll never share your number with anyone else.
                                    </p>
                                </div>
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <h2 class="text-[14px] font-medium mb-3">Address*</h2>
                                    <input class=" bg-gray-100 border-gray-300 px-5 py-3 opacity-90 w-[300px] placeholder:text-[12px]" name="address" type="text" placeholder="Address *">
                                    <p class="font-thin text-xs mt-2 opacity-70">We'll never share your address with anyone else.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div onclick="toggleModal2()" class="cursor-pointer">Back</div>
                                <div onclick="toggleModal3()" class="cursor-pointer rounded-full bg-primary w-[500px] p-5 text-white text-center">
                                    Confirm
                                </div>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <div class="flex gap-8 flex-col items-center text-justify hidden" id="modal4">
                            <div class="flex gap-10">
                                <h1 class="text-lg">Choose a payment method</h1>
                            </div>
                            <div class="flex gap-10 text-center mb-[100px]">
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <div for="payment" class="flex items-center justify-center gap-2 w-[300px]">
                                        <label class="text-[14px] font-medium mb-3">Cash</label>
                                        <img class="relative bottom-[8px]" src="../assets/card.svg" alt="">
                                    </div>
                                    <input class="rounded-none bg-white px-5 py-3 w-[300px] h-[150px] placeholder:text-[12px] checked:text-primary checked:opacity-70" type="radio" name="payment" value="Cash" placeholder="Contact Number *">
                                    </p>
                                </div>
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <div for="payment" class="flex items-center justify-center gap-2 w-[300px]">
                                        <label class="text-[14px] font-medium mb-3">Bank</label>
                                        <img class="relative bottom-[8px]" src="../assets/bank.svg" alt="">
                                    </div>
                                    <input class="rounded-none bg-white px-5 py-3 w-[300px] h-[150px] placeholder:text-[12px] checked:text-primary checked:opacity-70" type="radio" name="payment" value="Bank" placeholder="Contact Number *">
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div onclick="toggleModal3()" class="cursor-pointer">Back</div>
                                <div onclick="toggleModal4()" class="cursor-pointer rounded-full bg-primary w-[500px] p-5 text-white text-center">
                                    Confirm
                                </div>
                            </div>
                        </div>
                        <!-- Modal 5 -->
                        <div class="flex gap-8 flex-col items-center text-justify hidden" id="modal5">
                            <div class="flex gap-10">
                                <h1 class="text-lg">Choose a delivery method</h1>
                            </div>
                            <div class="flex gap-10 text-center mb-[100px]">
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <div for="payment" class="flex items-center justify-center gap-2 w-[300px]">
                                        <label class="text-[14px] font-medium mb-3">Home Delivery</label>
                                    </div>
                                    <input class="rounded-none bg-white px-5 py-3 w-[300px] h-[150px] placeholder:text-[12px] checked:text-primary checked:opacity-70" type="radio" name="delivery" value="Home Delivery" placeholder="Contact Number *">
                                    </p>
                                </div>
                                <div class="p-4 rounded-lg w-[300px] h-[100px]">
                                    <div for="payment" class="flex items-center justify-center gap-2 w-[300px]">
                                        <label class="text-[14px] font-medium mb-3">In Store Pickup</label>
                                    </div>
                                    <input class="rounded-none bg-white px-5 py-3 w-[300px] h-[150px] placeholder:text-[12px] checked:text-primary checked:opacity-70" type="radio" name="delivery" value="In Store Pickup" placeholder="Contact Number *">
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div onclick="toggleModal4()" class="cursor-pointer">Back</div>
                                <button onclick="toggleModal5()" class="cursor-pointer rounded-full bg-primary w-[500px] p-5 text-white text-center" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- Modal 6 -->
                    <div class="flex gap-3 flex-col hidden" id="modal6">
                        <h1 class="text-3xl font-medium mt-2">in progress..</h1>
                        <p class="opacity-70 text-lg">Wait a few minutes until the requests are all approved and according to the requirements</p>
                        <div class="flex justify-center gap-5 mt-5">
                            <div onclick="toggleModal()" class="cursor-pointer">Back</div>
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

        function toggleHiddenModal() {
            modal.classList.toggle('hidden');
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

        function toggleModal() {
            let modal = document.querySelector("#modal");

            if (modal.classList.contains("hidden")) {
                modal.classList.toggle('hidden');
                modal.classList.toggle('modal-show');
                modal.classList.toggle('modal-reverse');
            } else {
                modal.classList.toggle('modal-show');
                modal.classList.toggle('modal-reverse');
                setTimeout(toggleHiddenModal, 370);
            }
        }

        function toggleModal1() {
            let modal2 = document.querySelector("#modal2");
            let modal1 = document.querySelector("#modal1");

            modal2.classList.toggle('hidden');
            modal1.classList.toggle('hidden');
        }

        function toggleModal2() {
            let modal2 = document.querySelector("#modal2");
            let modal3 = document.querySelector("#modal3");

            modal2.classList.toggle('hidden');
            modal3.classList.toggle('hidden');
        }

        function toggleModal3() {
            let modal4 = document.querySelector("#modal4");
            let modal3 = document.querySelector("#modal3");

            modal4.classList.toggle('hidden');
            modal3.classList.toggle('hidden');
        }

        function toggleModal4() {
            let modal4 = document.querySelector("#modal4");
            let modal5 = document.querySelector("#modal5");

            modal4.classList.toggle('hidden');
            modal5.classList.toggle('hidden');
        }
        function toggleModal5() {
            let modal6 = document.querySelector("#modal6");
            let modal5 = document.querySelector("#modal5");

            modal6.classList.toggle('hidden');
            modal5.classList.toggle('hidden');
        }


    </script>
</body>

</html>