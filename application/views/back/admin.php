<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?> ">

  <title>Admin</title>
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
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>

      </div>

      <ul class="box-info">
        <li>
          <i class='bx bxs-category'></i>
          <span class="text">
            <h3><?= $jmlh_category ?></h3>
            <p>Categories</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-book-open'></i>
          <span class="text">
            <h3><?= $jmlh_article ?></h3>
            <p>Article</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-user'></i>
          <span class="text">
            <h3><?= $jmlh_user ?></h3>
            <p>User</p>
          </span>
        </li>
      </ul>


      <div class="statistic">
        <div class="order">
          <div class="head">
            <h3>Statistic</h3>
            <div class="chart-area">
              <canvas id="myAreaChart" height="83vh"></canvas>
              <div id="calendar"></div>
            </div>
          </div>

        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <script type="text/javascript">
    var events = <?php echo json_encode($data) ?>;

    var date = new Date()
    var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear()

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      events: events
    })
  </script>


  <script src="<?= base_url('assets/scripts/admin.js') ?>"></script>
</body>

</html>