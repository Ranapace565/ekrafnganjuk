@component('mail::message')
    # Pengajuan Baru

    Pengguna {{ $submission->user->name }} telah mengajukan usaha baru:

    - Nama Usaha: **{{ $submission->name }}**
    - Kontak: {{ $submission->contact }}
    - Lokasi: {{ $submission->location }}

    @if ($submission->proof)
        📷 Bukti Pengajuan:
        {{ asset('storage/' . $submission->proof) }}
    @endif

    @component('mail::button', ['url' => route('admin.business.submission', $submission->id), 'color' => 'blue'])
        🔍 Lihat Detail Pengajuan
    @endcomponent

    Terima kasih,
    {{ config('app.name') }}
@endcomponent
