@component('mail::message')
    # Pengajuan Diterima

    Hai {{ $submission->user->name }},

    Pengajuan usaha **{{ $submission->name }}** Anda telah diterima. Kami akan memproses data Anda lebih lanjut.

    Jika ada pertanyaan, hubungi kami.

    Terima kasih,<br>
    {{ config('app.name') }}
@endcomponent
