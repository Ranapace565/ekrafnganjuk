{{-- @props([
    'title',
    'total',
    'icon' => '', // SVG string
    'color' => 'bg-primary-100 text-primary-800' // warna default bisa diubah per penggunaan
]) --}}

<div class="flex items-center p-4 rounded-lg shadow-sm {{ $color }} w-full h-full">
    <div class="p-3 rounded-full bg-white shadow-inner">
        {!! $icon !!}
    </div>
    <div class="ms-4">
        <h3 class="text-lg font-bold text-white">{{ $title }}</h3>
        <p class="text-4xl font-bold text-white">{{ $total }}</p>
    </div>
</div>
