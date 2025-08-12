@props(['data' => null, 'choose' => '---- Pilih Sektor --', 'fillable' => ''])

<select id="sector" name="sector_id"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500dark:focus:border-primary-500 scrollbar-custom"
    {{ $fillable }}>
    <option value="">{{ $choose }}</option>
    @foreach ($sectors as $sector)
        <option value="{{ $sector->id }}" {{ $data == $sector->id ? 'selected' : '' }}>
            {{ $sector->name }}
        </option>
    @endforeach
</select>
