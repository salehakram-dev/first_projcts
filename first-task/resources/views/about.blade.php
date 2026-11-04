<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>

    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id="name"><br><br>
        <select name="departments" id="departments">
            @foreach ($departments as $key => $department)
                <option value="{{ $department }}">{{ $department }}</option>
            @endforeach


        </select><br><br>
        <input type="submit" value="sent">
    </form>
</body>

</html>
