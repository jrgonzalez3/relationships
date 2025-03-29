<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <h1>Username: {{$user->name}}</h1>
    <h1>UserEMail: {{$user->email}}</h1>
    @foreach($user->phones as $phone)
    <ul>
        <li>
            <h2>UserPhone:{{$phone->prefix}} {{$phone->phone_number}} </h2>
        </li>
    </ul>
    @endforeach
</body>

</html>