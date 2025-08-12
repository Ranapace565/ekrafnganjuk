<div class="border-b border-gray-900/10 pb-12 ">
    <h2 class="text-base/7 font-semibold text-gray-900 dark:text-white flex items-center">Informasi Umum Ekraf
    </h2>

    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class=" col-span-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama<span
                    class="text-red-600">*</span></label>
            <input type="text" name="name" id="name"
                class="md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Web Development & Agriculture" required>
        </div>
        <div class="w-full">
            <label for="manager" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Pengelola <span class="text-red-600">*</span></label>
            <input type="text" name="manager" id="manager"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Rana Bagaskara" required>
        </div>

        <div class="w-full">
            <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp
                <span class="text-red-600">*</span></label>
            <input type="number" name="contact" id="contact"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="088899997777" required>
        </div>
        <div class="w-full">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <x-forms.category required />
        </div>
        <div class="w-full">
            <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub
                Sektor<span class="text-red-600">*</span></label></label>
            <x-forms.sector-f :fillable="'required'" />
        </div>
        <x-forms.district-f />
        <div class="col-span-2">
            <label for="cover-photo" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                Usaha <span class="text-red-600">*</span> <x-ui.popover id="lokasi-usaha" :messages="[
                    [
                        'title' => 'Lokasi Usaha',
                        'desc' =>
                            'Pilih titik koordinat di peta, kemudian anda dapat melengkapi informasi di kolom bawah.',
                    ],
                ]">
                </x-ui.popover>
            </label>
            <x-forms.maps />

        </div>

        <div class="col-span-2">
            <label for="description" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                Usaha
                <x-ui.popover id="deskripsi-usaha" :messages="[
                    [
                        'title' => 'deskripsi Usaha',
                        'desc' => 'Lengkapi deskripsi usaha anda untuk informasi lebih detail tentang usahamu.',
                    ],
                    [
                        'title' => 'Gambar dalam deskripsi',
                        'desc' =>
                            'Gambar yang kamu upload di file manager Ekraf dapat dilihat dan digunakan oleh pengguna lain',
                    ],
                ]">
                </x-ui.popover>
            </label>

            <x-forms.public-tinymce-editor name="description" />
        </div>
    </div>
</div>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil nilai awal dari input hidden
        let latInput = document.getElementById('latitude');
        let lngInput = document.getElementById('longitude');
        let koordinatInput = document.getElementById('koordinat');
        let locationInput = document.getElementById('location-name');

        const initialLat = parseFloat(latInput.value) || -7.599676;
        const initialLng = parseFloat(lngInput.value) || 111.904380;

        const map = L.map('map').setView([initialLat, initialLng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        let marker = null;

        // Jika koordinat awal valid, tampilkan marker
        if (latInput.value && lngInput.value) {
            marker = L.marker([initialLat, initialLng]).addTo(map);
        }

        // Saat klik di peta
        map.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            latInput.value = lat;
            lngInput.value = lng;
            koordinatInput.value = `${lat}, ${lng}`;

            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker([lat, lng]).addTo(map);

            // Ambil nama lokasi (reverse geocoding)
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(res => res.json())
                .then(data => {
                    locationInput.value = data.display_name || 'Tidak ditemukan';
                })
                .catch(err => {
                    console.error('Gagal ambil nama lokasi:', err);
                    locationInput.value = 'Gagal memuat nama lokasi';
                });
        });
    });
</script> --}}
