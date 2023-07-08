<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?>">



  <title>Admin_Category</title>
</head>

<body>
  <!-- SIDEBAR -->
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class='bx bx-menu'></i>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
              <a class="active" href="">Category</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="statistic">
        <div class="order">
          <div class="head">
            <h3>Tambah Kategori</h3>
          </div>
          <form action="" class="form-horizontal" id="form" method="post">
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Name kategori</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_category" name="nama_category">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="validationCustom04" class="col-sm-2 col-form-label">Active</label>
              <div class="col-sm-10">
                <select class="form-select" id="is_active" name="is_active" required>
                  <option value="Y">Ya</option>
                  <option value="N">No</option>
                </select>
              </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src="<?= base_url('scripts/admin.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>