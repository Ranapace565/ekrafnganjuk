<section class="bg-white dark:bg-gray-900 sm:px-6">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 items-center">

        <div class="mb-6 lg:mb-0 lg:mt-0 mt-5 lg:col-span-7 lg:flex order-first lg:order-last justify-center">
            <div class="overflow-hidden rounded-xl">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup"
                    class="w-full h-full object-cover">
            </div>
        </div>


        {{-- Text div --}}
        <div class="place-self-center lg:col-span-5">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none xl:text-4xl dark:text-white">
                <span class="block">TEMUKAN</span>
                <span class="block text-primary-500">KEBUTUHAN</span>
                <span class="block">KREATIFMU</span>
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 dark:text-gray-400">
                Selamat datang di EkrafKuy, jendela menuju kekayaan kreativitas Kabupaten Nganjuk! Temukan beragam
                produk unik dan inovatif dari para pelaku ekonomi kreatif lokal, mulai dari kerajinan tangan yang
                memukau hingga kuliner lezat yang menggugah selera. Mari dukung karya anak bangsa dan jadilah bagian
                dari geliat ekonomi kreatif Nganjuk. Jelajahi sekarang dan temukan inspirasi baru!
            </p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-r-full rounded-l-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 
                    w-full">
                Cari Kebutuhan
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>

            {{-- <x-ui.modal-confirm id="modal-delete-1" :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptatem vitae ratione aperiam est libero quos quasi dolor voluptatibus incidunt?'" :action="route('beranda')" method="GET"
                confirmText="Ya, Hapus" cancelText="Batal" /> --}}

            <!-- Tombol untuk memunculkan modal -->
            {{-- <button type="button" data-modal-target="modal-delete-1" data-modal-toggle="modal-delete-1"
                class="text-red-600 hover:underline">
                Hapus
            </button> --}}

        </div>
    </div>
</section>
