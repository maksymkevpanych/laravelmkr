<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($grades as $grade)
    {{$grade->subject_name }} - {{$grade->score }}
        
        <!-- Add a form with a delete button -->
        <form action="{{ route(''/students/{id}'', $grade->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <br>
    @endforeach
</body>
</html>