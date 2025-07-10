@if ($errors->any())
    <div class="mb-4 p-4 rounded bg-red-100 border border-red-300 text-red-800">
        <strong>Terjadi kesalahan:</strong>
        <ul class="mt-2 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
