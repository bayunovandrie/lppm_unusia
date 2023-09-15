<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Teknologi Tepat Guna, Produk, Karya Seni dan
                            dan Rekayasa Sosial</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Teknologi Tepat Guna,
                            Produk, Karya Seni dan dan Rekayasa Sosial</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h5 class="text-align">Teknologi Tepat Guna, Produk, Karya Seni dan dan Rekayasa Sosial</h5>
                    <canvas id="teknologi" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- teknologi -->
<script>
var tech = document.getElementById('teknologi').getContext('2d');

var teknologi = <?php echo json_encode(array_column($teknologi, 'teknologi_jumlah')); ?>;

var proChart = new Chart(tech, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
            label: 'Teknologi Tepat Guna, Produk, Karya Seni dan dan Rekayasa Sosial',
            data: teknologi,
            backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna merah muda dengan transparansi
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]


    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>