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
              <a class="active" href="#">Category</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="statistic">
        <div class="order">
          <div class="head">
            <h3>Daftar Category</h3>
          </div>
          <a href="<?= base_url('Category/Create'); ?>" class="btn btn-primary mb-4"><i class="fas fa-plus-square mr-3"></i>Tambah</a>
          <table class="table text-center" width="100%" border="2">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Kategory</th>
                <th scope="col">Active</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach ($category as $item) : ?>
              <tbody>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td style="padding-left:10px;"><?= $item['NAMA_CATEGORY']; ?></td>
                  <td style="padding-left:10px;"><?= $item['IS_ACTIVE']; ?></td>
                  <td>
                    <a href="<?= base_url(); ?>Category/Edit/<?= $item['ID_CATEGORY']; ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit">Edit</i></a>
                    <a href="<?= base_url(); ?>Category/Delete/<?= $item['ID_CATEGORY']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete">Delete</i></a>
                  </td>
                </tr>
              </tbody>
              <?php $i++ ?>
            <?php endforeach; ?>
          </table>

        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src=" <?= base_url('assets/scripts/admin.js') ?>"></script>
</body>

</html>