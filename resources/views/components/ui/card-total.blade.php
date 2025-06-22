@props([
    'title',
    'total',
    'icon' => '', // SVG string
    'color' => 'bg-primary-100 text-primary-800' // warna default bisa diubah per penggunaan
])

<div class="flex items-center p-4 rounded-lg shadow-sm {{ $color }}">
    <div class="p-3 rounded-full bg-white shadow-inner">
        {!! $icon !!}
    </div>
    <div class="ms-4">
        <h3 class="text-sm font-medium">{{ $title }}</h3>
        <p class="text-xl font-bold">{{ $total }}</p>
    </div>
</div>
