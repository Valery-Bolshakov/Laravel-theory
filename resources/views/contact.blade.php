<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Роутинг в Laravel. Часть 2</title>
</head>
<body>

{{--создадим форму где данные будут отправляться методом post() и приходить на эту же страницу--}}
{{--<form action="send-email" method="post">--}}
{{--метод route('contact') используется для указания именованых маршрутов--}}

<form action="{{--{{ route('contact') }}--}}" method="post">

    {{-- csrf_field() --}} {{--устаревший вид токена--}}
    @csrf {{--сепциальный ТОКЕН защищающий от csrf атак--}}
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">Submit</button>
</form>

</body>
</html>
