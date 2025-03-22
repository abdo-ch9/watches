<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
    <link rel="stylesheet" href="assets/css/Auth.css">
</head>
<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-box">
                <input type="text" placeholder="Enter your name" required name="name">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" required name="email">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" required name="password">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" required name="password_confirmation">
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
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
                <input type="Submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
