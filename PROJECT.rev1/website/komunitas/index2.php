<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diskusi</title>
  <link rel="icon" href="bekicot.jpg" />
  <link rel="stylesheet" href="css/scrollmod.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/poki.css" />
  <link rel="stylesheet" href="css/loli.css">
  <link rel="stylesheet" href="css/text.css">
  <link rel="stylesheet" href="css/harus.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
  <!-- START Navigasi bar -->
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;">KKB</span>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="beranda.html">BERANDA</a></li>
            <li><a href="#">VISI DAN MISI</a></li>
            <li><a href="profil.php">PROFIL</a></li>
            <li><a href="index2.php">DISCUSION</a></li>  
        </ul>
    </nav>
    
    <!-- END Navigasi bar -->


  <!-- Content -->
  <section class="service section">
    <div class="container">
      <!-- Service item Start-->
      <div class="row">
        <div class="service-item padd-15">
          <div class="service-item-inner">
            <div class="icon">
              <a href="game.html"><i class="fa fa-gamepad"></i>
            </div>
            <h4>Game</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="service-item padd-15">
          <div class="service-item-inner">
            <div class="icon">
              <a href="#"><i class="fa fa-video"></i>
            </div>
            <h4>Vidio</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="service-item padd-15">
          <div class="service-item-inner">
            <div class="icon">
              <a href="buku.html"><i class="fa fa-book"></i></a>
            </div>
            <h4>Buku</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="service-item padd-15">
          <div class="service-item-inner">
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
            <h4>Kuis</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <!-- Kolom komen -->
        <div class="message-list">

          <!-- Daftar pesan akan ditampilkan di sini -->
        </div>
        
        <div class="comment">
          <div class="chatbox" id="scrollmod">
            <div class="message-list">
              <?php include('display.php'); ?>

              <!-- Daftar pesan akan ditampilkan di sini -->
            </div>
          </div>
          <form action="process.php" method="post">
            <div class="chat-input">
              <input class="form-chat-input" type="text" name="name" placeholder="name" />
              <input class="form-chat-input" type="text" name="message" placeholder="Komentar" required />
              <input type="submit" value="Kirim Pesan">
            </div>
          </form>
        </div>
        <!-- End Komen -->
        <!-- Service item End-->
      </div>
    </div>
  </section>
  <!-- END Content -->
  
  <!-- Start Login -->
  <section class="login section" style="z-index: 1111111">
    <div class="loginpage">
      <div class="loginvalue">
        <form action="">
          <h2>Login</h2>
          <div class="inputlogin">
            <i class="licon fa-solid fa-envelope"></i>
            <input type="email" placeholder="Masukkan Email" required />
          </div>
          <div class="inputlogin">
            <i class="licon fa-solid fa-key"></i>
            <input type="password" placeholder="Masukkan Password" required />
          </div>
          <div class="forget">
            <label for="">
              <input type="checkbox" />Remember Me,
              <a href="#">Forget Password</a>
            </label>
          </div>
          <button class="btn">Log in</button>
          <div class="register">
            <p>Don't have a account? <a href="#">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Login -->

  <!-- Footer -->
  <footer>
    <div class="footer-container row">
      <div class="logo-container">
        <a target="_blank" href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
        <a target="_blank" href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
        <a target="_blank" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
        <a target="_blank" href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="text-container">
        <p>&copy; 2023 Company Name. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script/java1.js"></script>
</body>

</html>