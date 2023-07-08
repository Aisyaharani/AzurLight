<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?> ">

  <title>Admin_Article</title>
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
              <a class="active" href="#">Article</a>
            </li>
          </ul>
        </div>

      </div>
      <div class="statistic">
        <div class="order">
          <div class="head">
            <h3>Statistic</h3>
          </div>
          <a href="<?= base_url('Article/creteArticle'); ?>" class="btn btn-primary mb-4"><i class="fas fa-plus-square mr-3"></i>Tambah</a>
          <table class="table text-center" width="100%" border="2">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">judul</th>
                <th scope="col">isi</th>
                <th scope="col">featured</th>
                <th scope="col">choice</th>
                <th scope="col">popular news</th>
                <th scope="col">foto</th>
                <th scope="col">active</th>
                <th scope="col">date</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach ($article as $item) : ?>
              <tbody>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td style="padding-left:10px;"><?= $item['JUDUL']; ?></td>
                  <td style="padding-left:10px;"><?= $item['CONTENT']; ?></td>
                  <td style="padding-left:10px;"><?= $item['FEATURED']; ?></td>
                  <td style="padding-left:10px;"><?= $item['CHOICE']; ?></td>
                  <td style="padding-left:10px;"><?= $item['THREAD']; ?></td>
                  <td style="padding-left:10px;"><img src="<?php base_url('assets/pic') ?>" <?= $artic['PHOTO']; ?></td>
                  <td style="padding-left:10px;"><?= $item['IS_ACTIVE']; ?></td>
                  <td style="padding-left:10px;"><?= $item['date']; ?></td>
                  <td>
                    <a href="<?= base_url(); ?>Category/Edit/<?= $item['ID_CATEGORY']; ?>"><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a>
                    <a href="<?= base_url(); ?>Category/Delete/<?= $item['ID_CATEGORY']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a>
                  </td>
                </tr>
              </tbody>
              <?php $i++ ?>
            <?php endforeach; ?>
          </table>
        </div>

      </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src="<?= base_url('assets/scripts/admin.js') ?>"></script>
</body>

</html>