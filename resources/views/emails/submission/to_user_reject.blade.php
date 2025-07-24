@component('mail::message')
    # Pengajuanmu Ditolak

    Pengguna {{ $submission->user->name }} pengajuan usahamu :

    - Nama Usaha: **{{ $submission->name }}**
    - Catatan dari Admin: {!! $submission->note !!}

    @component('mail::button', [
        'url' => route('visitor_logged.business-submission-update', $submission->id),
        'color' => 'blue',
    ])
        🔍 Lihat Detail Pengajuan
    @endcomponent

    Terima kasih,
    {{ config('app.name') }}
@endcomponent
