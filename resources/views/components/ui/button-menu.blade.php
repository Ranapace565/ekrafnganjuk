@props([
    'id' => uniqid(),
    'size' => '',
    'detailUrl' => null,
    'editUrl' => null,
    'deleteUrl' => null,
])
@if ($deleteUrl || $editUrl || $detailUrl != null)
    <div class="flex justify-end m-1">
        <button id="dropdownButton-{{ md5($id) }}" data-dropdown-toggle="dropdown-{{ md5($id) }}"
            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"
            type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 3">
                <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
        </button>
        <div id="dropdown-{{ md5($id) }}"
            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg w-44 dark:bg-gray-800 shadow-lg">
            <ul class="py-2" aria-labelledby="dropdownButton-{{ md5($id) }}">
                @if ($detailUrl != null)
                    <li>
                        <a href="{{ $detailUrl }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                    </li>
                @endif
                @if ($editUrl != null)
                    <li>
                        <a href="{{ $editUrl }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ubah</a>
                    </li>
                @endif
                @if ($deleteUrl != null)
                    <li>
                        <button type="button" data-modal-target="modal-delete-{{ md5($id) }}"
                            data-modal-toggle="modal-delete-{{ md5($id) }}"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Hapus
                        </button>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    @if ($deleteUrl)
        <x-ui.modal-confirm id="modal-delete-{{ md5($id) }}" :message="'Apakah Anda yakin ingin menghapus data ini?'" :action="$deleteUrl" method="DELETE"
            confirmText="Ya, Hapus" cancelText="Batal" />
    @endif

@endif
