   <main>
       <section id="gambar-container">
           <div class="container">
               <div class="card-gambar" id="myCard">

                   <div class="card-body">
                       <h5 class="card-title">Selamat Datang Di LPPM UNUSIA</h5>
                       <p class="card-text">Bersama Kami Menuju Masa Depan Yang Bermanfaat Bagi Bangsa....</p>
                       <div class="row">
                           <div class="col-md-6 mt-4">
                               <button class="btn btn-success">Learn More</button>
                           </div>
                           <div class="col-md-6 img-gambar">
                               <img src="http://localhost/CI3/assets/images/logo-title-lppm.png" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="container">
               <div class="card-kedua" id="myCard2" style="display: none;">

                   <div class="card-body">
                       <h5 class="card-title">Jurnal & Riset</h5>
                       <p class="card-text">Berikut Adalah Jurnal Dan Riset Yang Dilakukan Oleh Lembaga Penelitian Dan
                           Pengabdian Masyarakat Universitas Nahdlatul Ulama Indonesia</p>
                       <div class="row">
                           <div class="col-md-6 mt-4">
                               <button class="btn btn-success">Learn More</button>
                           </div>
                           <div class="col-md-6">
                               <img src="http://localhost/CI3/assets/images/logo-title-lppm.png" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </section>


       <!-- 
            <section id="home" class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12 text-center mx-auto">
                            <img id="homeImage" src="default-image.jpg" alt="Home Image">
                        </div>
                    </div>
                </div>
            </section> -->


       <section class="intro-section" id="intro-section">
           <div class="container">
               <div class="row ">

                   <div class="col-md-1">
                       <img src="assets/images/misi-1.png">

                   </div>
                   <div class="col-md-3">
                       <p style="color: black;">Misi 1</p>

                       <p>Membangun kapasitas kelembagaan (institutional building) termasuk payung kajian, penelitian
                           dan pengabdian kepada masyarakat berbasis Ilmu Pengetahuan, Teknologi dan Kearifan sesuai
                           perkembangan Iptek dan dan tantangan jaman</p>
                   </div>
                   <div class="col-md-1">
                       <img src="assets/images/misi-2.png">
                   </div>
                   <div class="col-md-3">
                       <p style="color: black;">Misi 2</p>

                       <p>Melakukan penelitian dan pengabdian kepada masyarakat dengan kualitas dan kuantitas yang terus
                           meningkat dan serta mempublikasikan hasil-hasil penelitian di tingkat nasional dan
                           internasional.</p>
                   </div>
                   <div class="col-md-1">
                       <img src="assets/images/misi-3.png">
                   </div>
                   <div class="col-md-3">
                       <p style="color: black;">Misi 2</p>

                       <p>Menghasilkan produk dan jasa penelitian yang inovatif berbasis Ilmu Pengetahuan, Teknologi,
                           dan Kearifan Sosial yang bermanfaat optimal untuk kepentingan masyarakat, dunia usaha dan
                           industri.</p>
                   </div>

               </div>
           </div>
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
               <path fill="#f0f8ff" fill-opacity="1"
                   d="M0,192L80,160C160,128,320,64,480,80C640,96,800,192,960,229.3C1120,267,1280,245,1360,234.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
               </path>
           </svg>
       </section>


       <section class="services-section section-padding section-bg" id="services-section">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <h4 style="margin-left: -100px ;">LPPM UNUSIA</h4>
                   </div>

                   <div class="col-md-6" align="right" style="padding-right: 70px ;">
                       <p>Artikel-Berita</p>
                   </div>
                   <div class="row">
                       <?php foreach ($artikel_berita->result_array() as $value) {?>


                       <div class="col-md-4">
                           <div class="card rounded-card" style="width: 18rem;">
                               <img src="http://localhost/CI3_admin/assets2/images/article/<?= $value['article_img'] ?>"
                                   class="card-img-top" alt="...">
                               <div class="card-body">
                                   <a href="<?= BASEURL ?>Article/baca?id=<?= $value['article_id'] ?>"
                                       style="color:black;">
                                       <p class="card-title" style="font-weight: bold;"><?= $value['article_judul'] ?>
                                       </p>

                                   </a>
                               </div>
                           </div>
                       </div>
                       <?php } ?>
                   </div>
                   <div class="row mt-3" style="text-align:right; margin-right: 50px;">
                       <?php if ($artikel_berita_jumlah >= 3 )  {?>
                       <div class="col">
                           <a href="<?= BASEURL ?>Article?type=1" class="btn btn-primary">Go to Page</a>
                       </div>
                       <?php } ?>
                   </div>
               </div>

               <div class="row mt-5">
                   <div class="col-md-6">
                       <h4 style="margin-left: -100px ;">LPPM UNUSIA</h4>
                   </div>

                   <div class="col-md-6" align="right" style="padding-right: 70px ;">
                       <p>Artikel-Opini</p>
                   </div>
                   <div class="row mt-4">
                       <?php foreach ($artikel_opini->result_array() as $value) {?>
                       <div class="col-md-4">
                           <div class="card rounded-card" style="width: 18rem;">
                               <img src="http://localhost/CI3_admin/assets2/images/article/<?= $value['article_img'] ?>"
                                   class="card-img-top">
                               <div class="card-body">
                                   <a href="<?= BASEURL ?>Article/baca?id=<?= $value['article_id'] ?>"
                                       style="color: black;">
                                       <p class="card-title" style="font-weight: bold;"><?= $value['article_judul'] ?>
                                       </p>

                                   </a>
                               </div>
                           </div>
                       </div>
                       <?php } ?>

                   </div>
                   <div class="row mt-3" style="text-align:right; margin-right: 50px;">
                       <?php if ($artikel_opini_jumlah >= 3 )  {?>
                       <div class="col">
                           <a href="<?= BASEURL ?>Article" class="btn btn-primary">Go to Page</a>
                       </div>
                       <?php } ?>
                   </div>
               </div>

           </div>
       </section>

       <section class="" id="services-section">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
               <path fill="#f0f8ff" fill-opacity="1"
                   d="M0,192L40,165.3C80,139,160,85,240,74.7C320,64,400,96,480,117.3C560,139,640,149,720,165.3C800,181,880,203,960,186.7C1040,171,1120,117,1200,85.3C1280,53,1360,43,1400,37.3L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
               </path>
           </svg>
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <h5>LPPM TV</h5>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-4 mb-5">
                       <iframe width="640" height="360" src="https://www.youtube.com/embed/tvqmJu4umuc" frameborder="0">
                       </iframe>
                   </div>
               </div>
           </div>
       </section>



   </main>


   <script>
