<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>landing</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?= base_url('assets/style/landing.css') ?>" />
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <!-- feather -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <!-- nav bar -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Azur<span>Light</span>.</a>
    <div class="navbar-nav">
      <a href="<?= base_url('') ?>">Home</a>
      <a href="<?= base_url('') ?>">Category</a>
      <a href="<?= base_url('') ?>">Article</a>
      <a href="<?= base_url('') ?>">About Us</a>
    </div>

    <div class="navbar-right">
      <a id="search-button"><i data-feather="search"></i></a>
      <div class="dropdown">
        <i data-feather="user" id="login"></i>
        <div class="dropdown-content">
          <a href="<?= base_url('auth'); ?>">LogIn</a>
          <a href="<?= base_url('auth/registration'); ?>">SignUp</a>
          <!-- <a href="#">Exit</a> -->
        </div>
      </div>
      <a id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <div class="search-form">
      <select id="search-filter">
        <option value="all">All</option>
        <option value="category1">Category</option>
        <option value="category2">Author</option>
        <input type="search" id="search-box" placeholder="Search here...">
        <label for="search-box"><i data-feather="search"></i></label>
    </div>

  </nav>
  <!-- navbar end -->

  <section class="banner">
    <div class="banner-main-content">
      <h2>GET THE WORLD'S LATEST TECH NEWS</h2>
      <h3>World's Leading Tech News Portal</h3>

      <button>
        <a href="#">Know More</a>
      </button>

      <div class="current-news-head">
        <h3>
          Apple Glasses: What we expect, what we think we are
          <span>by scott stein</span>
        </h3>

        <h3>
          What's it's like to have Elon Musk's old phone number
          <span>by abrar al-heeti</span>
        </h3>

        <h3>
          Watch the exact moment Chris Pratt accidentally deletes 51, 000
          emials <span>by goel fashingbauer</span>
        </h3>

        <h3>
          Richard Branson's Virgin Orbit will launch a rocket from midair
          Sunday <span>by eric mack</span>
        </h3>
      </div>
    </div>

    <div class="banner-sub-content">
      <div class="hot-topic">
        <img src="asset/banner-news-1.jpg" alt="" />

        <div class="hot-topic-content">
          <h2>
            Twitter's New Retweet With Comment Counter Is Now Available On
            Andriod & Web
          </h2>

          <h3>New Topic 1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            consequatur nostrum minus iusto fugit unde.
          </p>
          <a href="#">Read More</a>
        </div>
      </div>

      <div class="hot-topic">
        <img src="asset/banner-news-2.jpg" alt="" />

        <div class="hot-topic-content">
          <h2>
            Twitter's New Retweet With Comment Counter Is Now Available On
            Andriod & Web
          </h2>

          <h3>New Topic 1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            consequatur nostrum minus iusto fugit unde.
          </p>
          <a href="#">Read More</a>
        </div>
      </div>

      <div class="hot-topic">
        <img src="asset/banner-news-3.jpg" alt="" />

        <div class="hot-topic-content">
          <h2>
            Twitter's New Retweet With Comment Counter Is Now Available On
            Andriod & Web
          </h2>

          <h3>New Topic 1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            consequatur nostrum minus iusto fugit unde.
          </p>
          <a href="#">Read More</a>
        </div>
      </div>

      <div class="hot-topic">
        <img src="asset/banner-news-4.jpg" alt="" />

        <div class="hot-topic-content">
          <h2>
            Twitter's New Retweet With Comment Counter Is Now Available On
            Andriod & Web
          </h2>

          <h3>New Topic 1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            consequatur nostrum minus iusto fugit unde.
          </p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </section>


  <main>
    <section class="main-container-left">
      <h2>Top News</h2>
      <div class="container-top-left">
        <article>
          <img src="asset/top-left.jpg" />

          <div>
            <h3>Best Used Cars Under $1234,00 for families</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Blanditiis ea sint, nisi rem earum fugit? Facere veritatis
              sapiente eveniet quibusdam.
            </p>

            <a href="#">Read More <span>>></span></a>
          </div>
        </article>
      </div>

      <div class="container-bottom-left">
        <article>
          <img src="asset/bottom-left-1.jpg" />
          <div>
            <h3>Best smart speakers for the year</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi iure modi animi cupiditate. Explicabo, nihil?
            </p>

            <a href="#">Read More <span>>></span></a>
          </div>
        </article>

        <article>
          <img src="asset/bottom-left-2.jpg" />
          <div>
            <h3>
              iPad Pro, reviewed: Has the iPad become my main computer now?
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi iure modi animi cupiditate. Explicabo, nihil?
            </p>

            <a href="#">Read More <span>>></span></a>
          </div>
        </article>
      </div>
    </section>

    <section class="main-container-right">
      <h2>Latest News</h2>

      <article>
        <h4>just in</h4>
        <div>
          <h2>
            Here's how to track your stimulus check with the IRS Get My
            Payment Portal
          </h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
            repellendus?
          </p>

          <a href="#">Read More <span>>></span></a>
        </div>
        <img src="asset/right-1.jpg" />
      </article>

      <article>
        <h4>just in</h4>
        <div>
          <h2>The best outdoor games to play with your family</h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
            repellendus?
          </p>

          <a href="#">Read More <span>>></span></a>
        </div>
        <img src="asset/right-2.jpg" />
      </article>

      <article>
        <h4>just in</h4>
        <div>
          <h2>
            Why walk? Check out the best electric scooters and e-bikes for
            2020
          </h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
            repellendus?
          </p>

          <a href="#">Read More <span>>></span></a>
        </div>
        <img src="asset/right-3.jpg" />
      </article>

      <article>
        <h4>just in</h4>
        <div>
          <h2>
            Disneyland Paris will stream its Lion King stage show Friday night
          </h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
            repellendus?
          </p>

          <a href="#">Read More <span>>></span></a>
        </div>
        <img src="asset/right-4.jpg" />
      </article>

      <article>
        <h4>just in</h4>
        <div>
          <h2>
            Looking at a phone's lock screen also requries a warrant, judge
            rules
          </h2>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
            repellendus?
          </p>

          <a href="#">Read More <span>>></span></a>
        </div>
        <img src="asset/right-5.jpg" />
      </article>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <h2>AZURLIGHT</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
          molestias aut blanditiis totam quia enim, autem tenetur cum facere,
          fugit beatae at voluptas ipsum perferendis!
        </p>
      </div>

    </div>

    <p>Copyright &copy; 2024 All in Golput</p>
  </footer>

  <a href="#" class="goTopBtn"><i data-feather="arrow-up"></i></a>

  <script>
    feather.replace();
  </script>
  <script src="scripts/landing.js" async defer></script>
</body>

</html>