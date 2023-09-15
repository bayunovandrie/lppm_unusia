<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Prosiding dan Media Massa </p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Laporan Prosiding dan
                            Media Massa</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-6 mt-4 mb-4">
                    <h3 class="text-align">Publikasi Prosiding</h3>
                    <canvas id="pro" width="400" height="200"></canvas>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <h3 class="text-align">Publikasi Media Massa</h3>
                    <canvas id="media-massa" width="400" height="200"></canvas>
                </div>
            </div>

        </div>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- prosiding -->
<script>
var prj = document.getElementById('pro').getContext('2d');
var seminar_wilayah = <?php echo json_encode(array_column($seminar_wilayah, 'prosiding_jumlah')); ?>;

var seminar_nasional = <?php echo json_encode(array_column($seminar_nasional, 'prosiding_jumlah')); ?>;

var seminar_internasional = <?php echo json_encode(array_column($seminar_internasional, 'prosiding_jumlah')); ?>;
var proChart = new Chart(prj, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Seminar Tingkat Wilayah/lokal/PT',
                data: seminar_wilayah,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Seminar Tingkat Nasional',
                data: seminar_nasional,
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Seminar Tingkat Internasional',
                data: seminar_internasional,
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

<!-- media massa -->
<script>
var media = document.getElementById('media-massa').getContext('2d');
var media_nasional = <?php echo json_encode(array_column($media_nasional, 'media_jumlah')); ?>;

var media_internasional = <?php echo json_encode(array_column($media_internasional, 'media_jumlah')); ?>;

var proChart = new Chart(media, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Media Massa Nasional',
                data: media_nasional,
                backgroundColor: 'rgba(0, 128, 0, 0.5)', // Warna hijau dengan transparansi
                borderColor: 'rgba(0, 128, 0, 1)', // Warna hijau
                borderWidth: 1
            },
            {
                label: 'Media Massa Internasional',
                data: media_internasional,
                backgroundColor: 'rgba(255, 165, 0, 0.5)', // Warna oranye dengan transparansi
                borderColor: 'rgba(255, 165, 0, 1)', // Warna oranye
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