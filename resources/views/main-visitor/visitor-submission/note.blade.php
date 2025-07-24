<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
    <label for="category" class="block mb-2 text-sm text-gray-900 dark:text-white font-extrabold">Catatan
        Admin : </label>
    <div id="comment-preview-5">
        {!! Str::limit($data['note'], 200, '') !!}

        @if (Str::length($data['note']) > 200)
            <span id="dots-5">...</span>
            <span id="more-5" class="hidden">{{ Str::substr($data['note'], 200) }}</span>
            <button onclick="toggleReadMore(5, this)" class="text-blue-600 hover:underline text-sm ml-1">Baca
                selengkapnya</button>
        @endif
    </div>
</div>

<script>
    function toggleReadMore(index, el) {
        const moreText = document.getElementById('more-' + index);
        const dots = document.getElementById('dots-' + index);

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