const gambarContainer = document.getElementById('gambar-container');
const gantiGambarButton = document.getElementById('ganti-gambar');
const daftarGambar = [
    'http://localhost/CI3/assets/images/pengabdian/pengabdian-3.jpg',
    'http://localhost/CI3/assets/images/pengabdian/pengabdian-4.jpg',
    'http://localhost/CI3/assets/images/pengabdian/pengabdian-5.jpg'
]; // Ganti dengan nama gambar yang sesuai

let indeksGambar = 0;

function gantiGambarOtomatis() {
    gambarContainer.style.backgroundImage = `url('${daftarGambar[indeksGambar]}')`;
    indeksGambar = (indeksGambar + 1) % daftarGambar.length;
}

function gantiGambarManual() {
    gantiGambarOtomatis();
}

// Ganti gambar otomatis setiap 3 detik
setInterval(gantiGambarOtomatis, 3000);

// Tambahkan event listener untuk tombol
gantiGambarButton.addEventListener('click', gantiGambarManual);
   </script>

   <script>
function toggleCard(cardId) {
    var card = document.getElementById(cardId);
    if (card.style.display === 'none') {
        card.style.display = 'block';
    } else {
        card.style.display = 'none';
    }
}

function handleCardBehavior() {
    setInterval(function() {
        toggleCard('myCard');
        toggleCard('myCard2');
    }, 6000); // Tampilkan atau sembunyikan setiap 7 detik

    setInterval(function() {
        toggleCard('myCard2');
        toggleCard('myCard');
    }, 12000); // Tampilkan atau sembunyikan setiap 14 detik
}

window.onload = handleCardBehavior;
   </script>