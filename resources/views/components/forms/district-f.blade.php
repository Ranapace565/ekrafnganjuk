@props(['data' => null])

@php
    $selectedDistrict = is_array($data) ? $data['district_id'] ?? '' : $data->district_id ?? '';
    $selectedVillage = is_array($data) ? $data['village_id'] ?? '' : $data->village_id ?? '';
@endphp

<div class="">
    <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan
        <span class="text-red-600">*</span>
    </label>
    <select id="district" name="district_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 scrollbar-custom"
        required>
        <option value="">-- Pilih Kecamatan --</option>
        {{-- @foreach ($districts as $district)
            <option value="{{ $district->id }}">{{ $district->name }}</option>
        @endforeach --}}
        @foreach ($districts as $district)
            <option value="{{ $district->id }}" {{ (int) $selectedDistrict === (int) $district->id ? 'selected' : '' }}>
                {{ $district->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="">
    <label for="village" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa
        <span class="text-red-600">*</span> <x-ui.popover id="village_popover" :messages="[
            [
                'title' => 'Pemilihan Desa / Kelurahan',
                'desc' =>
                    'Pilih terlebih dahulu Kecamatan, untuk memilih desa / kelurahan berdasar kecamatan terdaftar',
            ],
        ]">
        </x-ui.popover>

    </label>
    <select id="village" name="village_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500  scrollbar-custom"
        required disabled>
        <option value="">-- Pilih Desa --</option>
    </select>
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const districtSelect = document.getElementById('district');
        const villageSelect = document.getElementById('village');

        districtSelect.addEventListener('change', function() {
            const districtId = this.value;

            // Reset desa
            villageSelect.innerHTML = '<option value="">-- Pilih Desa --</option>';
            villageSelect.disabled = true;

            if (!districtId) return;

            fetch(`/get-villages/${districtId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(village => {
                        const option = document.createElement('option');
                        option.value = village.id;
                        option.textContent = village.name;
                        villageSelect.appendChild(option);
                    });
                    villageSelect.disabled = false;
                })
                .catch(error => {
                    console.error('Gagal ambil desa:', error);
                });
        });
    });
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const districtSelect = document.getElementById('district');
        const villageSelect = document.getElementById('village');

        const selectedDistrict = '{{ $selectedDistrict }}';
        const selectedVillage = '{{ $selectedVillage }}';

        function loadVillages(districtId, preselectedVillageId = null) {
            villageSelect.innerHTML = '<option value="">-- Pilih Desa --</option>';
            villageSelect.disabled = true;

            fetch(`/get-villages/${districtId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(village => {
                        const option = document.createElement('option');
                        option.value = village.id;
                        option.textContent = village.name;
                        if (village.id == preselectedVillageId) {
                            option.selected = true;
                        }
                        villageSelect.appendChild(option);
                    });
                    villageSelect.disabled = false;
                })
                .catch(error => {
                    console.error('Gagal ambil desa:', error);
                });
        }

        districtSelect.addEventListener('change', function() {
            const districtId = this.value;
            loadVillages(districtId);
        });

        // Auto-load desa saat form edit
        if (selectedDistrict && selectedVillage) {
            loadVillages(selectedDistrict, selectedVillage);
        }
    });
</script>
