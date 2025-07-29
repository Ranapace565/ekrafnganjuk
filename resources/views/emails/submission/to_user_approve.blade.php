@component('mail::message')
    # Pengajuanmu Diterima

    Pengguna {{ $submission->user->name }} pengajuan usahamu :

    - Nama Usaha: **{{ $submission->name }}**

    @component('mail::button', [
        'url' => route('visitor_logged.business-submission-update', $submission->id),
        'color' => 'blue',
    ])
        🔍 Perbarui informasi usaha
    @endcomponent

    Terima kasih,
    {{ config('app.name') }}
@endcomponent
