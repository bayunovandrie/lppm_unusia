<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Publikasi Buku/Book Chapter </p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Laporan Publikasi
                            Buku/Book Chapter</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h5 class="text-align">Publikasi Buku/Book Chapter</h5>
                    <canvas id="book-chapter" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- book chapter -->
<script>
const ctx = document.getElementById('book-chapter').getContext('2d');
var nasional = <?php echo json_encode(array_column($tingkat_nasional, 'publikasi_buku_jumlah')); ?>;

var internasional = <?php echo json_encode(array_column($tingkat_internasional, 'publikasi_buku_jumlah')); ?>;
const groupedBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Tingkat Nasional',
                data: nasional,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Tingkat Internasional',
                data: internasional,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
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