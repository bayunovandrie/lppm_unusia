<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:25px; color: #3c3d3d;">Laporan Rekomisi Prestasi Dan Kinerja
                            Peneliti/Pengabdi</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Capaian > Rekomisi Prestasi Dan
                            Kinerja Peneliti/Pengabdi</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="row">
                <div class="col-md-6 mt-4 mb-4">
                    <h5 class="text-align">Visiting Lecturer</h5>
                    <canvas id="visiting-lecturer" width="400" height="200"></canvas>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <h5 class="text-align">Invited Speaker</h5>
                    <canvas id="invited-speaker" width="400" height="200"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4 mb-4">
                    <h5 class="text-align">Editor / Mitra-Bestari Jurnal</h5>
                    <canvas id="editor" width="400" height="200"></canvas>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <h5 class="text-align">Penghargaan atas Prestasi/Kinerja</h5>
                    <canvas id="penghargaan" width="400" height="200"></canvas>
                </div>
            </div>

            <div class="row center-content">
                <div class="col-md-8 mt-4 mb-4 ">
                    <h5 class="text-align">Staf Ahli atau Kedudukan Jabatan dengan Tugas Serupa</h5>
                    <canvas id="staf" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- visiting lecturer -->
<script>
var visit = document.getElementById('visiting-lecturer').getContext('2d');

var pt_tingkat_nasional = <?php echo json_encode(array_column($pt_tingkat_nasional, 'visit_jumlah')); ?>;

var pt_tingkat_internasionl = <?php echo json_encode(array_column($pt_tingkat_internasional, 'visit_jumlah')); ?>;

var proChart = new Chart(visit, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'PT Tingkat Nasional',
                data: pt_tingkat_nasional,
                backgroundColor: 'rgba(0, 128, 0, 0.5)', // Warna hijau dengan transparansi
                borderColor: 'rgba(0, 128, 0, 1)', // Warna hijau
                borderWidth: 1
            },
            {
                label: 'PT Tingkat Internasional',
                data: pt_tingkat_internasionl,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna biru dengan transparansi
                borderColor: 'rgba(54, 162, 235, 1)', // Warna biru
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

<!-- invited speaker -->
<script>
var invited = document.getElementById('invited-speaker').getContext('2d');

var forum_tingkat_nasional = <?php echo json_encode(array_column($forum_tingkat_nasional, 'invit_jumlah')); ?>;

var forum_tingkat_internasional =
    <?php echo json_encode(array_column($forum_tingkat_internasional, 'invit_jumlah')); ?>;

var proChart = new Chart(invited, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Forum Tingkat Nasional',
                data: forum_tingkat_nasional,
                backgroundColor: 'rgba(75, 192, 192, 0.5)', // Warna hijau kebiruan dengan transparansi
                borderColor: 'rgba(75, 192, 192, 1)', // Warna hijau kebiruan
                borderWidth: 1
            },
            {
                label: 'Forum Tingkat Internasional',
                data: forum_tingkat_internasional,
                backgroundColor: 'rgba(255, 159, 64, 0.5)', // Warna kuning oranye dengan transparansi
                borderColor: 'rgba(255, 159, 64, 1)', // Warna kuning oranye
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

<!-- editor -->
<script>
var edit = document.getElementById('editor').getContext('2d');

var jurnal_tingkat_nasional = <?php echo json_encode(array_column($jurnal_tingkat_nasional, 'jurnal_jumlah')); ?>;

var jurnal_tingkat_internasional =
    <?php echo json_encode(array_column($jurnal_tingkat_internasional, 'jurnal_jumlah')); ?>;

var proChart = new Chart(edit, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Jurnal Tingkat Nasional',
                data: jurnal_tingkat_nasional,
                backgroundColor: 'rgba(255, 205, 86, 0.5)', // Warna kuning dengan transparansi
                borderColor: 'rgba(255, 205, 86, 1)',
                borderWidth: 1
            },
            {
                label: 'Jurnal Tingkat Internasional',
                data: jurnal_tingkat_internasional,
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Warna merah muda dengan transparansi
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

<!-- penghargaan -->
<script>
var penghargaan = document.getElementById('penghargaan').getContext('2d');

var peng_nasional = <?php echo json_encode(array_column($peng_nasional, 'penghargaan_jumlah')); ?>;

var peng_internasional = <?php echo json_encode(array_column($peng_internasional, 'penghargaan_jumlah')); ?>;

var proChart = new Chart(penghargaan, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Tingkat Nasional',
                data: peng_nasional,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna hijau dengan transparansi
                borderColor: 'rgba(54, 162, 235, 1)', // Warna hijau
                borderWidth: 1
            },
            {
                label: 'Tingkat Internasional',
                data: peng_internasional,
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Warna oranye dengan transparansi
                borderColor: 'rgba(255, 99, 132, 1)', // Warna oranye
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

<!-- staf ahli -->
<script>
var staf = document.getElementById('staf').getContext('2d');

var lembaga_nasional = <?php echo json_encode(array_column($lembaga_nasional, 'staf_jumlah')); ?>;

var lembaga_internasional = <?php echo json_encode(array_column($lembaga_internasional, 'staf_jumlah')); ?>;

var proChart = new Chart(staf, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
        datasets: [{
                label: 'Lembaga Tingkat Nasional',
                data: lembaga_nasional,
                backgroundColor: 'rgba(0, 128, 0, 0.5)', // Warna hijau dengan transparansi
                borderColor: 'rgba(0, 128, 0, 1)', // Warna hijau
                borderWidth: 1
            },
            {
                label: 'Lembaga Tingkat Internasional',
                data: lembaga_internasional,
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