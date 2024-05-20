<?php
require 'super-admin/functions.php';
$achiv = query("SELECT * FROM prestasi ORDER BY no DESC ");

$galeryImg = 6;
$datasPerPage = count(query("SELECT * FROM post"));
$jumlahHalaman = ceil($datasPerPage / $galeryImg);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($galeryImg * $halamanAktif) - $galeryImg;
$posts = query("SELECT * FROM post ORDER BY id DESC LIMIT $awalData, $galeryImg");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmanusArt</title>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://smanusart.com/">
  <meta property="og:image:alt" content="Image with &quot;SMAnusart · Seni Dan Esktrakulikuler&quot; text.">
  <!-- Primary Meta Tags -->
  <meta propert>
  <title>SMAnusArt - Art and Extraculiculer</title>
  <meta name="robots" content="max-image-preview:large">
  <meta name="title" content="SMAnusArt - Art and Extraculiculer " />
  <meta name="description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://smanusart.com/" />
  <meta property="og:title" content="SMAnusArt Kesenian dan Ekstrakurikuler - SMA Negeri 1 Ngunut " />
  <meta property="og:description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler" />
  <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://smanusart.com/" />
  <meta property="twitter:title" content="@smanusart" />
  <meta property="twitter:description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler" />
  <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />
  <meta name="author" content="SmanusArt">
  <meta content="smanusart sma negeri 1 ngunut" name="keywords">
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- preload image -->
  <link rel="preload" href="assets/images/about-banner.png" as="image">
  <link rel="preload" href="assets/images/contact.png" as="image">
  <link rel="preload" href="assets/images/bg.png" as="image">
  <link rel="preload" href="assets/images/hero-banner.png" as="image">
  <link rel="preload" href="assets/images/logo.png" as="image">
  <link rel="preload" href="assets/images/sponsor-1.jpeg" as="image">
  <link rel="preload" href="assets/images/sponsor-2.png" as="image">
    
  <!-- 
    - #PRELOADER
  -->
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">SmanusArt</p>
  </div>

  <!-- 
    - #HEADER
  -->

  <header>

    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.png" alt="SmanusArt Logo">
      </a>

      <div class="navbar-wrapper">

        <button class="navbar-menu-btn" data-navbar-toggle-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li class="nav-item">
              <a href="#home" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">Layanan</a>
            </li>
            <li class="nav-item">
              <a href="#cta" class="nav-link">Sponsor</a>
            </li>
            <li class="nav-item">
              <a href="#project" class="nav-link">Galeri</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Kontak</a>
            </li>
            <li class="nav-item">
              <a href="#features" class="nav-link">Prestasi</a>
            </li>
          </ul>
        </nav>

      </div>

    </div>

  </header>





  <main>

    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">SmanusArt</h1>

            <p class="hero-text">
            SManusArt hadir sebagai platform yang didedikasikan untuk mempublikasikan kumpulan karya siswa, dokumentasi, dan berita kegiatan yang ada di SMA Negeri 1 Ngunut.
            </p>

            <a href="#contact" aria-label="go to contact"><button class="btn btn-primary">Kontak Kami</button></a>

          </div>

          <div class="hero-banner"></div>

        </div>

        <img src="./assets/images/bg.png" alt="shape" class="shape-content">
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <div class="about-top">

            <h2 class="h2 section-title">Layanan Kami</h2>

            <p class="section-text">
              Kami selalu memberikan layanan yang terbaik, mengerjakan projek tepat waktu dan professional
            </p>

            <ul class="about-list">
              <li>
                <div class="about-card">
                  <div class="card-icon">
                    <ion-icon name="camera-outline"></ion-icon>
                  </div>
                  <h3 class="h3 card-title">Paket Jasa Multimedia</h3>
                  <p class="card-text">
                    Kami melayani jasa fotografi, wedding, event, pembuatan poster, selebaran, pamflet, dan logo
                  </p>
                </div>
              </li>
              <li>
                <div class="about-card">
                  <div class="card-icon">
                    <ion-icon name="code-outline"></ion-icon>
                  </div>
                  <h3 class="h3 card-title">Jasa Pembuatan Website</h3>
                  <p class="card-text">
                    Kami melayani pembuatan Website untuk organisasi, Toko, dan lain lain untuk kebutuhan bisnis anda atau untuk sekedar menyebarkan informasi organasi atau perusahaan 
                  </p>
                </div>
              </li>
              <li>
                <div class="about-card">
                  <div class="card-icon">
                    <ion-icon name="videocam-outline"></ion-icon>
                  </div>
                  <h3 class="h3 card-title">Produksi Film</h3>
                  <p class="card-text">
                    Layanan ini berisi konten karya anak SMAN 1 NGUNUT yang telah memproduksi karya Film dari berbagai perlombaan seprlerti SMA AWRD, RATU FILM FESTIVAL DLL
                  </p>
                </div>
              </li>
              <li>
                <div class="about-card">
                  <div class="card-icon">
                    <ion-icon name="mic-outline"></ion-icon>
                  </div>
                  <h3 class="h3 card-title">Podcast</h3>
                  <p class="card-text">
                    Podcast SMANUSA yang diberi nama SMAPOET berisi siaran yang membahas suatu kegiatan atau fenomena yang terjadi di SMA Negeri 1 Ngunut melalui wawancara dengan beberapa narasumber
                  </p>
                </div>
              </li>
              <li>
                <div class="about-card">

                  <div class="card-icon">
                    <ion-icon name="people-circle-outline"></ion-icon>
                  </div>

                  <h3 class="h3 card-title">P5 Smanusa</h3>

                  <p class="card-text">
                    Berisi kumpulan hasil karya projek P5 oleh siswa-siswi SMA Negeri 1 Ngunut, seperti film pendek, poster, dll
                  </p>

                </div>
              </li>
              <li>
                <div class="about-card">
                  <div class="card-icon">
                    <ion-icon name="headset-outline"></ion-icon>
                  </div>
                  <h3 class="h3 card-title">Liputan</h3>
                  <p class="card-text">
                    Liputan berisi laporan yang berisi berita dan dokumentasi seluruh kegiatan yang terselenggara pada SMA Negeri 1 Ngunut
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <div class="about-bottom">
            <figure class="about-bottom-banner">
              <img src="./assets/images/about-banner.png" alt="about banner" class="about-banner">
            </figure>
            <div class="about-bottom-content">
              <h2 class="h2 section-title">Kami terobsesi dengan pertumbuhan</h2>
              <p class="section-text">
                Kami berkomitmen untuk selalu bekerja keras dan melakukan yang terbaik untuk setiap pekerjaan yang kami laksanakan
              </p>
              <a href="https://wa.me/+6282333084382" aria-label="chat in whatsapp"><button class="btn btn-secondary">Chat Via Whatsapp</button></a> 
            </div>
          </div>
        </div>
      </section>





      <!-- 
        - #ACHIEVMENT
      -->

      <section class="features" id="features">
        <div class="container">

          <h2 class="h2 section-title">Prestasi Siswa</h2>

          <p class="section-text">
            Setiap pencapaian selalu di bayar dengan harga yang sepadan, selamat kepada para peraih prestasi
          </p>

          <ul class="features-list">


            <?php foreach ($achiv as $a) : ?>
              <li class="features-item">
                <figure class="features-item-banner">
                  <img src="assets/images/<?= $a['gambar']; ?>" alt="student awards">
                </figure>
                <div class="feature-item-content">
                  <h3 class="h2 item-title"><?= $a['judul']; ?></h3>
                  <p class="item-text">
                    <?= $a['keterangan']; ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="cta">
        <div class="container">

          <div class="cta-card">
            <h3 class="cta-title">Sponsor</h3>
            <p class="cta-text">
              Terimakasih Kepada Para Sponsor Web SmanusArt
            </p>
            <div class="image-wrapper">
            <img src="./assets/images/sponsor-1.jpeg" width="150" height="100" alt="muamar travel" class="img-cover">
            <img src="./assets/images/sponsor-2.png" width="150" height="100" alt="vf" class="img-cover">
            </div>
          </div>
        </div>
      </section>

      <!-- 
        - #PROJECT
      -->

      <section class="section project" id="project" aria-label="project">
        <div class="container">

          <h2 class="h2 section-title">Galeri</h2>

          <p class="section-text">
            Setiap pengalaman adalah memori tak terlupakan
          </p>

          <ul class="grid-list">

            <?php foreach ($posts as $p) : ?>
              <li>
                <div class="project-card">
                  <figure class="card-banner img-holder" style="--width: 510; --height: 700;">
                    <img src="./assets/images/<?= $p['image'] ?>" width="510" height="700" loading="lazy" alt="Designing a better cinema experience" class="img-cover">
                  </figure>
                  <div class="card-content">
                    <p class="card-subtitle"><?= $p['title'] ?></p>
                    <h3 class="h3">
                      <a href="#" class="card-title"><?= $p['caption'] ?></a>
                    </h3>
                    <a href="<?= $p['link'] ?>" class="btn btn-primary">Lihat Detail</a>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
     <!-- 
        - Pagination
      -->
      <div class="pagination">
      <?php if ($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1; ?>#project">&laquo;</a>
      <?php endif; ?>
      <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
          <a href="?page=<?= $i; ?>#project" class="pageAct"> <?= $i ?></a>
        <?php else : ?>
          <a href="?page=<?= $i; ?>#project"> <?= $i ?></a>
        <?php endif; ?>
      <?php endfor; ?>
      <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1; ?>#project">&raquo;</a>
      <?php endif; ?>
          
    </div>
        </div>
      </section>



      <!-- 
        - #CONTACT
      -->

      <section class="contact" id="contact">
        <div class="container">

          <div class="contact-content">
            <h2 class="h2 contact-title">Hubungi Kami, dan mari berkolaborasi</h2>
            <figure class="contact-banner">
              <img src="./assets/images/contact.png" alt="contact banner">
            </figure>
          </div>
          <form id="myForm" action="https://formsubmit.co/affandirrh@gmail.com" method="post" class="contact-form">
            <div class="input-wrapper">
              <label for="name" class="input-label">Nama *</label>
              <input type="text" name="name" id="name" required placeholder="Ketik Nama" class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="phone" class="input-label">Nomor Ponsel *</label>
              <input type="tel" name="phone" id="phone" placeholder="Ketik Nomor Ponsel" class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="email" class="input-label">Alamat Email *</label>
              <input type="email" name="email" id="email" required placeholder="Ketikkan Email" class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="message" class="input-label">Bagaimana Kami Bisa Membantu ? *</label>
              <textarea name="message" id="message" placeholder="Tulis Pesan" required class="input-field"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_next" value="http://localhost/smanusart/thanks.html">
          </form>

        </div>
      </section>

    </article>

  </main>





  <!-- 
    - #FOOTER
  -->

  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" alt="Funel logo">
          </a>

          <p class="footer-text">Ikuti Sosial Media Kami</p>

          <ul class="social-list">

            <li>
              <a href="https://www.tiktok.com/@smanusart" aria-label="go to smanusart tiktok" class="social-link">
              <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/smanus.art" aria-label="go to smanusart instagram" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@SmanusaArt_TV" aria-label="go to smanusart youtube" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Perancang Website</h3>
            </li>
            <li>
              <a href="https://www.instagram.com/van.afann_" aria-label="go to afann instagram" class="footer-link">Afann</a>
            </li>

            <li>
              <a href="https://www.instagram.com/tnxyqio" aria-label="go to sutans instagram" class="footer-link">Sutans</a>
            </li>

            <li>
              <a href="https://www.instagram.com/paisscuii" aria-label="go to pais instagram" class="footer-link">Pais</a>
            </li>

            <li>
              <a href="https://www.instagram.com/zaiinulazkiya" aria-label="go to zainul instagram" class="footer-link">Zainul</a>
            </li>

            <li>
              <a href="https://www.instagram.com/claudyazefanyaa" aria-label="go to zefanya instagram" class="footer-link">Zefanya</a>
            </li>


          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Produk</h3>
            </li>

            <li>
              <a href="https://open.spotify.com/user/31ncdqsjjeckr7hlwlc5vfuj76fq?si=e8a896ed97224b36"  aria-label="Go to Smapoed Podcast Spotify" class="footer-link">Podcast</a>
            </li>

            <li>
              <a href="https://www.instagram.com/p5smanusa_official/" aria-label="Visit p5 Smanusa Instagram" class="footer-link">P5 Smanusa</a>
            </li>

          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Sponsor</h3>
            </li>

            <li>
              <a href="#" class="footer-link">Muamar Travel</a>
            </li>

            <li>
              <a href="https://www.instagram.com/wirayuda_putri" aria-label="visit instagram profile asti riani" class="footer-link">Asti Riani</a>
            </li>

            <li>
              <a href="https://rzkyaffan.github.io/afan/" aria-label="Go To Website Founder VF Technology" class="footer-link">VF Technology</a>
            </li>
          </ul>

          <ul class="footer-link-list">

            <li>
              <h3 class="h4 link-title">Kontak Kami</h3>
            </li>

            <li>
              <a href="mailto:smanusas.art@gmail.com" aria-label="Send A Email To SmanusArt" class="footer-link">smanusas.art@gmail.com</a>
            </li>

            <li>
              <a href="tel:+6282333084382" aria-label="Call SmanusArt" class="footer-link">+62 823 330 843 82</a>
            </li>

            <li>
              <a href="https://maps.app.goo.gl/cWauwUJqbJz8317dA" aria-label="Look SmanusArt In Maps" class="footer-link">Tulungagung, Indonesia</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; <?= date('Y') ?> <a href="#">smanusArt Crew</a> All right reserved
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top active" data-go-top>
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

</body>

</html>