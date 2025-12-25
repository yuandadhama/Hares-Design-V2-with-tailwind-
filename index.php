<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="google-site-verification" content="2XaFqBPdcxYXlq4mruBsIXmOqrevwQY-GGAV6owXviU" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Web ini berisi kumpulan-kumpulan karya dari Hares Design. Seni yang terbuat dari beberapa coretan yang memadukan seni lukis dan seni grafis.">
  <link rel="shortcut icon" href="image/favicon.webp" type="image/x-icon">
  <title>Hares Design</title>
  <link rel="stylesheet" href="gaya.css">
  <!-- edit mode -->
  <!-- <link rel="stylesheet" href="new.css"> -->

  <!-- finish mode -->
  <link rel="stylesheet" href="finish.css">
</head>

<body class="bg-blue-800 overflow-x-hidden w-screen">
  <!-- NAVIGATION -->
  <div id="black-filter" class="layout-section h-screen bg-black z-20 fixed opacity-60 none"></div>
  <nav
    class="flex justify-between items-center fixed text-center font-serif capitalize z-30 transition-[.3s] py-[15px] sm:py-[20px] w-screen">
    <img src="image/logo.webp" alt="logo" id="logo"
      class="ml-[5vw] h-[40px] w-[calc(40px_*_3)] scale-90 xs:scale-100 sm:scale-110 lg:scale-[1.30]"
      title="Hares Design">
    <div
      class="absolute top-0 right-0 translate-x-full transition-[.7s] w-screen opacity-0 h-screen bg-third sm:responsive-div"
      id="contain-list">
      <ul class="flex flex-col justify-center divide-y-2 divide-primary mt-12 sm:ul-responsive">
        <li class="list-navigation"><a href="#beranda" class="list-link" id="link">Beranda</a></li>
        <li class="list-navigation"><a href="#tentang" class="list-link" id="link">Tentang</a></li>
        <li class="list-navigation"><a href="#karya" class="list-link" id="link">Karya</a></li>
        <li class="list-navigation"><a href="#kontak" class="list-link" id="link">Kontak</a></li>
        <li class="list-navigation"></li>
      </ul>
    </div>
    <div id="button"
      class="not-active w-[30px] h-[30px] cursor-pointer mr-[5vw] sm:hidden z-30 scale-[.80] xs:scale-100">
      <div class="hamburger"></div>
      <div class="hamburger"></div>
      <div class="hamburger"></div>
    </div>
  </nav>
  <!-- NAVIGATION N -->

  <!-- SECTION SATU -->
  <section id="beranda" class="w-screen overflow-x-clip max-h-[653px] h-screen bg-right bg-cover bg-[url('image/sect1.webp')] relative xs:max-h-[700px] ag:max-h-[900px] md:max-h-[600px]
    lg:max-h-[800px]">
    <div class="section-satu transition-all duration-300 h-full w-full">
      <h1
        class="text-2xl font-mono text-white text-center salam font-semibold tracking-wider xs:text-4xl sm:text-5xl lg:text-6xl">
        SELAMAT DATANG <br> DI <span class="text-primary">WEB KAMI</span>
      </h1>
    </div>
    <div id="contain"
      class="w-[100px] absolute left-0 bottom-0 m-[0_0_10px_10px] mb-1 ml-1  sm:scale-125 sm:ml-5 sm:mb-4 lg:scale-150 lg:ml-9 lg:mb-[30px] xl:scale-[1.80] xl:ml-12 xl:mb-[47px] opacity-[0.85]">
      <div class="w-[35px] h-[35px] bg-primary rounded-full mb-[10px] after:circle-after"></div>
      <div class="w-[35px] h-[30px] bg-secondary box after:box-after">
      </div>
    </div>
  </section>
  <!-- SECTION SATU N-->

  <!-- SECTION DUA-->
  <section
    class="bg-[url('image/sect2.webp')] bg-left-bottom bg-cover layout-section flex items-center justify-center font-sans text-[#505050] py-20 md:py-24 xl:py-28"
    id="tentang">
    <div>
      <h1 class="text-third judul-section md:text-center">TENTANG</h1>
      <div class="md:flex mt-8">
        <div class="self-center relative">
          <img src="image/icon.webp" alt="Logo Hares Design" class="w-full h-auto drop-shadow-lg"
            title="Logo Hares Design">
          <div class="caption text-slate-800 font-semibold">Logo Hares Design</div>
        </div>
        <div>
          <h1 class="judul-section mt-12 text-2xl xs:text-4xl lg:text-5xl">Hares Design</h1>
          <p class="text-slate-800 p-section"><strong class="text-third">Hares
              Design</strong> merupakan sebuah layanan yang bergerak di bidang seni dan digital. Lebih tepatnya,
            Hares
            Design</strong> bergerak pada bidang desain grafis. Nama Hares diambil dari singkatan nama founders Hares
            Design</strong> itu sendiri, yaitu Hanif Agung Respati.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION DUA N-->

  <!-- MAIN -->
  <main class="main h-auto bg-blue-800 font-sans text-white overflow-x-hidden relative layout-section" id="karya">
    <div
      class="z-10 w-screen h-screen bg-blue-800 fixed -top-[200vh] left-0 transition-all duration-500 ease-in-out overflow-y-auto sm:overflow-hidden p-6"
      id="desc">
      <div
        class="cursor-pointer w-[30px] h-[30px] absolute top-[5vh] right-[10vw] text-2xl transition-all duration-300 ease-in-out hover:text-fourth md:text-3xl lg:text-4xl text-center"
        id="close">X</div>
      <div class="flex flex-col justify-center items-center w-full text-left py-10 p-5 sm:h-full mt-4"
        id="contain-desc">
        <div class="sm:desc-pc">
          <div class="w-full mb-3 sm:hidden">
            <div class="text-left">
              <h2 class="judul-desc">Tuhan Yesus</h2>
              <p class="sub-judul-desc">Digital Art</p>
            </div>
          </div>
          <img src="/image/karya/gusti.webp" alt="Tuhan Yesus" title="Tuhan Yesus" width="1px" height="1px"
            class="w-full h-auto shadow-black shadow-md max-w-[300px] sm:w-1/2 sm:max-w-md" id="image-desc">
          <div class="w-full sm:w-1/2 sm:ml-4">
            <div class="hidden sm:block md:mb-5 lg:mb-9">
              <h2 class="judul-desc">Tuhan Yesus</h2>
              <p class="sub-judul-desc">Digital Art</p>
            </div>
            <p class="text-left mt-4 max-w-[300px] text-[4vw] xs:text-base sm:max-w-none md:text-lg xl:text-2xl"
              id="description">Karya yang berjudul “Tuhan Yesus“ ini tercipta pada hari juma'at Agung (memperingati
              wafat Tuhan Yesus) pada tahun 2021. Tuhan Yesus wafat di atas kayu salib untuk menggantikan anda dan
              saya yang seharusnya disalib menanggung hukuman dosa.</p>
          </div>
        </div>
      </div>
    </div>
    <h1 class="judul-section text-primary text-center mt-4 lg:mt-0">KARYA</h1>
    <div class="w-full flex justify-center mb-10">
      <div class="tracking-wider">
        <p class="p-section">Di bawah ini kumpulan karya dari <strong>HARES
            Design</strong>. Klik pada gambar
          untuk melihat karya lebih detail!</p>
      </div>
    </div>
    <div
      class="w-full grid grid-cols-1 grid-flow-row sm:grid-cols-2 justify-center col-end-2 lg:grid-cols-3 mx-auto gap-6 sm:gap-8 lg:gap-10"
      id="container-karya">
      <figure class="figure">
        <div class="bungkus">
          <div class="wrapper group">
            <img src="image/karya/bujana.webp" alt="Bujana Suci" title="Bujana Suci" class="image-art aspect-[13/9]"
              data-desc="Bujana Suci merupakan Perjamuan Kudus. Karya ini menggambarkan Tuhan Yesus yang sedang melakukan Perjamuan Kudus bersama murid-Nya atau biasa dikenal Perjamuan Terakhir. Perjamuan Terakhir sendiri merupakan Perjamuan yang dilakukan Tuhan Yesus sebelum Ia wafat atau peristiwa itu saat ini dikenal dengan Kamis Putih.">
          </div>
        </div>
        <h2 class="caption">Bujana Suci</h2>
      </figure>
    </div>
  </main>
  <!-- MAIN N -->

  <!-- Kontak -->
  <section class="w-full pt-16 layout-section" id="kontak">
    <div>
      <h1 class="judul-section text-center text-white">KONTAK</h1>
    </div>
    <div class="flex mt-8 text-white flex-col ag:mt-12 md:flex-row">
      <div class="md:flex-1 md:pr-4 md:mt-8">
        <h2 class="text-2xl font-semibold text-primary sm:text-3xl md:text-4xl lg:text-5xl">Hubungi Kami!</h2>
        <p class="mt-4 p-section md:mt-6">Hubungi kami, silahkan kirim: pesan, kritik, saran, dan pertanyaan kepada
          kami.
          kritik
          dan saran anda sangat membangun bagi kami.</p>
        <div class="mt-4 md:mt-6 md:flex gap-3">
          <a href="https://www.instagram.com/hanif_hgr47?r=nametag" target="blank" class="footer-wrap"
            title="Instagram">
            <i class="footer-logo">
              <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="white"
                class="hover:opacity-80">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </i>
          </a>
          <a href="https://m.facebook.com/hanif.hgr" target="blank" class="footer-wrap" title="Facebook">
            <i class="footer-logo">
              <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="white"
                class="hover:opacity-80">
                <title>Facebook</title>
                <path
                  d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
              </svg>
            </i>
          </a>
          <a href="https://vt.tiktok.com/ZGJ5N388A" target="_blank" class="footer-wrap" title="Tiktok">
            <i class="footer-logo">
              <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="white"
                class="hover:opacity-80">
                <title>TikTok</title>
                <path
                  d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
              </svg>
            </i>
          </a>
        </div>
      </div>
      <form action="" method="post" class="mt-8 flex flex-col gap-3 text-black md:flex-1">
        <input type="text" name="nama" id="" class="input-kontak" placeholder="Nama" required>
        <input type="email" name="email" id="" class="input-kontak" placeholder="Email" required>
        <textarea type="text" name="pesan" id="" class="input-kontak h-[150px] relative resize-none" name="pesan"
          placeholder="Pesan" required></textarea>
        <button type="submit"
          class="border border-white text-white py-3 px-4 text-center mt-4 w-[80px] tracking-wider text-xs hover:bg-white hover:text-third transition-all duration-300 xs:w-[120px] xs:p-2 xs:text-base"
          name="submit">KIRIM</button>
      </form>
      <?php

      // koneksi testing 
      $koneksi = mysqli_connect("localhost", "root", "1234", "haresdesign");

      // koneksi untuk hosting
      // $koneksi = mysqli_connect("sql204.infinityfree.com", "if0_38004492", "otvEZJMs8IODrXE", "if0_38004492_pesan_db");
      
      if (isset($_POST['submit'])) {
        mysqli_query($koneksi, "INSERT INTO tabel_pesan set									
              Nama = '$_POST[nama]',							
              Email = '$_POST[email]',								
              Pesan = '$_POST[pesan]'
              ");
      }
      ?>

    </div>
  </section>
  <!-- Kontak N -->

  <!-- FOOTER -->
  <footer id="footer"
    class="w-full h-[150px] bg-[#0a2358] mt-12 flex justify-center relative flex-col font-sans items-center">
    <div class="flex gap-4 mb-5 justify-between">
      <a target="_blank" href="https://www.instagram.com/definitely_damy?igshid=ZDdkNTZiNTM="
        class="w-[80px] flex items-center hover:opacity-60 transition-all duration-300">
        <img src="image/me.webp" alt="Coder" class="w-full h-auto">
      </a>
      <div class="font-sans text-6xl text-center font-[1] text-gray-500">X</div>
      <a target="_parent" href="https://haresdesign.rf.gd"
        class="w-[110px] flex items-center hover:opacity-60 transition-all duration-300">
        <img src="image/hares.webp" alt="Hares" class="w-full h-auto">
      </a>
    </div>
    <div class="bottom-0 mb-5 absolute">
      <div class="text-white">Hares Design ©2023</div>
    </div>
  </footer>
  <!-- FOOTER N -->

  <script src="script.js"></script>
</body>

</html>