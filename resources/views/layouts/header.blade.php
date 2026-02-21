<header class="bg-white shadow">
    <div class="max-w-8xl mx-auto flex items-center justify-between h-16 px-6">

        {{-- Logo + Menu --}}
        <div class="flex items-center gap-10">

            {{-- Logo --}}
            <a href=" {{ route('home') }}" class="focus:outline-none focus:ring-0" >
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-16 object-contain">
            </a>

            {{-- Menu --}}
            <ul class="hidden md:flex gap-4 font-medium">
                <li><a href="#" class="hover:text-blue-500">Trang chủ</a></li>
                <li><a href="#" class="hover:text-blue-500">Sản phẩm</a></li>
                <li><a href="#" class="hover:text-blue-500">Giỏ hàng</a></li>
                <li><a href="#" class="hover:text-blue-500">Liên hệ</a></li>
            </ul>
        </div>

        {{-- Auth --}}
        <div class="flex gap-2 items-center">
            @guest
                <a href="{{ route('login') }}"
                    class="btn-login text-sm
                        hover:bg-[#d4bfbf29] font-semibold rounded-md cursor-pointer px-4 py-2"
                    >
                        Login
                    </a>
                <a href="{{ route('register') }}"
                    class="bg-[#d32f2f] text-sm text-white
                            px-4 py-2 rounded font-[Arial]
                            hover:bg-[#af3e3e] font-semibold"
                        >
                            Register
                        </a>
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
