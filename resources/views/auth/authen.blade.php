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
          <h2 class="auth-h">You have account?</h2>
          <div class="auth-btn"><a href="{{ route('authLogin') }}">Log in</a></div>
          <h2 class="auth-h">No?</h2>
          <div class="auth-btn"><a href="{{ route('register') }}">Register</a></div>
    </div>

</body>
</html>
