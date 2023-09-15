<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Hak Kekayaan Intelektual</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Laporan Hak Kekayaan
                            Intelektual</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h3 class="text-align">HKI</h3>
                    <canvas id="hki" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- hki -->
<script>
var hak = document.getElementById('hki').getContext('2d');

var hak_ciptaan = <?php echo json_encode(array_column($ciptaan, 'hki_jumlah')); ?>;

var hak_paten = <?php echo json_encode(array_column($paten, 'hki_jumlah')); ?>;


var proChart = new Chart(hak, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Hak Ciptaan',
                data: hak_ciptaan,
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Warna merah muda dengan transparansi
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Hak Paten',
                data: hak_paten,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna biru dengan transparansi
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }
        ]



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