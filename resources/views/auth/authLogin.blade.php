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
        <form action="{{ route('login') }}">
          <h2 class="login-h">Email address</h2>
          <input type="email" name="email" id="email" placeholder="email@example.com">
          <h2 class="login-h">Password</h2>
          <input type="password" name="password" id="password" placeholder="Password">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label for="checkbox">Remember me</label>
          </div>
          <button type="submit" class="login-btn">Log in</button>
        </form>
        <br>
        <div class="register-div">
          <h4>Don't have an account?</h4>
          <a href="{{ route('authRegister') }}">Sign up</a>
        </div>
    </div>

</body>
</html>
