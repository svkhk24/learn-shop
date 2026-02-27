@php
    // Cấu hình từng banner: đường dẫn ảnh + vị trí chữ
    $banners = [
        [
            'src'       => 'images/25.jpg',
            'position'  => 'left-center',   // chữ bên trái, giữa chiều cao
        ],
        [
            'src'       => 'images/28.jpg',
            'position'  => 'left-center',   // chữ bên trái, giữa chiều cao
        ],
        [
            'src'       => 'images/PC_8da43406-6289-4e3e-a6fe-45954473a5b4.jpg',
            'position'  => 'bottom-right',  // chữ phía dưới, bên phải (gần đĩa xoay)
        ],
    ];

    // Hàm nhỏ để map position -> class Tailwind
    function bannerTextPositionClass($position) {
        return match ($position) {
            'left-center'  => 'items-center justify-start pl-10 md:pl-20 lg:pl-28',
            'bottom-right' => 'items-center justify-end pr-6 md:pr-12',
            'price-right'  => 'items-start justify-end pt-12 md:pt-24 pr-10 md:pr-20',
            default        => 'items-center justify-center',
        };
    }
@endphp

<section class="relative w-full overflow-hidden">
    {{-- Hiển thị ảnh banner --}}
    <div class="relative w-full" data-banner>
        @foreach ($banners as $index => $banner)
            <div
                class="relative w-full transition-opacity duration-700 ease-in-out
                       {{ $index === 0 ? 'opacity-100 z-10 block' : 'opacity-0 z-0 hidden' }}"
                data-banner-slide="{{ $index }}">
                <img
                    src="{{ asset($banner['src']) }}"
                    alt="Banner {{ $index + 1 }}"
                    class="w-full h-auto object-contain">

                {{-- Overlay nội dung vị trí phụ thuộc từng banner --}}
                @php
                    $posClass = bannerTextPositionClass($banner['position'] ?? null);
                    $mode     = $banner['mode'] ?? 'full';
                    $overlay  = $banner['overlay'] ?? true;
                    $overlayClass = $overlay ? 'bg-black/20 md:bg-black/10' : 'bg-transparent';
                @endphp
                @if ($mode !== 'none')
                    <div class="absolute inset-0 {{ $overlayClass }} flex {{ $posClass }}">
                        <div class="max-w-xl md:max-w-2xl text-white space-y-3 md:space-y-4">
                            @if ($mode === 'button_only')
                                <a href="#"
                                   class="inline-flex items-center gap-2 bg-white text-gray-900
                                          px-4 md:px-6 py-2 md:py-2.5 rounded-full text-sm md:text-base font-semibold
                                          shadow hover:bg-gray-100 transition">
                                    Mua ngay
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </a>
                            @else
                                <h2 class="text-xl md:text-3xl lg:text-4xl font-bold drop-shadow">
                                    Khám phá ưu đãi nổi bật
                                </h2>
                                <p class="hidden md:block max-w-xl text-sm md:text-base text-gray-100 drop-shadow">
                                    Bộ sưu tập sản phẩm mới, giá tốt mỗi ngày. Mua sắm nhanh chóng, tiện lợi và an toàn.
                                </p>
                                <a href="#"
                                   class="inline-flex items-center gap-2 bg-white text-gray-900
                                          px-4 md:px-6 py-2 md:py-2.5 rounded-full text-sm md:text-base font-semibold
                                          shadow hover:bg-gray-100 transition">
                                    Mua ngay
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        @endforeach

        {{-- Nút điều hướng trái, phải --}}
        <button type="button"
                class="hidden md:flex absolute left-4 top-1/2 -translate-y-1/2 z-20
                       w-9 h-9 items-center justify-center rounded-full bg-black/35
                       text-white hover:bg-black/55 transition"
                data-banner-prev>
            <i class="fa-solid fa-chevron-left text-sm"></i>
        </button>

        <button type="button"
                class="hidden md:flex absolute right-4 top-1/2 -translate-y-1/2 z-20
                       w-9 h-9 items-center justify-center rounded-full bg-black/35
                       text-white hover:bg-black/55 transition"
                data-banner-next>
            <i class="fa-solid fa-chevron-right text-sm"></i>
        </button>

        {{-- Dots (ẩn đi theo yêu cầu) --}}
        {{--
        <div class="absolute bottom-3 md:bottom-5 left-1/2 -translate-x-1/2 z-20 flex gap-2">
            @foreach ($banners as $index => $banner)
                <button type="button"
                        class="w-2.5 h-2.5 md:w-3 md:h-3 rounded-full border border-white/70
                               {{ $index === 0 ? 'bg-white' : 'bg-transparent' }}
                               hover:bg-white/80 transition"
                        data-banner-dot="{{ $index }}"
                        aria-label="Chọn banner {{ $index + 1 }}">
                </button>
            @endforeach
        </div>
        --}}
    </div>
</section>

<script>
    (() => {
        const container = document.querySelector('[data-banner]');
        if (!container) return;

        const slides = container.querySelectorAll('[data-banner-slide]');
        const dots   = container.querySelectorAll('[data-banner-dot]'); // hiện tại không dùng vì đã ẩn dots
        const prev   = container.querySelector('[data-banner-prev]');
        const next   = container.querySelector('[data-banner-next]');

        if (!slides.length) return;

        let current = 0;
        const total = slides.length;
        const intervalMs = 5000;
        let timer;

        const showSlide = (index) => {
            slides.forEach((slide, i) => {
                slide.classList.toggle('opacity-100', i === index);
                slide.classList.toggle('z-10', i === index);
                slide.classList.toggle('opacity-0', i !== index);
                slide.classList.toggle('z-0', i !== index);
                slide.classList.toggle('hidden', i !== index);
                slide.classList.toggle('block', i === index);
            });

            // nếu sau này bật lại dots thì có thể dùng đoạn code dưới
            // dots.forEach((dot, i) => {
            //     if (i === index) {
            //         dot.classList.add('bg-white');
            //         dot.classList.remove('bg-transparent');
            //     } else {
            //         dot.classList.remove('bg-white');
            //         dot.classList.add('bg-transparent');
            //     }
            // });

            current = index;
        };

        const nextSlide = () => {
            const nextIndex = (current + 1) % total;
            showSlide(nextIndex);
        };

        const prevSlide = () => {
            const prevIndex = (current - 1 + total) % total;
            showSlide(prevIndex);
        };

        const resetTimer = () => {
            if (timer) clearInterval(timer);
            timer = setInterval(nextSlide, intervalMs);
        };

        // Auto play
        resetTimer();

        // Buttons
        if (next) {
            next.addEventListener('click', () => {
                nextSlide();
                resetTimer();
            });
        }

        if (prev) {
            prev.addEventListener('click', () => {
                prevSlide();
                resetTimer();
            });
        }

        // Dots đã ẩn, nên tạm không bind sự kiện
        // dots.forEach((dot, index) => {
        //     dot.addEventListener('click', () => {
        //         showSlide(index);
        //         resetTimer();
        //     });
        // });
    })();
</script>

