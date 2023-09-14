
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Riset</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Riset</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row" style="justify-content: flex-end;">
                    <div class="col-md-3 text-center">
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <button type="button" class="btn btn btn-primary" data-toggle="modal"
                                    data-target="#modal-new">Add</button>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300" >Nama Penerbit</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Judul Penelitian</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="60">Tahun</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($penelitian->result_array() as $n) {
                                ?>
                            <tr class="gradeA">
                                <td ><?php echo $no++; ?></td>
                                <td ><?= $n['penelitian_nama'] ?></td>
                                <td ><?= $n['penelitian_judul'] ?></td>
                                <td ><?= $n['tahun'] ?></td>
                                <td >
                                    <?php if ($n['peneletian_type'] == 1 ) {
                                        echo "Internal";
                                    } elseif ($n['peneletian_type'] == 2) {
                                        echo "Eksternal";
                                    } elseif ($n["peneletian_type"] == 3) {
                                        echo "Mandiri";
                                    } ?>
                                        
                                    </td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $n['penelitian_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $n['penelitian_id'] ?>"><i class="fas fa-trash"></i></button>
                                    </td>

                                
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</div>
<div class="modal fade bd-example-modal-lg" id="modal-new" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Riset</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/Riset/create" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Judul Riset</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" required>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tipe Riset</label>
                              <select class="form-control" name="type">
                                    <option value="1">Internal</option>
                                    <option value="2">Eksternal</option>
                                    <option value="3">Mandiri</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
                              <select class="form-control" name="tahun" >
                                    <?php foreach ($tahun as $value) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>"><?php echo $value['tahun'] ?></option>
                                    <?php } ?>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pdfFile">Pilih file PDF:</label>
                        <input type="file" class="form-control-file" id="pdfFile" name="pdfFile" accept=".pdf" required>
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

<?php foreach ($penelitian->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['penelitian_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Riset/update" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $update['penelitian_nama']; ?>" required>
                          <input type="hidden" name="id" value="<?= $update['penelitian_id']; ?>" >
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Judul Penelitian</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?= $update['penelitian_judul']; ?>" required>
                          
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Tipe Riset</label>
                                  <select class="form-control" name="type">
                                        <?php if ($update['peneletian_type'] == 1) { ?>
                                            <option value="1" selected >Internal</option>
                                            <option value="2">Eksternal</option>
                                            <option value="3">Mandiri</option>
                                        <?php } elseif ($update['peneletian_type'] == 2) {?>
                                            <option value="1">Internal</option>
                                            <option value="2" selected>Eksternal</option>
                                            <option value="3">Mandiri</option>
                                        <?php } elseif ($update['peneletian_type'] == 3) {?>
                                            <option value="1">Internal</option>
                                            <option value="2">Eksternal</option>
                                            <option value="3" selected>Mandiri</option>
                                        <?php } ?>
                                        
                                        
                                        
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
                                  <select class="form-control" name="tahun" >
                                        <?php foreach ($tahun as $value) { 
                                            if ($update['penelitian_year'] == $value['TahunID']) {?>
                                                <option value="<?php echo $value['TahunID'] ?>" selected><?php echo $value['tahun'] ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $value['TahunID'] ?>"><?php echo $value['tahun'] ?></option>
                                        <?php }
                                        } ?>
                                  </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pdfFile">Pilih file PDF:</label>
                            <input type="file" class="form-control-file" id="pdfFile" name="pdfFile" accept=".pdf">
                            <?php
                            if (isset($update['penelitian_file_name'])) {
                                echo '<p class="text-muted">File saat ini: ' . htmlspecialchars($update['penelitian_file_name']) . '</p>';
                            }
                            ?>
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


<?php foreach ($penelitian->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['penelitian_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Riset</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Riset/delete" method="post">
                        <div class="mb-3">
                          <p>Apakah Anda Yakin Untuk Delete Riset <span style="font-weight: bold;" ><?php echo $delete['penelitian_nama'] ?></span> </p>
                          <input type="hidden" name="id" value="<?= $delete['penelitian_id']; ?>">
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



    