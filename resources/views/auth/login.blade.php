<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form method="POST" action=" {{ route('loginUser') }}  " >
        @csrf
        @if(Session::has('success'))
            <span>{{Session::get('success')}}</span><br>
        @endif
        @if(Session::has('fail'))
            <span>{{Session::get('fail')}}</span><br> 
        @endif
        <Label for="email">Email</Label>
        <input type="email" name="email" placeholder="Enter Email" value="{{old('email')}}"><br>
        <span>@error('email') {{$message}} @enderror</span><br>

        <Label for="password">Password</Label>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <span>@error('password') {{$message}} @enderror</span><br>

        <input type="submit" value="Login">
        <br>

        <a href="registration">Registration</a>

    </form>
    
</body>
</html>