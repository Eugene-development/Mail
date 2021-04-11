@component('mail::message')
    # Запрос на прайс-лист
    Имя: {{$request->name}}
    Почта: {{$request->email}}
@endcomponent