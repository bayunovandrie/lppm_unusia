
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Download</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Download</li>
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
                                    data-target="#modal-new" style="float: left;">Add</button>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Buku</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Buku Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($buku->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['publikasi_buku_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['publikasi_buku_type'] == 1 ) {
                                            echo 'Tingkat Nasional';
                                        } elseif ($value['publikasi_buku_type'] == 2) {
                                            echo 'Tingkat Internasional';
                                        } ?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $value['publikasi_buku_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['publikasi_buku_id'] ?>"><i class="fas fa-trash"></i></button>
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
                <h4 class="modal-title">Tambah Publikasi Buku/Book Chapter</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/CapaianBuku/create" method="post">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Buku</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Jurnal Tipe</label>
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

<?php foreach ($buku->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['publikasi_buku_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Publikasi Buku/Book Chapter</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/CapaianBuku/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Buku</label>
                      <input type="number" value="<?= $update['publikasi_buku_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['publikasi_buku_id'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Publikasi Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['publikasi_buku_type'] == 1) { ?>
                                        <option value="1" selected >Tingkat Nasional</option>
                                        <option value="2" >Tingkat Internasional</option>
                                        
                                    <?php } elseif ($update['publikasi_buku_type'] == 2) {?>
                                        <option value="1" >Tingkat Nasional</option>
                                        <option value="2" selected>Tingkat Internasional</option>
                                        
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


<?php foreach ($buku->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['publikasi_buku_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Capain</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/CapaianBuku/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['publikasi_buku_type']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Tingkat Nasional</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Tingkat Internasional</span></p>";
                                    break;
                                
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['publikasi_buku_id']; ?>">
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



    