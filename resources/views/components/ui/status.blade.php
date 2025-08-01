@props(['status', 'note' => null])


@switch($status)
    @case(0)
        <span class="me-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
            Ditolak oleh Admin
        </span>
    @break

    @case(1)
        <span
            class="me-2 rounded bg-orange-100 px-2.5 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900 dark:text-orange-300">
            Pengajuan
        </span>
    @break

    @case(2)
        <span
            class="me-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
            Aktif
        </span>
    @break
@endswitch
