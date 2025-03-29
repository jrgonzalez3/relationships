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

    <h1>UserRole de : {{$user->name}}</h1>
    @foreach($user->roles as $role)
    <ul>
        <li>
            <h2>Userrole:{{$role->name}} added_by {{$role->pivot->added_by}} </h2>
        </li>
    </ul>
    @endforeach
</body>

</html>