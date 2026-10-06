<x-master-page title="Login | Textora SMS" :noindex="true">

    <style>
        /* Custom styles for smooth transition */
        .form-container {
            transition: opacity 0.3s ease-in-out;
        }
    </style>


    <main class="py-20 bg-white">
        <div class="w-full max-w-md login-card-bg rounded-xl shadow-2xl p-8 mx-auto">
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
                    <div class="text-sm">
                        <a href="#" class="font-medium text-[#08963d] hover:text-indigo-500">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-[#076028] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                    Sign In
                </button>
            </form>
        </div>
        </div>
    </main>
    <button onclick="openModal()" class="px-4 py-2 bg-green-600 text-white rounded-md">
        Open Login Popup
    </button>



    <script>
        // login modal script 
        function openModal() {
            document.getElementById("loginModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("loginModal").classList.add("hidden");
        }
    </script>
</x-master-page>