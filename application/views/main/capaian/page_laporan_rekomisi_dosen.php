<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Sitasi Karya Ilimiah </p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Laporan Sitasi Karya
                            Ilimiah</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h3 class="text-align">Karya Ilmiah</h3>
                    <canvas id="karya-ilmiah" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- karya ilimiah -->
<script>
var media = document.getElementById('karya-ilmiah').getContext('2d');

var karya_ilmiah = <?php echo json_encode(array_column($karya_ilmiah, 'karya_ilmiah_jumlah')); ?>;

var proChart = new Chart(media, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
            label: 'Karya Ilmiah',
            data: karya_ilmiah,
            backgroundColor: 'rgba(255, 99, 132, 0.5)', // Warna merah muda dengan transparansi
            borderColor: 'rgba(255, 99, 132, 1)',
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