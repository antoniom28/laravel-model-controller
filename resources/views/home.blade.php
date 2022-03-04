<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="text-align: center">
    <h1> MOVIES </h1>
</div>
<ul class="section-list">
    @foreach ($lista as $movie)
    <li>
        <div class="back-face">
            <h5>Titolo Originale : {{$movie->original_title}} </h5>

            <h5>Titolo Originale : {{$movie->title}} </h5>

            <div class="vote">
                <h5>Voto : {{$movie->vote}} </h5>
            </div>

            <h5>Nazionalità : {{$movie->nationality}} </h5>

            <h5>Data : {{$movie->date}} </h5>
        </div>
    </li>
    @endforeach
</ul>
</body>
</html>
@dump($lista)
<style>
.section-list{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
}

.section-list li{
  line-height: 2;
  position: relative;
  background-color: rgba(0, 0, 0, 0.801);
  color: white;
  border: 2px ridge white;
  border-radius: 5px;
  list-style: none;
  margin: 10px;
  width: 280px;
  min-height: 400px;
} 

.back-face{
    padding: 10px;
    overflow: hidden;
}

[class*="-face"] {
    width: 94%;
    height: 94%;
    position: absolute;
    top: 3%;
    left: 3%;
}

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body{
    font-family: 'Montserrat', sans-serif;
}

span{
    font-size: 0.85em;
    color: #c7c7c7;
}

h1,h2,h3,h4,h5,p{
    display: inline-block;
}
</style>