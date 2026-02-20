<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-30 px-6">

        {{-- Logo --}}
        <a href="#">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-20 object-contain">
        </a>

        {{-- Menu --}}
        <ul class="hidden md:flex gap-6 font-medium">
            <li><a href="#" class="hover:text-blue-500">Trang chủ</a></li>
            <li><a href="#" class="hover:text-blue-500">Sản phẩm</a></li>
            <li><a href="#" class="hover:text-blue-500">Tin tức</a></li>
            <li><a href="#" class="hover:text-blue-500">Liên hệ</a></li>
        </ul>

        {{-- Auth --}}
        <div class="flex gap-4 items-center">
            @guest
                <a href="{{ route('login') }}" class="hover:text-blue-500">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</a>
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
