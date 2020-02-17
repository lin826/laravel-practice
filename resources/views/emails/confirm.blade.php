<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register Conformation Link</title>
</head>
<body>
  <h1>Thanks for registering on Weibo App!</h1>

  <p>
    Please click the link below to finish registration:
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If this is not your personal registration, please ignore this e-mail.
  </p>
</body>
</html>
