<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body>
    
    @foreach($genres as $Genre)   
        <a href="/genre/{{$Genre->id}}"> {{$Genre->name}}</a> 
        @endforeach

</body>
</html>