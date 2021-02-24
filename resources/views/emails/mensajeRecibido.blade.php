<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            background: red;
            color: white;
            border-style: dashed;
            border-width: 5px;
        }
    </style>
</head>
<body>
<h1>Mensaje recibido de {{$msg['name']}} con su correo {{$msg['email']}}</h1>
<strong>{{$msg['asunto']}}</strong>
<p>{{$msg['message']}}</p>
</body>
</html>