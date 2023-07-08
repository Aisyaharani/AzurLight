<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="<?= base_url('assets/style/login.css') ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" />
</head>

<body>
  <div class="center">
    <h1>Welcome!</h1>
    <p>Register to <span>Azur</span>Light</p>
    <form method="post" action="<?= base_url('auth/simpanAkun'); ?>">
      <div class="txt-field">
        <input type="text" id="name" name="name" value="<?= set_value('name') ?>" />
        <span class="icon"><i data-feather="user"></i></span>
        <label>Nama</label>
      </div>

      <div class="txt-field">
        <input type="text" name="username" id="username" value="<?= set_value('username') ?>" />
        <span class="icon"><i data-feather="user"></i></span>
        <label>Username</label>
      </div>

      <div class="txt-field">
        <input type="password" name="password1" id="password1" />
        <span class="icon"><i data-feather="lock"></i></span>
        <label>Password</label>
      </div>

      <div class="txt-field">
        <input type="password" name="password2" id="password2" />
        <span class="icon"><i data-feather="check-square"></i></span>
        <label>Confirm Password</label>
      </div>

      <input type="submit" value="Sign Up" />
      <!-- <div class="pass">
          Forgot Password?
          <a href="reset.html">Reset Password</a>
        </div> -->

      <div class="signup-link">
        I have any account!
        <a href="<?= base_url('auth'); ?> ">Login</a>
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