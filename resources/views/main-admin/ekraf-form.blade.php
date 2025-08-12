<x-layouts.admin>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">
        <form method="POST" action="{{ route('admin.ekraf.store') }}" enctype="multipart/form-data">
            @csrf
            @include('main-admin.ekraf-form.form-foto')

            @include('main-admin.ekraf-form.form-information')

            @include('main-admin.ekraf-form.form-information-private')
        </form>
    </div>
</x-layouts.admin>
