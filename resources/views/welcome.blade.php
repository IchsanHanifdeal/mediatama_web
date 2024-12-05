<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Mediatama Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex flex-col mx-auto min-h-dvh">
    <!-- Start of navbar -->
    <nav class="bg-[#f0f0f0] border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex-none">
                <form class="max-w-md mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search..." required />
                    </div>
                </form>
            </div>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('login') }}"
                    class="btn btn-ghost focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2" >Login</a>
                <button type="button" id="subscribe-btn"
                    class="text-white bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Subscribe</button>
            </div>
            <div class="text-3xl font-bold items-center justify-between hidden w-full md:flex md:w-20 md:order-1">
                the news dispatch.
            </div>
        </div>
    </nav>

    <nav class="border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <div class="flex items-center justify-center p-6 mx-auto text-gray-600 uppercase">
                <a href="#" class="text-black border-b-2 border-black mx-1.5 sm:mx-6">latest</a>
                <a href="#"
                    class="border-b-2 border-transparent hover:text-gray-800 hover:border-black mx-1.5 sm:mx-6">world</a>
                <a href="#"
                    class="border-b-2 border-transparent hover:text-gray-800 hover:border-black mx-1.5 sm:mx-6">sports</a>
                <a href="#"
                    class="border-b-2 border-transparent hover:text-gray-800 hover:border-black mx-1.5 sm:mx-6">culture</a>
                <a href="#"
                    class="border-b-2 border-transparent hover:text-gray-800 hover:border-black mx-1.5 sm:mx-6">wellness</a>
                <a href="#"
                    class="border-b-2 border-transparent hover:text-gray-800 hover:border-black mx-1.5 sm:mx-6">economy</a>
            </div>
        </div>
        <hr class="h-px bg-[#E5E5E5] border-0">
    </nav>
    <!-- End of navbar -->

    <!-- Main Content -->
    <main class="py-12 px-4 sm:px-6 lg:px-8">

        <section class="grid grid-cols-3 md:grid-cols-3 gap-12 mb-16">
            <div class="relative">
                <img src="https://via.placeholder.com/600x400" alt="Image" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Best summer reads for your vacation</h2>
                <p class="text-lg text-gray-600">Summer is the perfect time to indulge in some
                    leisurely reading. whether it's lying on the
                    beach or lounging in the park- so if you're
                    looking for a way to unwind this summer, why
                    not pick up a few books and escape into some
                    captivating stories?</p>
            </div>
        </section>

        <hr class="h-px bg-black border-0">

        <div class="text-3xl font-bold items-center justify-between md:order-1">
            Food and Drink.
        </div>
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 1" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">On a hunt for the best
                    kombucha</h3>
            </div>
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 2" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Shoreditch's best bodegas</h3>
            </div>
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 3" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Cooking on budget</h3>
            </div>
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 3" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Best alcohol-free
                    cocktails</h3>
            </div>
        </section>
        <hr class="h-px bg-black border-0">
        <div class="text-3xl font-bold items-center justify-between md:order-1">
            Editor Picks.
        </div>
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mb-16">
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 1" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">People are happy and healthy everywhere</h3>
            </div>
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 2" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Hockey Championship is about to
                    start</h3>
            </div>
            <div class="flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/200" alt="Item 3" class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Finally a good theatre!</h3>
            </div>

        </section>
    </main>

    <footer class="bg-[#f0f0f0] py-6 text-center">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold">the news dispatch.</h1>
            <div class="flex justify-center space-x-4 my-4">
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.27 4.27 0 001.88-2.37 8.5 8.5 0 01-2.7 1.03 4.25 4.25 0 00-7.23 3.87A12.06 12.06 0 013 4.84a4.24 4.24 0 001.32 5.66 4.22 4.22 0 01-1.92-.53v.05a4.26 4.26 0 003.4 4.17 4.26 4.26 0 01-1.91.07 4.27 4.27 0 003.98 2.96A8.51 8.51 0 012 19.54 12.03 12.03 0 008.29 21c7.55 0 11.68-6.25 11.68-11.68 0-.18 0-.35-.01-.53A8.34 8.34 0 0022.46 6z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.04c-5.52 0-10 4.48-10 10.01 0 5 3.66 9.12 8.44 9.88v-6.99h-2.54v-2.9h2.54v-2.22c0-2.52 1.5-3.9 3.78-3.9 1.1 0 2.25.2 2.25.2v2.47h-1.27c-1.25 0-1.64.78-1.64 1.57v1.88h2.78l-.44 2.9h-2.34V22c4.78-.76 8.44-4.88 8.44-9.88 0-5.53-4.48-10.01-10-10.01z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 22h-4.75v-7.45c0-1.78-.03-4.07-2.48-4.07-2.48 0-2.86 1.94-2.86 3.95V22H7.15V9.48h4.55v1.71h.06c.63-1.2 2.17-2.46 4.47-2.46 4.78 0 5.66 3.15 5.66 7.26V22zM3 22h4.75V9.48H3V22zm4.54-15a2.74 2.74 0 110-5.48 2.74 2.74 0 010 5.48z" />
                    </svg>
                </a>
            </div>
            <ul class="flex justify-center space-x-6 text-gray-600 text-sm mb-4">
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Authors</a></li>
                <li><a href="#" class="hover:underline">Archive</a></li>
                <li><a href="#" class="hover:underline">Terms and Conditions</a></li>
                <li><a href="#" class="hover:underline">Cookie Policy</a></li>
            </ul>
            <p class="text-gray-600 text-sm">© Uizard News</p>
        </div>
    </footer>

    <div id="subscribe-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg p-6 w-96">
            <h2 class="text-xl font-semibold mb-4">Subscribe to Our Newsletter</h2>
            <form id="subscribe-form">
                <label for="email" class="block text-sm mb-2">Enter your email:</label>
                <input type="email" id="email" name="email" class="border border-gray-300 p-2 w-full rounded-md mb-4"
                    required placeholder="Your email address">
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Subscribe</button>
                </div>
            </form>
            <button id="close-modal"
                class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-lg">&times;</button>
        </div>
    </div>

    <div id="custom-alert" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded-lg p-6 w-72 text-center">
            <p class="text-lg font-semibold">Thank you for subscribing to our news website!</p>
            <button id="close-alert"
                class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">OK</button>
        </div>
    </div>

</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const subscribeBtn = document.getElementById('subscribe-btn');
        const subscribeModal = document.getElementById('subscribe-modal');
        const closeModal = document.getElementById('close-modal');
        const subscribeForm = document.getElementById('subscribe-form');
        const emailInput = document.getElementById('email');
        const customAlert = document.getElementById('custom-alert');
        const closeAlert = document.getElementById('close-alert');

        subscribeBtn.addEventListener('click', () => {
            subscribeModal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            subscribeModal.classList.add('hidden');
        });

        subscribeForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const email = emailInput.value;
            if (email) {
                subscribeModal.classList.add('hidden');
                customAlert.classList.remove('hidden');
                emailInput.value = '';
            } else {
                alert("Please enter a valid email address.");
            }
        });

        closeAlert.addEventListener('click', () => {
            customAlert.classList.add('hidden');
        });
    });
</script>

</html>