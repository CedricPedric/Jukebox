<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <link rel="stylesheet" type="text/css" href="resources\views\songs\style.css" >
</head>
<body>
    <h1>Alle Songs!</h1>
    <div>Rock</div>
    <div>Pop</div>
    <div>Classic</div>
    <div>Rap</div>
    <div>Jazz</div>

    <div class=CardContainers>
@foreach($songs as $song)
    <!-- <a href="#">{{$song->name}}</a> - {{$song->Genres->name}}
    <br> -->
        <div class='MusicCard'> 
            <h2 class='MusicTitle'>{{$song->name}}</h2>
            <p class="Description">Genre: {{$song->Genres->name}}</p>
        </div>
@endforeach


    </div>


</body>

<style>

    
    .CardContainers{
    display: flex;
    flex-wrap: wrap;
    }
    .MusicCard{
    
    margin: 5px;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    background-color: gray;
    width: 250px;
    height: 150px;
    margin-left: 10px;
    text-align: center;
    padding-left: 15px;
    padding-right: 15px;
    }

    .MusicCard:hover,.MusicCard:active{
        box-shadow: inset 0 0 10px
    }

    .MusicCardImages{
    align-self: center;
    margin-top: 15px;
    margin-bottom: 0px;
    border-radius: 5px;
    width: 160px;
    height: 150px;
    }

    .Description{
    margin: 0px;
    margin-top: 3px;
    margin-left: 3px;
    }   

    .MusicTitle{
    margin-top: 5px;
    margin-bottom: 0px;
    }
    
</style>
</html>