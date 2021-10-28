<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Xin chào...{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        Đây là trang dành cho thành viên đã đăng nhập!
    </div>
</x-app-layout>