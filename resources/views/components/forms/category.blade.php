@props(['data' => ''])
<select id="category" name="category"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 scrollbar-custom">
    <option value="Usaha" {{ $data == 'Usaha' ? 'selected' : '' }}>Usaha</option>
    <option value="Perseorangan" {{ $data == 'Perseorangan' ? 'selected' : '' }}>
        Perseorangan</option>
    <option value="Komunitas" {{ $data == 'Komunitas' ? 'selected' : '' }}>
        Komunitas</option>
    <option value="Pendidikan" {{ $data == 'Pendidikan' ? 'selected' : '' }}>
        Pendidikan</option>
</select>
