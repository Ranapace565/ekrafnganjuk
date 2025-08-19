<x-layouts.admin>

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">

        <h2 class="flex items-center text-base/7 font-semibold text-gray-900 dark:text-white">Lembar Event
            <x-ui.popover id="event-form" :messages="[
                [
                    'title' => 'Pengajuan Event',
                    'desc' => 'Anda dapat mengajukan event tentang ekonomi kreatif di nganjuk.',
                ],
            ]">
            </x-ui.popover>
        </h2>
        <form method="POST" action="{{ route('admin.event.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('main-admin.event-update.form-foto')
            @include('main-admin.event-update.form-information')
        </form>
    </div>
</x-layouts.admin>
