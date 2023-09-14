
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Publikasi Rekomisi Prestasi dan Kinerja Peneliti/Pengabdi</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Publikasi Rekomisi Prestasi dan Kinerja Peneliti/Pengabdi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- awal visiting lecturer -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new" style="float: left;">Add</button>
                    </div>
                
                    <div class="col-md-4">
                        <h2>Visiting Lecturer</h2>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Visiting Lecturer</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Visiting Lecturer Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($visiting->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['visit_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['visit_type'] == 1 ) {
                                            echo 'PT Tingkat Nasional';
                                        } elseif ($value['visit_type'] == 2) {
                                            echo 'PT Tingkat Internasional';
                                        }?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $value['visit_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['visit_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                </table>
            </div>
        </div>

        <!-- awal invited speaker -->
        <div class="card mt-5 ">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new-invited" style="float: left;">Add</button>
                        
                    </div>
                
                    <div class="col-md-4">
                        <h2>Invited Speaker</h2>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Invited Lecturer</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Invited Lecturer Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($invited->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['invit_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['invit_type'] == 1 ) {
                                            echo 'Forum Tingkat Nasional';
                                        } elseif ($value['invit_type'] == 2) {
                                            echo 'Forum Tingkat Internasional';
                                        }?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update-invit<?= $value['invit_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete-invit<?= $value['invit_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                </table>
            </div>
        </div>
        <!-- akhir invited speaker -->

        <!-- awal editor / mitra bestari jurnal -->
        <div class="card mt-5 ">
            <div class="card-header">

                
                <div class="row">
                    <div class="col-md-4">
                        <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new-editor" style="float: left;">Add</button>
                        
                    </div>
                
                    <div class="col-md-7">
                        <h2>Editor / Mitra-Bestari Jurnal</h2>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table id="example3" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Editor / Mitra-Bestari Jurnal</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Editor / Mitra-Bestari Jurnal Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($editor->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['jurnal_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['jurnal_tipe'] == 1 ) {
                                            echo 'Jurnal Tingkat Nasional';
                                        } elseif ($value['jurnal_tipe'] == 2) {
                                            echo 'Jurnal Tingkat Internasional';
                                        }?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update-editor<?= $value['jurnal_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete-editor<?= $value['jurnal_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                </table>
            </div>
        </div>
        <!-- akhir edit /mitra bestari jurnal -->

        <!-- awal penghargaan prestasi kerja -->
        <div class="card mt-5 ">
            <div class="card-header">

                
                <div class="row">
                    <div class="col-md-4">                        
                        <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new-penghargaan" style="float: left;">Add</button>
                        
                    </div>
                
                    <div class="col-md-7">
                        <h2>Penghargaan atas Prestasi/Kinerja</h2>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table id="example4" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Prestasi Penghargaan</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Penghargaan Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($penghargaan->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['penghargaan_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['penghargaan_tipe'] == 1 ) {
                                            echo 'Tingkat Nasional';
                                        } elseif ($value['penghargaan_tipe'] == 2) {
                                            echo 'Tingkat Internasional';
                                        }?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update-penghargaan<?= $value['penghargaan_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete-penghargaan<?= $value['penghargaan_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                </table>
            </div>
        </div>
        <!-- akhri penghargaan prestasi kerja -->

        <!-- awal staff ahli -->
        <div class="card mt-5 ">
            <div class="card-header">

                
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new-staff-ahli" style="float: left;">Add</button>
                        
                    </div>
                
                    <div class="col-md-9">
                        <h2>Staff Ahli/Kedudukan Jabatan Dengan Tugas Serupa</h2>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table id="example5" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Staff Ahli</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Staff Ahli Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($staff_ahli->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['staf_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['staf_tipe'] == 1 ) {
                                            echo 'Lembaga Tingkat Nasional';
                                        } elseif ($value['staf_tipe'] == 2) {
                                            echo 'Lembaga Tingkat Internasional';
                                        }?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update-staff-ahli<?= $value['staf_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete-staff-ahli<?= $value['staf_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                </table>
            </div>
        </div>
        <!-- akhir staff ahli -->
        
    </div>

   
    
</div>


<!-- awal modal visiting lecturer -->
<div class="modal fade bd-example-modal-lg" id="modal-new" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Publikasi Visiting Lecturer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/CapaianRekomisiPrestasi/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Visiting Lecturer</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="jenis" value="visiting" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Visited Lecturer Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >PT Tingkat Nasional</option>
                                    <option value="2" >PT Tingkat Internasional</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) {?>
                                    <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($visiting->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['visit_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Visiting Lecturer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/CapaianRekomisiPrestasi/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Visiting Lecturer</label>
                      <input type="number" value="<?= $update['visit_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['visit_id'] ?>">
                      <input type="hidden" name="jenis" value="visiting" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Visiting Lecturer Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['visit_type'] == 1) { ?>
                                        <option value="1" selected >PT Tingkat Nasional</option>
                                        <option value="2" >PT Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['visit_type'] == 2) {?>
                                        <option value="1" >PT Tingkat Nasional</option>
                                        <option value="2" selected >PT Tingkat Internasional</option>
                                        
                                    <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) { 
                                    if ($update['tahun_id'] == $value['TahunID']) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>" selected ><?php echo $value['tahun'] ?></option>
                                    <?php } else {?>
                                        <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } 
                                }?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<?php foreach ($visiting->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['visit_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Publikasi Visiting Lecturer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/CapaianRekomisiPrestasi/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['visit_type']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">PT Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">PT Tingkat Internasional</span></p>";
                                    break;                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['visit_id']; ?>">
                          <input type="hidden" name="jenis" value="visiting" >
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- akhir modal visiting lecturer -->

<!-- awal modal invited lecturer -->
<div class="modal fade bd-example-modal-lg" id="modal-new-invited" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Publikasi Invited Lecturer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Invited Lecturer</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="jenis" value="invited" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Inviter Lecturer Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >Forum Tingkat Nasional</option>
                                    <option value="2" >Forum Tingkat Internasional</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) {?>
                                    <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($invited->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update-invit<?= $update['invit_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Invited Lecturer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Invited Lecturer</label>
                      <input type="number" value="<?= $update['invit_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['invit_id'] ?>">
                      <input type="hidden" name="jenis" value="invited" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Invited Lecturer Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['invit_type'] == 1) { ?>
                                        <option value="1" selected >Forum Tingkat Nasional</option>
                                        <option value="2" >Forum Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['invit_type'] == 2) {?>
                                        <option value="1" >Forum Tingkat Nasional</option>
                                        <option value="2" selected >Forum Tingkat Internasional</option>
                                        
                                    <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) { 
                                    if ($update['tahun_id'] == $value['TahunID']) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>" selected ><?php echo $value['tahun'] ?></option>
                                    <?php } else {?>
                                        <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } 
                                }?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<?php foreach ($invited->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete-invit<?= $delete['invit_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Publikasi Invited Lecturer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['invit_type']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Forum Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Forum Tingkat Internasional</span></p>";
                                    break;                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['invit_id']; ?>">
                          <input type="hidden" name="jenis" value="invited" >
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- akhir Invited Lecturer -->

<!-- awal modal editor -->
<div class="modal fade bd-example-modal-lg" id="modal-new-editor" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Publikasi Editor/Mitra-Bestari Jurnal</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Editor/Mitra-Bestari Jurnal</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="jenis" value="editor" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Editor/Mitra-Bestari Jurnal Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >Jurnal Tingkat Nasional</option>
                                    <option value="2" >Jurnal Tingkat Internasional</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) {?>
                                    <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($editor->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update-editor<?= $update['jurnal_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Editor/Mitra-Bestari Jurnal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Editor/Mitra-Bestari Jurnal</label>
                      <input type="number" value="<?= $update['jurnal_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['jurnal_id'] ?>">
                      <input type="hidden" name="jenis" value="editor" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Editor/Mitra Bestari Jurnal Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['jurnal_tipe'] == 1) { ?>
                                        <option value="1" selected >Jurnal Tingkat Nasional</option>
                                        <option value="2" >Jurnal Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['jurnal_tipe'] == 2) {?>
                                        <option value="1" >Jurnal Tingkat Nasional</option>
                                        <option value="2" selected >Jurnal Tingkat Internasional</option>
                                        
                                    <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) { 
                                    if ($update['tahun_id'] == $value['TahunID']) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>" selected ><?php echo $value['tahun'] ?></option>
                                    <?php } else {?>
                                        <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } 
                                }?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($editor->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete-editor<?= $delete['jurnal_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Publikasi Editor/Mitra-Bestari Jurnal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['jurnal_tipe']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Tingkat Internasional</span></p>";
                                    break;                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['jurnal_id']; ?>">
                          <input type="hidden" name="jenis" value="editor" >
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- akhir modal editor -->

<!-- awal modal penghargaan -->
<div class="modal fade bd-example-modal-lg" id="modal-new-penghargaan" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Publikasi Penghargaan atas Prestasi/Kinerja</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Penghargaan atas Prestasi/Kinerja</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="jenis" value="penghargaan" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Penghargaan atas Prestasi/Kinerja Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >Tingkat Nasional</option>
                                    <option value="2" >Tingkat Internasional</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) {?>
                                    <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($penghargaan->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update-penghargaan<?= $update['penghargaan_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Penghargaan atas Prestasi/kinerja</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Penghargaan atas Prestasi/kinerja</label>
                      <input type="number" value="<?= $update['penghargaan_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['penghargaan_id'] ?>">
                      <input type="hidden" name="jenis" value="penghargaan" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Penghargaan atas Prestasi/Kinerja Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['penghargaan_tipe'] == 1) { ?>
                                        <option value="1" selected >Tingkat Nasional</option>
                                        <option value="2" >Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['penghargaan_tipe'] == 2) {?>
                                        <option value="1" >Tingkat Nasional</option>
                                        <option value="2" selected >Tingkat Internasional</option>
                                        
                                    <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) { 
                                    if ($update['tahun_id'] == $value['TahunID']) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>" selected ><?php echo $value['tahun'] ?></option>
                                    <?php } else {?>
                                        <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } 
                                }?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($penghargaan->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete-penghargaan<?= $delete['penghargaan_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Publikasi Penghargaan atas Prestasi/Kinerja</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['penghargaan_tipe']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Tingkat Internasional</span></p>";
                                    break;                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['penghargaan_id']; ?>">
                          <input type="hidden" name="jenis" value="penghargaan" >
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- akhri modal penghargaan -->
    
<!-- awal modal staff ahli -->
<div class="modal fade bd-example-modal-lg" id="modal-new-staff-ahli" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Publikasi Staff Ahli</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Staff Ahli</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="jenis" value="staff_ahli" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Staff Ahli Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >Lembaga Tingkat Nasional</option>
                                    <option value="2" >Lembaga Tingkat Internasional</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) {?>
                                    <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($staff_ahli->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update-staff-ahli<?= $update['staf_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Staff Ahli</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Staff Ahli</label>
                      <input type="number" value="<?= $update['staf_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['staf_id'] ?>">
                      <input type="hidden" name="jenis" value="staff_ahli" >
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Staff Ahli Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['staf_tipe'] == 1) { ?>
                                        <option value="1" selected >Lembaga Tingkat Nasional</option>
                                        <option value="2" >Lembaga Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['staf_tipe'] == 2) {?>
                                        <option value="1" >Lembaga Tingkat Nasional</option>
                                        <option value="2" selected >Lembaga Tingkat Internasional</option>
                                        
                                    <?php } ?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Publikasi</label>
                              <select class="form-control" name="tahun">
                                <?php foreach ($tahun->result_array() as $value) { 
                                    if ($update['tahun_id'] == $value['TahunID']) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>" selected ><?php echo $value['tahun'] ?></option>
                                    <?php } else {?>
                                        <option value="<?php echo $value['TahunID'] ?>" ><?php echo $value['tahun'] ?></option>
                                <?php } 
                                }?>
                                    
                              </select>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach ($staff_ahli->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete-staff-ahli<?= $delete['staf_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Publikasi Staff Ahli</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>CapaianRekomisiPrestasi/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['staf_tipe']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Lembaga Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Lembaga Tingkat Internasional</span></p>";
                                    break;                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['staf_id']; ?>">
                          <input type="hidden" name="jenis" value="staff_ahli" >
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- akhir modal staff ahli -->