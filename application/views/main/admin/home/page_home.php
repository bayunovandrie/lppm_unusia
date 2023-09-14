
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">Publikasi Buku/Book Chapter</h3>
                        <canvas id="book-chapter" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">Publikasi Media Massa</h3>
                        <canvas id="media-massa" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">HKI</h3>
                        <canvas id="hki" width="400" height="200"></canvas>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">Visiting Lecturer</h3>
                        <canvas id="visiting-lecturer" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">Invited Speaker</h3>
                        <canvas id="invited-speaker" width="400" height="200"></canvas>
                    </div>
                    <div class="col-md-4 mt-4 mb-4">
                        <h3 class="text-align">Editor / Mitra-Bestari Jurnal</h3>
                        <canvas id="editor" width="400" height="200"></canvas>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4 mb-4">
                        <h3 class="text-align">Penghargaan atas Prestasi/Kinerja</h3>
                        <canvas id="penghargaan" width="400" height="200"></canvas>
                    </div>

                    <div class="col-md-6 mt-4 mb-4 ">
                        <h3 class="text-align">Staff Ahli </h3>
                        <canvas id="staf" width="400" height="200"></canvas>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4 mb-4">
                        <h3 class="text-align">Karya Ilmiah</h3>
                        <canvas id="karya-ilmiah" width="400" height="200"></canvas>
                    </div>

                    <div class="col-md-6 mt-4 mb-4">
                        <h4 class="text-align">Teknologi Tepat Guna, Produk, Karya Seni dan dan Rekayasa Sosial</h4>
                        <canvas id="teknologi" width="400" height="200"></canvas>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-md-6 mt-4 mb-4">
                        <h3 class="text-align">Publikasi Prosiding</h3>
                        <canvas id="pro" width="400" height="200"></canvas>
                    </div>

                    <div class="col-md-6 mt-4 mb-4">
                        <h3 class="text-align">Publikasi Jurnal</h3>
                        <canvas id="publikasi-jurnal" width="400" height="200"></canvas>
                    </div>
                </div>

                <div class="row">
                    
                </div>










            </div>
        </div>

        <!-- plugin chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- publikasi Jurnal -->
        <script>
            const qwe = document.getElementById('publikasi-jurnal').getContext('2d');
            var jurnal_nasional_tidak_terakreditasi = <?php echo json_encode(array_column($jurnal_nasional_tak_terakreditasi, 'publikasi_jumlah')); ?>;

            var jurnal_nasional_terakreditasi = <?php echo json_encode(array_column($jurnal_nasional_terakreditasi, 'publikasi_jumlah')); ?>;

            var jurnal_nasional = <?php echo json_encode(array_column($jurnal_nasional, 'publikasi_jumlah')); ?>;

            var jurnal_nasional_bereputasi = <?php echo json_encode(array_column($jurnal_nasional_bereputasi, 'publikasi_jumlah')); ?>;


            const groupedBarChart2 = new Chart(qwe, {
                type: 'bar',
                data: {
                    labels:  <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                    datasets: [
                    {
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
        <!-- book chapter -->
        <script>
            const ctx = document.getElementById('book-chapter').getContext('2d');
            var nasional = <?php echo json_encode(array_column($tingkat_nasional, 'publikasi_buku_jumlah')); ?>;

            var internasional = <?php echo json_encode(array_column($tingkat_internasional, 'publikasi_buku_jumlah')); ?>;
            const groupedBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                    datasets: [
                    {
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
        <!-- media massa -->
        <script>
            var media = document.getElementById('media-massa').getContext('2d');
            var media_nasional = <?php echo json_encode(array_column($media_nasional, 'media_jumlah')); ?>;

            var media_internasional = <?php echo json_encode(array_column($media_internasional, 'media_jumlah')); ?>;

            var proChart = new Chart(media, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                    datasets: [
                        {
                            label: 'Media Nasional',
                            data: media_nasional,
                            backgroundColor: 'rgba(0, 128, 0, 0.5)', // Warna hijau dengan transparansi
                            borderColor: 'rgba(0, 128, 0, 1)', // Warna hijau
                            borderWidth: 1
                        },
                        {
                            label: 'Media Internasional',
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

        <!-- hki -->
        <script>
        var hak = document.getElementById('hki').getContext('2d');

        var hak_ciptaan = <?php echo json_encode(array_column($ciptaan, 'hki_jumlah')); ?>;

        var hak_paten = <?php echo json_encode(array_column($paten, 'hki_jumlah')); ?>;

        var proChart = new Chart(hak, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
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

        <!-- visiting lecturer -->
        <script>
        var visit = document.getElementById('visiting-lecturer').getContext('2d');

        var pt_tingkat_nasional = <?php echo json_encode(array_column($pt_tingkat_nasional, 'visit_jumlah')); ?>;

        var pt_tingkat_internasionl = <?php echo json_encode(array_column($pt_tingkat_internasional, 'visit_jumlah')); ?>;

        var proChart = new Chart(visit, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
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

        var forum_tingkat_internasional = <?php echo json_encode(array_column($forum_tingkat_internasional, 'invit_jumlah')); ?>;
        var proChart = new Chart(invited, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
                    label: 'Forum Nasional',
                    data: forum_tingkat_nasional,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)', // Warna hijau kebiruan dengan transparansi
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna hijau kebiruan
                    borderWidth: 1
                },
                {
                    label: 'Forum Internasional',
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

        var jurnal_tingkat_internasional = <?php echo json_encode(array_column($jurnal_tingkat_internasional, 'jurnal_jumlah')); ?>;

        var proChart = new Chart(edit, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
                        label: 'Jurnal Nasional',
                        data: jurnal_tingkat_nasional,
                        backgroundColor: 'rgba(255, 205, 86, 0.5)', // Warna kuning dengan transparansi
                        borderColor: 'rgba(255, 205, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Jurnal Internasional',
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
                datasets: [
                    {
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
                datasets: [
                    {
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
                datasets: [
                    {
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

        <!-- karya ilimiah -->
        <script>
        var media = document.getElementById('karya-ilmiah').getContext('2d');

        var karya_ilmiah = <?php echo json_encode(array_column($karya_ilmiah, 'karya_ilmiah_jumlah')); ?>;

        var proChart = new Chart(media, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
                        label: 'Karya Ilmiah',
                        data: karya_ilmiah,
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

        <!-- teknologi -->
        <script>
        var tech = document.getElementById('teknologi').getContext('2d');

        var teknologi = <?php echo json_encode(array_column($teknologi, 'teknologi_jumlah')); ?>;

        var proChart = new Chart(tech, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($tahun, 'tahun')); ?>,
                datasets: [
                    {
                        label: 'Teknologi Tepat Guna, Produk, Karya Seni dan dan Rekayasa Sosial',
                        data: teknologi,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna merah muda dengan transparansi
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
    


    