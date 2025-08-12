<x-layouts.entrepreneur>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">
        <form method="POST" action="{{ route('entrepreneur.ekraf.update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('main-entrepreneur.business-update.form-foto')

            @include('main-entrepreneur.business-update.form-information')
        </form>
    </div>
</x-layouts.entrepreneur>
