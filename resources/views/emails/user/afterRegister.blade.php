@component('mail::message')
    # Welcome

    Hi {{ $user->name }}
    <br>
    Selamat Datang di KodeCamp yaitu Koding Bootcamp, Kamu telah berhasil melakukan registrasi, Sekarang kamu bisa mengakses
    bootcamp tersebut !

    @component('mail::button', ['url' => route('login')])
        Login Here
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
