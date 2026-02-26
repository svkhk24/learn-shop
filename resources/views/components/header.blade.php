<header class="bg-white border-b">
    <div class="max-w-8xl mx-auto flex items-center justify-between h-16 px-6">

        {{-- Logo + Menu --}}
        <div class="flex items-center gap-10">

            {{-- Logo --}}
            <a href=" {{ route('home') }}" class="focus:outline-none focus:ring-0" >
                <img src="{{ asset('images/1_1_180x.avif') }}" alt="Logo" class="h-16 object-contain">
            </a>

            {{-- Menu --}}
            <ul class="hidden md:flex gap-4 font-semibold">
                <li><a href="#" class="text-gray-500 hover:text-gray-700">Trang chủ</a></li>
                <li><a href="#" class="text-gray-500 hover:text-gray-700">Sản phẩm</a></li>
                <li><a href="#" class="text-gray-500 hover:text-gray-700">Giỏ hàng</a></li>
                <li><a href="#" class="text-gray-500 hover:text-gray-700">Liên hệ</a></li>
            </ul>
        </div>

        {{-- Auth --}}
        <div class="flex gap-2 items-center">
            @guest
                <a href="{{ route('login') }}"
                    class="cursor-pointer px-4 py-2 text-center"><i class="fa-solid fa-user"></i></a>
                <a href="{{ route('register') }}"
                    class="bg-[#291c1c] text-sm text-white px-4 py-2 rounded font-[Arial]
                        hover:bg-[#464343] font-semibold">Sign up</a>
            @endguest

            @auth
                <span>{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-500">Logout</button>
                </form>
            @endauth
        </div>

    </div>
</header>
