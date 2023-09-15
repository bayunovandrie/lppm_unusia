<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:35px; color: #3c3d3d;">Download File</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Download Panduan</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=" mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 style="color:#3c3d3d;">Download File</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th align="center" style="text-align: center; vertical-align: middle;">No</th>
                                        <th align="center" style="text-align: center; vertical-align: middle;">Category
                                            Dokumen</th>
                                        <th align="center" style="text-align: center; vertical-align: middle;">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                            $no = 1;
                            foreach ($category->result_array() as $value) { ?>
                                    <tr class="gradeA">
                                        <td align="center" style="text-align: center; vertical-align: middle;">
                                            <?php echo $no++; ?></td>
                                        <td align="center" style="text-align: center; vertical-align: middle;">
                                            <?php echo $value['category_name']; ?></td>
                                        <td align="center" style="text-align: center; vertical-align: middle;">
                                            <a class="btn btn-primary"
                                                href="<?= BASEURL ?>download-panduan?categoryid=<?php echo $value['category_id'] ?>"><i
                                                    class="fas fa-eye ml-2"></i></a>
                                        </td>

                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


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