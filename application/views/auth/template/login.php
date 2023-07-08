<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('assets/style/login.css') ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" />
</head>

<body>
  <div class="center">
    <a href="<?= base_url('landing'); ?>">&lt;&lt;
      <span>Back</span>
    </a>
    <h1>Welcome!</h1>
    <p>Please login to <span>Azur</span>Light</p>
    <form method="post" action="<?= base_url('auth/kelolaData'); ?>">
      <div class="txt-field">
        <input type="email" id="username" name="username" value="<?= set_value('username') ?>" />
        <span class="icon"><i data-feather="user"></i></span>
        <label>Username</label>
      </div>

      <div class="txt-field">
        <input type="password" name="password" id="password" />
        <span class="icon"><i data-feather="lock"></i></span>
        <label>Password</label>
      </div>
      <input type="submit" value="Login" />
      <!-- <div class="pass">
        Forgot Password?
        <a href="reset.html">Reset Password</a>
      </div> -->
      <div class="signup-link">
        Don't have an account?
        <a href="<?= base_url('auth/registration'); ?>">Signup</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="<?= base_url('assets/script.js') ?>"></script>
</body>

</html>