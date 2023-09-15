<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Publikasi Jurnal </p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Laporan Publikasi Jurnal
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h5 class="text-align">Publikasi Jurnal</h5>
                    <canvas id="publikasi-jurnal" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- publikasi Jurnal -->
<script>
const qwe = document.getElementById('publikasi-jurnal').getContext('2d');
var jurnal_nasional_tidak_terakreditasi =
    <?php echo json_encode(array_column($jurnal_nasional_tak_terakreditasi, 'publikasi_jumlah')); ?>;

var jurnal_nasional_terakreditasi =
    <?php echo json_encode(array_column($jurnal_nasional_terakreditasi, 'publikasi_jumlah')); ?>;

var jurnal_nasional = <?php echo json_encode(array_column($jurnal_nasional, 'publikasi_jumlah')); ?>;

var jurnal_nasional_bereputasi =
    <?php echo json_encode(array_column($jurnal_nasional_bereputasi, 'publikasi_jumlah')); ?>;
const groupedBarChart2 = new Chart(qwe, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Jurnal Nasional Tidak Terakreditasi',
                data: jurnal_nasional_tidak_terakreditasi,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Jurnal Nasional Terakreditasi',
                data: jurnal_nasional_terakreditasi,
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Jurnal Nasional',
                data: jurnal_nasional,
                backgroundColor: 'rgba(0, 128, 0, 0.5)', // Warna hijau dengan transparansi
                borderColor: 'rgba(0, 128, 0, 1)',
                borderWidth: 1
            },
            {
                label: 'Jurnal Nasional Bereputasi',
                data: jurnal_nasional_bereputasi,
                backgroundColor: 'rgba(255, 205, 86, 0.5)',
                borderColor: 'rgba(255, 205, 86, 1)',
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