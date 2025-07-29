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
      <form action="{{ route('authLogin') }}">
          <h2>You have account?</h2>
          <button type="submit">Log in</button>
      </form>
      <form action="{{ route('authRegister') }}">
          <h2>No?</h2>
          <button type="submit">Sign up</button>
      </form>
    </div>

</body>
</html>
