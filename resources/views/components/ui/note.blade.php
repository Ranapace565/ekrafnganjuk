@props([
    'note',
    'id' => uniqid(), // default unique ID jika tidak dikirim
])

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
    <label class="block mb-2 text-sm text-gray-900 dark:text-white font-extrabold">Catatan Admin:</label>
    <div id="comment-preview-{{ $id }}">
        {!! Str::limit($note, 200, '') !!}

        @if (Str::length($note) > 200)
            <span id="dots-{{ $id }}">...</span>
            <span id="more-{{ $id }}" class="hidden">{{ Str::substr($note, 200) }}</span>
            <button onclick="toggleReadMore('{{ $id }}', this)"
                class="text-blue-600 hover:underline text-sm ml-1">
                Baca selengkapnya
            </button>
        @endif
    </div>
</div>

@once
    <script>
        function toggleReadMore(id, el) {
            const moreText = document.getElementById('more-' + id);
            const dots = document.getElementById('dots-' + id);

            if (moreText.classList.contains('hidden')) {
                moreText.classList.remove('hidden');
                dots.classList.add('hidden');
                el.textContent = 'Sembunyikan';
            } else {
                moreText.classList.add('hidden');
                dots.classList.remove('hidden');
                el.textContent = 'Baca selengkapnya';
            }
        }
    </script>
@endonce
