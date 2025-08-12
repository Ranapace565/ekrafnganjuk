<section class="bg-white dark:bg-gray-900 sm:px-6">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 items-center">
        {{-- Image div (order-first di mobile, order-last di desktop) --}}
        <div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-5 lg:flex order-first justify-center">
            <div class="overflow-hidden rounded-xl">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup"
                    class="w-full h-full object-cover">
            </div>
        </div>

        {{-- Text div --}}
        <div class="place-self-center lg:col-span-7">
            <div class="flex">
                <h1 class="text-4xl font-extrabold tracking-tight leading-none xl:text-4xl dark:text-white">
                    EKRAF
                </h1>
                <h1 class="text-4xl font-light tracking-tight leading-none xl:text-4xl dark:text-white">
                    kuy
                </h1>
            </div>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 dark:text-gray-400">
                EkrafKuy merupakan Platform Digital Ekonomi Kreatif Kabupaten Nganjuk yang dimana didalamnya terdapatb
                Daftar Ekonomi Kreatif berdasarkan Sub Sektor dan dibagi berdasarkan wilayah kecamatan yang ada di
                Kabupaten Nganjuk. Selain Daftar usah di Nganjuk.Ekraf juga terdapat Informasi mengenai Event-event
                Ekonomi Kreatif yang akan berlangsung dan ada juga Artikel-artikel tentang Ekonomi Kreatfi yang akan
                menambah wawasan kita mengenai Ekonmi Kreatif. Untuk itu daftarkan usaha Ekonomi Kreatifmu sekarang.
            </p>
            <a href="{{ route('visitor_logged.registration') }}"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-r-full rounded-l-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 ">
                Daftarkan Ekrafmu
            </a>
        </div>
    </div>
</section>
