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
              <a class="active" href="/article">Article</a>
            </li>
          </ul>
        </div>

      </div>
      <!-- 
			<ul class="box-info">
				<li>
					<i class='bx bxs-category' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Categories</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-book-open' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Article</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user' ></i>
					<span class="text">
						<h3>    2543</h3>
						<p>User</p>
					</span>
				</li>
			</ul> -->


      <div class="statistic">
        <div class="order">
          <div class="head">
            <h3>Tambah Article</h3>
          </div>
          <form action="" class="form-horizontal" id="form" method="post" enctype="multipart/formdata">

            <div class="mb-3 row">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" hidden>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Content</label>
              <div class="col-sm-10">
                <textarea name="content" id="content" cols="30" rows="4" class="form-control"></textarea>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Featured</label>
                <select class="form-select" id="featured" name="featured" required>
                  <option value="Y">Ya</option>
                  <option value="N">No</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="validationCustom04" class="form-label">Editor's Choice</label>
                <select class="form-select" id="choice" name="choice" required>
                  <option value="Y">Ya</option>
                  <option value="N">No</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="validationCustom04" class="form-label">Populer News</label>
                <select class="form-select" id="thread" name="thread" required>
                  <option value="Y">Ya</option>
                  <option value="N">No</option>
                </select>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Category</label>
                <select class="form-select" id="id_category" name="id_category" required>
                  <option>Pilih</option>
                  <?php foreach ($category as $c) { ?>
                    <option value="<?php echo $c['ID_CATEGORY']; ?>"><?php echo $c['NAMA_CATEGORY'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-2">
                <label for="validationCustom04" class="form-label">Active</label>
                <select class="form-select" id="is_active" name="id_active" required>
                  <option value="Y">Ya</option>
                  <option value="N">No</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="file_name" name="file_name">
              </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src="<?= base_url('assets/scripts/admin.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>