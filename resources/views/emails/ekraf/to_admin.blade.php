@component('mail::message')
    # Pengajuan Baru

    Pengguna {{ $ekraf->user->name }} telah memperbarui usaha yang pernah ditolak oleh admin:

    - Nama Usaha: **{{ $ekraf->name }}**
    - Kontak: {{ $ekraf->contact }}
    - Lokasi: {{ $ekraf->location }}

    {{-- @component('mail::button', ['url' => route('admin.business.ekraf.', $ekraf->id), 'color' => 'blue'])
        🔍 Lihat Detail Pengajuan
    @endcomponent --}}

    Terima kasih,
    {{ config('app.name') }}
@endcomponent
