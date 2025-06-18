<article
    class="flex-shrink-0  w-[300px] flex flex-col  transition-colors max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">


    <a href="#">
        <img src="{{ $image ?? 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
            alt="{{ $title }}" class="w-full h-48 object-cover">
    </a>
    <div class="p-5">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            <a href="#">{{ Str::limit($title, 30, '...') }}</a>
        </h2>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">
            {{ Str::limit($description, 70, '...') }}
        </p>
        <a href="{{ $link ?? '#' }}"
            class="inline-flex items-center text-blue-600 hover:underline dark:text-blue-500 font-medium">
            Baca dalam 2 menit
            <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z">
                </path>
            </svg>
        </a>
    </div>
</article>
{{-- <article
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
    <a href="#">
        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" alt="Our first office"
            class="w-full h-48 object-cover">
    </a>
    <div class="p-5">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            <a href="#">Our first office</a>
        </h2>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-300">
            Over the past year, Volosoft has undergone many changes! After months of preparation.
        </p>
        <a href="#"
            class="inline-flex items-center text-primary-600 hover:underline dark:text-primary-500 font-medium">
            Read in 2 minutes
            <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z">
                </path>
            </svg>
        </a>
    </div>
</article> --}}
