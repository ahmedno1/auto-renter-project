<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car rent</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset ('css/sms.css')}}">
</head>
<body>
    <div class="screen">
        <form action="{{ route('register') }}">
        <h2 class="register-h">Your name</h2>
        <input type="name" name="name" id="name" placeholder="Your full name" class="register-input">
          <h2 class="register-h">Email address</h2>
          <input type="email" name="email" id="email" placeholder="email@example.com" class="register-input">
          <h2 class="register-h">Password</h2>
          <input type="password" name="password" id="password" placeholder="Password" class="register-input">
          <h2 class="register-h">Confirm password</h2>
          <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm password" class="register-input">
          <button type="submit" class="register-btn">Sign up</button>
        </form>
        <div class="register-div">
          <h4>you have an account?</h4>
          <a href="{{ route('authLogin') }}">Log in</a>
        </div>
    </div>

</body>
</html>
