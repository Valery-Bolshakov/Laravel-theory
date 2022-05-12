<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Hello, World!</h2>


{{--такой вывод информации в шаблонизаторе не приветствуется--}}
{{--<?= $res;  // 11 - вид достанет значение arg2 из routes/web.php ?> <br>--}}

<!-- шаблонизатор имеет свой способы вывода информации: -->
{{--{{ $res }}  --}}{{--11--}}{{-- <br>--}}

{{--compact('res', 'name')--}}
{{ $res }}  {{--11--}}
{{ $name }}  {{--user--}}

</body>
</html>
