<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>

    <h1>Verify Email</h1>
    <p>Hi, {{$user->name}}</p>
    <p>Click the link below to verify your email address</p>
    <a href="{{ route('verification', $user->remember_token) }}">Verify Email</a>
    

    
</body>
</html>