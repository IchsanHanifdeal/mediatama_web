<x-main title="Login" class="p-0" full>
    <section class="min-h-screen flex items-stretch">
        <div
            class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center bg-[url('https://images.pexels.com/photos/1907784/pexels-photo-1907784.jpeg')]">
            <div class="absolute bg-[linear-gradient(180deg,transparent,rgba(0,0,0,1))] inset-0 z-0"></div>
            <div class="w-full px-24 z-10">

            </div>
            <div class="bottom-0 absolute p-4 text-center right-0 left-0 flex justify-center space-x-4 text-white">
                <span>
                    @include('components.brands')
                </span>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0">
            <div
                class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center bg-[url('https://www.hashmicro.com/id/blog/wp-content/uploads/2022/10/image-25-1.jpg')]">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-6">
                    @include('components.brands', ['class' => '!text-3xl'])
                </h1>
                <form action="{{ route('auth') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto" method="POST">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" required placeholder="Masukan email..."
                            class="input block w-full p-4 text-lg bg-white text-black 
                                    {{ $errors->has('email') ? 'border-red-700' : 'border-gray-300' }}"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="pb-2 pt-4">
                        <input
                            class="input block w-full p-4 text-lg bg-white text-black 
                                    {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}"
                            type="password" name="password" id="password" required placeholder="Masukan password...">
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#0f1c2e] to-[#1f4a6e] hover:from-[#1f4a6e] hover:to-[#0f1c2e] focus:ring-4 focus:outline-none focus:ring-[#0f1c2e] rounded-lg text-sm px-5 py-2.5 text-center font-bold text-white transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Masuk
                    </button>

                </form>
            </div>
        </div>
    </section>
</x-main>
