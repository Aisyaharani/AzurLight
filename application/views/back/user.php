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
							<a class="active" href="#">User</a>
						</li>
					</ul>
				</div>

			</div>


			<div class="statistic">
				<div class="order">
					<div class="head">
						<h3>Daftar User</h3>
					</div>
					<table class="table text-center" width="100%" border="2">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nama</th>
								<th scope="col">Username</th>
								<th scope="col">Role</th>
								<th scope="col">aksi</th>
							</tr>
						</thead>
						<?php $i = 1 ?>
						<?php foreach ($user as $item) : ?>
							<tbody>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td style="padding-left:10px;"><?= $item['NAME']; ?></td>
									<td style="padding-left:10px;"><?= $item['USERNAME']; ?></td>
									<td style="padding-left:10px;"><?= $item['level']; ?></td>
									<td>
										<a href="<?= base_url(); ?>User/Delete/<?= $item['ID_USER']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete">Delete</i></a>
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


	<script src="<?= base_url('assets/scripts/admin.js') ?>"></script>
</body>

</html>