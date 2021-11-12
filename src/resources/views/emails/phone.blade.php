@component('mail::message')
    # Получен номер телефона клиента из формы обратной связи
    Телефон клиента: {{$request->phone}}
@endcomponent
