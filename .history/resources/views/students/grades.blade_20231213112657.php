<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($grades as $grade)
        {{$grade->subject_name }} <br>
        {{$grade->score }}
    @endforeach
</body>
</html>