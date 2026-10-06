<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Textora</title>

@if(isset($noindex) && $noindex)
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet">
@else
    <meta name="robots" content="index,follow">
@endif

<script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{url::asset(css/style.css)}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/media.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <!-- AOS animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    {{-- header  --}}
    <header class="bg-white shadow-md fixed w-full top-0 z-16">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <a href="index.html" class="text-2xl font-extrabold text-[#049a3d] tracking-wider font-poppins">
                <img src="images/textota-logo.png" alt="" class="w-[180px]">
            </a>

            <div class="hidden lg:flex space-x-6 items-center">
                <a href="index.php" class="text-gray-600 hover:text-[#049a3d] transition duration-300">Home</a>
                <a href="about-us.php" class="text-gray-600 hover:text-[#049a3d] transition duration-300">About</a>
                <!-- Services Dropdown -->
                <div class="relative group">
                    <a href="#" class="text-gray-600 hover:text-[#049a3d] transition duration-300 inline-block">
                        Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-md py-2 w-56 z-20">
                        <a href="whatsapp-business-api.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            WhatsApp Business API
                        </a>
                        <a href="bulk-whatsapp.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            Bulk WhatsApp
                        </a>
                        <a href="bulk-sms.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            Bulk SMS
                        </a>
                        <a href="rcs-messaging.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            RCS Messaging
                        </a>
                        <a href="voice-api.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            Voice API
                        </a>
                        <a href="otp-api.php"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#049a3d] transition">
                            OTP API
                        </a>
                    </div>
                </div>
                <a href="{{ url('pricing-web') }}" class="text-gray-600 hover:text-[#049a3d] transition duration-300">Pricing</a>
                <a href="contact-us.php" class="text-gray-600 hover:text-[#049a3d] transition duration-300">Contact
                    Us</a>
                <button onclick="openModal()"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white px-4 py-2 rounded-lg font-medium hover:bg-teal-700 transition duration-300 shadow-md ml-4">
                    Login
                </button>
            </div>

        </nav>
    </header>

    <?php
    // echo $content;
    ?>
    {{ $slot }}
    <!-- login Modal Overlay -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4 hidden">
        <!-- Modal Box -->
        <div class="w-full max-w-md bg-white rounded-xl shadow-2xl relative">
            <div class="login-card-bg p-8 rounded-xl">
                <!-- Close Button -->
                <button onclick="closeModal()"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl font-bold">
                    &times;
                </button>

                <div class="text-center mb-2">
                    <h1 class="text-3xl font-bold text-gray-900 mt-3" id="form-title">Start Sending Bulk Messages</h1>
                    <p class="text-sm text-gray-500 mt-1">Scale your campaigns efficiently.</p>
                </div>

                <h3 class="text-green-700 text-center text-2xl font-semibold mb-5">Login Now</h3>

                <form id="login-form" class="form-container space-y-4">
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="login-email" name="email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="login-password" name="password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="flex items-center justify-end">
                        <a href="#" class="text-sm font-medium text-[#08963d] hover:text-green-800">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit"
                        class="w-full py-2 px-4 rounded-md text-white bg-green-600 hover:bg-[#076028] shadow-md">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- book a demo or contact Modal -->
    <div id="connectModal"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-50 px-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8 relative animate-fadeIn">
            <!-- Close button -->
            <button onclick="closeModall()" class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">
                ✕
            </button>
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                Let's Talk Business
            </h2>

            <!-- Form -->
            <form class="space-y-4">

                <div>
                    <input type="text" placeholder="Enter Name"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <input type="email" placeholder="Enter Email"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <input type="tel" placeholder="Enter Phone Number"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>
                    <input type="text" placeholder="Enter Company Name"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none">
                </div>

                <div>

                    <select
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 
                       focus:ring-orange-400 focus:border-orange-400 outline-none bg-white">
                        <option selected disabled>Select Requirement</option>
                        <option>WhatsApp API</option>
                        <option>Bulk SMS</option>
                        <option>Voice Call</option>
                        <option>Chatbot</option>
                        <option>Other Services</option>
                    </select>
                </div>
                <div>
                    <textarea rows="3" placeholder="Write your message"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none"></textarea>
                </div>

                <button type="submit"
                    class="w-full py-3 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white rounded-xl font-medium shadow-md hover:bg-green-700 transition">
                    Submit
                </button>

            </form>
        </div>
    </div>
    {{-- bottom to top button  --}}
    <div class="contentDiv" id="content">
        <button class="back-to-top" type="button"></button>
    </div>

    <!-- Footer -->
    <footer class="bg-[#222] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <img src="images/textora-footer-logo.png" alt="logo" class="">
                    <!-- <h3 class="text-2xl font-extrabold text-white mb-4">Textora Technologies Pvt. Ltd.</h3> -->
                </div>

                <div class="md:ps-8">
                    <h4 class="font-semibold text-white mb-3 text-xl">Our Services</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="whatsapp-business-api.php" class="text-gray-300 hover:text-white">WhatsApp
                                Business API</a></li>
                        <li><a href="bulk-whatsapp.php" class="text-gray-300 hover:text-white"> Bulk WhatsApp</a></li>
                        <li><a href="bulk-sms.php" class="text-gray-300 hover:text-white"> Bulk SMS</a></li>
                        <li><a href="rcs-messaging.php" class="text-gray-300 hover:text-white"> RCS Messaging</a></li>
                        <li><a href="voice-api.php" class="text-gray-300 hover:text-white"> Voice API</a></li>
                        <li><a href="otp-api.php" class="text-gray-300 hover:text-white">OTP API</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-3 text-xl">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="terms-condition.php" class="text-gray-300 hover:text-white">Terms &
                                Conditions</a></li>
                        <li><a href="privacy-policy.php" class="text-gray-300 hover:text-white">Privacy Policy</a>
                        </li>
                        <li><a href="login.php" class="text-gray-300 hover:text-white">Login</a></li>
                    </ul>
                    <h4 class="font-semibold text-white mb-3 text-xl mt-3">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="text-white w-10 h-10 flex items-center border border-white justify-center rounded-full bg-[#3b5998] hover:bg-[#2d4373] transition duration-300">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="#"
                            class="text-white w-10 h-10 flex items-center border border-white justify-center rounded-full bg-[#df2f19] hover:bg-[#c23321] transition duration-300">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                        <a href="#"
                            class="text-white w-10 h-10 flex items-center border border-white justify-center rounded-full bg-[#1c6dc2] hover:bg-[#0a5eb6] transition duration-300">
                            <i class="fab fa-linkedin-in fa-lg"></i>
                        </a>
                    </div>
                </div>

                <div class="col-span-2 md:col-span-1">
                    <h4 class="font-semibold text-white mb-3 text-xl">Let's Connect</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-300 hover:text-white"><i
                                    class="fas fa-map-marker-alt text-white pe-3"></i> Textora Technologies Pvt.
                                Ltd.</a></li>
                        <li><a href="tel:9698569896" class="text-gray-300 hover:text-white"><i
                                    class="fas fa-phone text-white pe-3"></i> +91 9698569896</a></li>
                        <li><a href="mailto:textora@gmail.com" class="text-gray-300 hover:text-white"><i
                                    class="fas fa-envelope text-white pe-3"></i> textora@gmail.com</a></li>
                    </ul>


                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-700 text-sm text-white flex justify-between">
                <p> &copy; Textora Technologies Pvt. Ltd. | All rights reserved.</p>

                <a href="https://textorasms.com/" target="_blank" class="flex">Designed & Developed by - <img
                        src="images/textoralogo-white.jpg" alt="textoralogo-white" class="h-5 ps-3"></a>
            </div>
        </div>
    </footer>
    @livewireScripts
    <script>
        // login modal script 
        function openModal() {
            document.getElementById("loginModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("loginModal").classList.add("hidden");
        }

        // cotact for service modal 

        function openModall() {
            const modal = document.getElementById("connectModal");
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        }

        function closeModall() {
            const modal = document.getElementById("connectModal");
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }

        AOS.init();

        // Back to top
        var amountScrolled = 200;
        var amountScrolledNav = 25;

        $(window).scroll(function() {
            if ($(window).scrollTop() > amountScrolled) {
                $('button.back-to-top').addClass('show');
            } else {
                $('button.back-to-top').removeClass('show');
            }
        });

        $('button.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    </script>
</body>

</html>
