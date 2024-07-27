<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="{{ url('./dist/css/adminlte.css') }}" />
    <link rel="stylesheet" href="{{ url('./fontawesome/css/all.css') }}" />
</head>

    <body class="login-page bg-body-secondary">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Drug</b>Dealer</a>
    </div>
    <div class="card rounded-4">
      <div class="card-body login-card-body rounded-4">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{route('auth.login')}}" method="POST">
          @csrf @method('POST')
          <div class="input-group mb-3">
            <input name="username" type="text" class="form-control" placeholder="Username" />
            <div class="input-group-text" style="width: 45px">
              <span class="fa fa-user"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="password" id="password"
              type="password"
              class="form-control"
              placeholder="Password"
            />
            <div class="input-group-text" style="width: 45px">
              <span id="eye" class="fa fa-eye"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script>
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye');

    eyeIcon.addEventListener('click', () => {
      passwordInput.type = passwordInput.type === 'text'? 'password' : 'text';
      eyeIcon.className=eyeIcon.className === 'fa fa-eye'? 'fa fa-eye-slash' : 'fa fa-eye';
    });
  </script>
</body>
</html>

