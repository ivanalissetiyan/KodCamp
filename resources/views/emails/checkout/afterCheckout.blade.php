@component('mail::message')
    # Register Koding Bootcamp: {{ $checkout->Camp->title }}

    Hi {{ $checkout->User->name }}
    <br>
    Terimakasih telah melakukan registrasi untuk <b>{{ $checkout->Camp->title }}</b>, Silahkan langkah selanjutnya yaitu
    melakukan pembayaran

    @component('mail::button', ['url' => route('dashboard', $checkout->id)])
        My Dashboard
    @endcomponent

    Terimakasih,<br>
    {{ config('app.name') }}
@endcomponent
