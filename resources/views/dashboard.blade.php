<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




    @foreach ($userList as $user)

    <h1>{{ $user['name']}}</h1>
    <h2>{{$user['age']}}</h2>

   @if ($user['age'] < 18)
       <p>User can not drive</p>
   @endif
   <hr>
   @endforeach


</body>
</html>
