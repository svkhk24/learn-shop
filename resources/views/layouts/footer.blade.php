<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <div>
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-12 mb-4">
            <h1 class="font-semibold text-[16px]">ONLINE-SHOP</h1>
            <p class="text-sm leading-relaxed">
                Chúng tôi chuyên cung cấp các sản phẩm chất lượng cao với giá cả hợp lý.
                Cam kết chính hãng 100% và giao hàng toàn quốc.
            </p>
        </div>
        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">Liên kết nhanh</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white transition">Trang chủ</a></li>
                <li><a href="#" class="hover:text-white transition">Sản phẩm</a></li>
                <li><a href="#" class="hover:text-white transition">Giỏ hàng</a></li>
                <li><a href="#" class="hover:text-white transition">Liên hệ</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">Chính sách</h3>
            <ul class="space-y-2 text-sm">
                <li class="hover:text-white transition">Chính sách bảo hành</li>
                <li class="hover:text-white transition">Chính sách đổi trả</li>
                <li class="hover:text-white transition">Chính sách bảo mật</li>
                <li class="hover:text-white transition">Điều khoản dịch vụ</li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-semibold mb-4 text-lg">Liên hệ</h3>
            <ul class="space-y-2 text-sm">
                <li>143 Nguyễn Lương Bằng, Đà Nẵng</li>
                <li>Email:shopwebonline@gmail.com</li>
                <li>Hotline: 0992 678 220</li>
            </ul>
            {{-- Social --}}
            {{-- <div class="flex gap-4 mt-4">
                <a href="#" class="hover:text-white transition">Facebook</a>
                <a href="#" class="hover:text-white transition">Instagram</a>
                <a href="#" class="hover:text-white transition">YouTube</a>
            </div> --}}
        </div>
    </div>
    {{-- Bottom --}}
    <div class="border-t border-gray-700 max-w-7xl mx-auto px-6 text-sm py-4">
        © {{ date('Y') }} Copyright onlineshop.vn -
        Sản phẩm uy tín chất lượng cao
    </div>
</footer>
