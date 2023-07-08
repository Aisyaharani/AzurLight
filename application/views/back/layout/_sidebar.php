<section id="sidebar">
  <a href="#" class="brand">
    <img src="asset/bottom-left-1.jpg">
    <span class="text">Admin</span>
  </a>
  <ul class="side-menu top">
    <li class="active">
      <a href="<?= base_url('Admin') ?>">
        <i class='bx bxs-home'></i>
        <span class="text">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="<?= base_url('Category') ?>">
        <i class='bx bxs-category'></i>
        <span class="text">Categories</span>
      </a>
    </li>
    <li>
      <a href=" <?= base_url('Article') ?>">
        <i class='bx bxs-book-open'></i>
        <span class="text">Article</span>
      </a>
    </li>
    <li>
      <a href=" <?= base_url('User') ?>">
        <i class='bx bxs-user'></i>
        <span class="text">User</span>
      </a>
    </li>

  </ul>
  <ul class="side-menu">

    <li>
      <a href=" <?= base_url('Auth/logout') ?>" class="logout">
        <i class='bx bxs-log-out'></i>
        <span class="text">Logout</span>
      </a>
    </li>
  </ul>
</section>