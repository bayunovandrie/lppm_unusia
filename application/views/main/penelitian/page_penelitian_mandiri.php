<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:35px; color: #3c3d3d;">Penelitian</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Penelitian > Mandiri</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <form action="" method="" class="form-group">

                <div class="row">
                    <div class="col-md-2 form-group mt-4">
                        <label>Select Tahun: </label>

                        <select class="form-control" name="tahun">
                            <?php foreach ($tahun->result_array() as $value) { ?>
                            <option value="<?php echo $value['TahunID'] ?>"><?php echo $value['tahun'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="col-md-3 mt-5">
                        <button class="btn btn-primary" type="submit" name="ex">Submit</button>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-header">
                    <h5 style="color:#3c3d3d;">Daftar Penelitian Mandiri</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penerbit</th>
                                    <th>Judul Penelitian</th>
                                    <th>Tahun</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($penelitian->result_array() as $n) {
                                ?>
                                <tr class="gradeA">
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?php echo $no++; ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['penelitian_nama'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['penelitian_judul'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <a href="http://localhost/CI3_admin/storage/riset/<?php echo $n['penelitian_file_name'] ?>"
                                            download>Download File</a>
                                    </td>


                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <br>



        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
$(document).ready(function() {
    $('#cardTable').DataTable({
        searching: true, // Aktifkan fitur pencarian
        paging: true, // Aktifkan fitur penomoran halaman
        columnDefs: [{
            targets: 0,
            orderable: false // Matikan pengurutan untuk kolom pertama yang berisi gambar
        }]
    });
});
</script>