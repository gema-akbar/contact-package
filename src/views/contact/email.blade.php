@component('mail::message')
    # Introduction

    From: {{$name}}

    {{$message}}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
