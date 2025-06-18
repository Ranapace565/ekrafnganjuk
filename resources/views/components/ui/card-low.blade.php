<div
    class="flex-shrink-0 lg:w-[500px] md:w-[500px] w-[300px] p-4 bg-white dark:bg-gray-800 rounded-2xl shadow-lg flex flex-col md:flex-row items-center gap-4 transition duration-300 ease-in-out transform hover:scale-105">

    <img src="{{ $image ?? 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png' }}"
        alt="{{ Str::limit($title, 20, '...') }}" class="w-20 h-20 object-contain">

    <div class="flex flex-col justify-between w-full">
        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ Str::limit($title, 20, '...') }}
        </h3>
        <p class="text-sm text-gray-700 dark:text-gray-300">
            {{ Str::limit($description, 100, '...') }}
        </p>
        <div class="w-full text-right mt-2">
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline btn-detail" data-title="s"
                data-description="s" data-image="s">
                Selengkapnya &gt;
            </a>
        </div>
    </div>
</div>
