<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaming website</title>

  <!-- 
    - favicon link
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <!-- 
      - overlay
    -->
    <div class="overlay" data-overlay></div>

    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" alt="GameX logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-nav>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="GameX logo">
          </a>

          <button class="nav-close-btn" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#tournament" class="navbar-link">Tournament</a>
          </li>

          <li>
            <a href="#team" class="navbar-link">Team</a>
          </li>

          <li>
            <a href="#gears" class="navbar-link">Gears</a>
          </li>

          <li>
            <a href="contact.php" class="navbar-link">Contact</a>
          </li>

        </ul>

        <ul class="nav-social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="search">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <button class="btn-sign_in">

          <div class="icon-box">
            <a href="REGISTRATION.php"><ion-icon name="log-in-outline"></ion-icon></a>
          </div>
          <a href="LOGIN.php">Log-in</a> 

        </button>

      </div>

    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="hero">
        <div class="container">

          <p class="hero-subtitle">Season 69</p>

          <h1 class="h1 hero-title">AGNAS</h1>

          <div class="btn-group">

            <button class="btn btn-primary">
              <span>Watch live</span>

              <ion-icon name="play-circle"></ion-icon>
            </button>

            <button class="btn btn-link">Dream making</button>

          </div>

        </div>
      </section>





      <div class="section-wrapper">

        <!-- 
          - #ABOUT
        -->

        <section class="about" id="about">
          <div class="container">

            <figure class="about-banner">

              <img src="./assets/images/about-img.png" alt="M shape" class="about-img">

              <img src="./assets/images/character-1.png" alt="Game character" class="character character-1">

              <img src="./assets/images/character-2.png" alt="Game character" class="character character-2">

              <img src="./assets/images/character-3.png" alt="Game character" class="character character-3">

            </figure>

            <div class="about-content">

              <p class="about-subtitle">Find team member</p>

              <h2 class="about-title">Experience just for gamers <strong>offer</strong> </h2>

              <p class="about-text">
              Dive into the ultimate gaming experience with our 'Experience Just for Gamers' offer! Enjoy state-of-the-art gaming rigs, VIP access to tournaments, 
              exclusive events, and more. Elevate your passion for gaming with us – where every moment is tailored for gamers, by gamers. Join us and level up your gaming lifestyle today!
              </p>

              <p class="about-bottom-text">
                <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                <span>Will sharpen your brain and focus</span>
              </p>

            </div>

          </div>
        </section>





        <!-- 
          - #TOURNAMENT
        -->

        <section class="tournament" id="tournament">
          <div class="container">

            <div class="tournament-content">

              <p class="tournament-subtitle">Check out our next</p>

              <h2 class="h3 tournament-title">Gaming tournaments !</h2>

              <p class="tournament-text">
              "Calling all gamers! Do you have what it takes to dominate the virtual arena and claim 
              your rightful place among the elite? It's time to put your skills to the 
              test in the most thrilling esports tournament of the year! Join us for an 
              adrenaline-fueled competition where every play, every strategy, and every victory 
              matters. Whether you're a seasoned pro or a rising star, this is your chance to 
              showcase your talents, forge new friendships, and etch your name into esports history. 
              Don't miss out on the action seize the opportunity, embrace the challenge, and embark o
              n an epic gaming journey with us!"
              </p>

              <a href="tourna.php"><button class="btn btn-primary">Join with us</button></a>

            </div>

            <div class="tournament-prize">

              <h2 class="h3 tournament-prize-title">Highest Prize pool</h2>

              <data value="80000">₱1 MILLION</data>

              <figure>
                <img src="./assets/images/prize-img.png" alt="Prize image">
              </figure>

            </div>

            <div class="tournament-winners">

              <h2 class="h3 tournament-winners-title">Last winners</h2>

              <ul class="tournament-winners-list">

                <li>
                  <div class="winner-card">

                    <figure class="card-banner">
                      <img src="./assets/images/winner-img-1.png" alt="Winner image">
                    </figure>

                    <h3 class="h5 card-title">1st place</h3>

                  </div>
                </li>

                <li>
                  <div class="winner-card">

                    <figure class="card-banner">
                      <img src="./assets/images/winner-img-2.png" alt="Winner image">
                    </figure>

                    <h3 class="h5 card-title">2nd place</h3>

                  </div>
                </li>

              </ul>

            </div>

          </div>
        </section>





        <!-- 
          - #GALLERY
        -->

        <section class="gallery">
          <div class="container">

            <ul class="gallery-list has-scrollbar">

              <li>
                <figure class="gallery-item">
                  <img src="assets/images/onanay.png" alt="Gallery image">
                </figure>
              </li>

              <li>
                <figure class="gallery-item">
                  <img src="assets/images/krazy.png" alt="Gallery image">
                </figure>
              </li>

              <li>
                <figure class="gallery-item">
                  <img src="assets/images/KITSAKIT BA.png" alt="Gallery image">
                </figure>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
          - #TEAM
        -->

        <section class="team" id="team">
          <div class="container">

            <h2 class="h2 section-title">Popular eSports Teams</h2>

            <ul class="team-list">

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/teamm1.png" alt="Team member image">
                  </figure>
                

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/teamm2.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/teamm3.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/team4.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/team5.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="team-member">
                  <figure>
                    <img src="./assets/images/team6.png" alt="Team member image">
                  </figure>

                  <ion-icon name="link-outline"></ion-icon>
                </a>
              </li>                         
            </ul>

            <button class="btn btn-primary">View Other List of Popular Teams</button>

          </div>
        </section>





        <!-- 
          - #GEARS
        -->

        <section class="gears" id="gears">
          <div class="container">

            <h2 class="h2 section-title">check our gears</h2>

            <ul class="gears-list">

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="assets/images/sira.jpg" alt="Headphone">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">Asim Headset</h3>

                      <p class="card-subtitle">compshop ni aling lucille</p>

                    </div>

                    <div class="card-prize">$18</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="assets/images/mou.jpg" alt="Controller">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">G-mouse galing impyerno</h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$29</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="assets/images/onyek.jpg" alt="Gaming mask">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">

                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title">eSports jersey</h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$45</div>

                  </div>

                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span>Add to cart</span>
                    </button>

                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
          - #NEWSLETTER
        -->

        <section class="newsletter">
          <div class="container">

            <div class="newsletter-card">

              <div class="newsletter-content">
                <figure class="newsletter-img">
                  <img src="./assets/images/newsletter-img.png" alt="Newsletter image">
                </figure>

                <h2 class="h2 newsletter-title">Subscribe to our newsletter</h2>
              </div>

              <form action="" class="newsletter-form">
                <input type="email" name="email" required placeholder="Your Email Address" class="input-field">

                <button type="submit" class="btn btn-secondary">Subscribe</button>
              </form>

            </div>

          </div>
        </section>

      </div>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="GameX logo">
          </a>

          <div class="footer-menu-wrapper">

            <ul class="footer-menu-list">

              <li>
                <a href="#hero" class="footer-menu-link">Home</a>
              </li>

              <li>
                <a href="#about" class="footer-menu-link">About</a>
              </li>

              <li>
                <a href="#tournament" class="footer-menu-link">Tournament</a>
              </li>

              <li>
                <a href="#team" class="footer-menu-link">Team</a>
              </li>

              <li>
                <a href="#gears" class="footer-menu-link">Gears</a>
              </li>

              <li>
                <a href="#" class="footer-menu-link">Contact</a>
              </li>

            </ul>

            <div class="footer-input-wrapper">
              <input type="text" name="message" required placeholder="Find Here Now" class="footer-input">

              <button class="btn btn-primary">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </div>

          </div>

        </div>

        <div class="footer-quicklinks">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-item">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-item">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-item">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-item">Privacy</a>
            </li>

          </ul>

          <ul class="footer-social-list">

            <li>
              <a href="#" class="footer-social-link">
                <ion-icon name="logo-discord"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="footer-social-link">
                <ion-icon name="logo-twitch"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="footer-social-link">
                <ion-icon name="logo-xbox"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="footer-social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          <a href="#">EDWARDO GAMING</a>. all rights reserved
        </p>

        <figure class="footer-bottom-img">
          <img src="./assets/images/footer-bottom-img.png" alt="Online payment companies logo">
        </figure>
      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="btn btn-primary go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=yGngl9DJ"></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=6AqfGK6s"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!--TTS FUNCTIONS !-->
<script> 
function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") { 
        text = document.selection.createRange().text;
    }
    return text;
}
$(document).ready(function (){ 
   $(document).mouseup(function (e){ 
      setTimeout(function() { 
         responsiveVoice.cancel(); 
         responsiveVoice.speak(getSelectionText()); 
      }, 1);
   });
});
</script>
</body>

</html>