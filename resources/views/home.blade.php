<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        @if (is_int($text) && is_int($text2))
            <p>{{$text +  $text2}}</p>
        @else
            <p>Error</p>
        @endif
    </section>
    <section>
        @if (is_int($text) && is_int($text2))
            <p>{{$text - $text2}}</p>
        @else
            <p>Error</p>
        @endif
    </section>

</body>
</html>