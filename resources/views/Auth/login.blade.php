<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>

    <link rel="stylesheet" href="assets/css/Auth.css">
</head>

<body>
    <div class="container">
    <div class="wrapper">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-box button">
                <input type="Submit" value="login">
            </div>
            <div class="text">
                <h3>Don't have an account? <a href="{{ route('register') }}">Register now</a></h3>
            </div>
        </form>
<
    </div>

</body>

</html>
