<form action="{{ route('admin.business.submission.reject', $data->id) }}" method="POST" enctype="multipart/form-data"
    class="col-span-2">

    @csrf
    @method('PUT')

    <div class="col-span-2 sm:col-span-1 mt-4 border-t-2">
        <label for="location" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Catatan untuk
            pengaju
            <span class="text-red-600">*</span> <x-ui.popover id="admin-note" :messages="[
                [
                    'title' => 'Catatan untuk pengaju',
                    'desc' =>
                        'Catatan ini akan disampaikan ke pengaju usaha, anda dapat menyampaikan alasan penolakan pengajuan ini kepada pengaju, dan berikan saran perbaikan data.',
                ],
            ]">
            </x-ui.popover>
        </label>
        <x-forms.tinymce-editor name="note" :data="$data['note']" />
    </div>

    <div class="w-full flex justify-end space-x-2">
        <a type=""
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-900 dark:text-white hover:text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">
            Batal
        </a>
        <button type="submit"
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
            Tolak Pengajuan
        </button>
        {{-- <a type=""
            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-green-200 dark:focus:ring-green-900 hover:bg-green-800">
            Terima Pengajuan
        </a> --}}
    </div>
</form>
<form action="{{ route('admin.business.submission.approve', $data->id) }}" method="POST" enctype="multipart/form-data"
    class="col-span-2">

    @csrf

    <div class="w-full flex justify-end">
        <button type="submit"
            class="inline-flex items-center py-2.5 px-5 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:ring-4 focus:ring-green-200 dark:focus:ring-green-900 hover:bg-green-800">
            Terima Pengajuan
        </button>

    </div>
</form>
