@component('mail::message')
    # Получена заявка на замер
    Имя : {{$request->name}}
    Адрес: {{$request->address}}
    Телефон: {{$request->phone}}
    Удобное время: {{$request->time}}
    Комментарий: {{$request->comment}}
@endcomponent
