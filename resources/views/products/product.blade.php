@section('title', 'Trang sản phẩm')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sản phẩm') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    <h1 class="font-semibold text-2xl py-1">Danh Sách Sản Phẩm</h1>
                    <button type="button"
                        class=" bg-gray-300
                        font-medium rounded-lg text-sm px-5 py-2.5
                        text-center leading-5 duration-200">
                        Thêm sản phẩm
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
