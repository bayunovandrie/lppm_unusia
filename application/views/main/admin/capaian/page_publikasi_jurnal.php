
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Publikasi Jurnal</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Publikasi Jurnal</li>
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
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300">Jumlah Publikasi Jurnal</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Publikasi Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tahun Publikasi</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($jurnal->result_array() as $value) { ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['publikasi_jumlah'] ?></td>
                                    <td>
                                        <?php if ($value['publikasi_type'] == 1 ) {
                                            echo 'Jurnal Nasional Tidak Terakreditasi';
                                        } elseif ($value['publikasi_type'] == 2) {
                                            echo 'Jurnal Nasional Terakreditasi';
                                        }  elseif ($value['publikasi_type'] == 3) {
                                            echo 'Jurnal Nasional';
                                        } elseif ($value['publikasi_type'] == 4) {
                                            echo 'Jurnal Nasional Bereputasi';
                                        } ?>
                                    </td>
                                    <td><?php echo $value['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $value['publikasi_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['publikasi_id'] ?>"><i class="fas fa-trash"></i></button>
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
                <h4 class="modal-title">Tambah Publikasi Jurnal</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/Capaian/create" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Jurnal</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" name="jml" required>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Jurnal Tipe</label>
                              <select class="form-control" name="tipe">
                                    <option value="1" >Jurnal Nasional Tidak Terakreditasi</option>
                                    <option value="2" >Jurnal Nasional Terakreditasi</option>
                                    <option value="3" >Jurnal Nasional</option>
                                    <option value="4" >Jurnal Nasional Bereputasi</option>
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

<?php foreach ($jurnal->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['publikasi_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Pengabdian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Capaian/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah Publikasi Jurnal</label>
                      <input type="number" value="<?= $update['publikasi_jumlah'] ?>" class="form-control" id="exampleFormControlInput1" name="jml" required>
                      <input type="hidden" name="id" value="<?php echo $update['publikasi_id'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Jurnal Tipe</label>
                              <select class="form-control" name="tipe">
                                    <?php if ($update['publikasi_type'] == 1) { ?>
                                        <option value="1" selected >Jurnal Nasional Tidak Terakreditasi</option>
                                        <option value="2" >Jurnal Nasional Terakreditasi</option>
                                        <option value="3" >Jurnal Nasional</option>
                                        <option value="4" >Jurnal Nasional Bereputasi</option>
                                    <?php } elseif ($update['publikasi_type'] == 2) {?>
                                        <option value="1" >Jurnal Nasional Tidak Terakreditasi</option>
                                        <option value="2" selected>Jurnal Nasional Terakreditasi</option>
                                        <option value="3" >Jurnal Nasional</option>
                                        <option value="4" >Jurnal Nasional Bereputasi</option>
                                    <?php } elseif ($update['publikasi_type'] == 3) {?>
                                        <option value="1" >Jurnal Nasional Tidak Terakreditasi</option>
                                        <option value="2" >Jurnal Nasional Terakreditasi</option>
                                        <option value="3" selected >Jurnal Nasional</option>
                                        <option value="4" >Jurnal Nasional Bereputasi</option>
                                    <?php } elseif ($update['publikasi_type'] == 4) {?>
                                        <option value="1" >Jurnal Nasional Tidak Terakreditasi</option>
                                        <option value="2" >Jurnal Nasional Terakreditasi</option>
                                        <option value="3" >Jurnal Nasional</option>
                                        <option value="4" selected>Jurnal Nasional Bereputasi</option>
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


<?php foreach ($jurnal->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['publikasi_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Capain</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Capaian/delete" method="post">
                        <div class="mb-3">
                            <?php 
                            switch ($delete['publikasi_type']) {
                                case 1:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Nasional Tidak Terakreditasi</span></p>";
                                    break;
                                case 2:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Nasional Terakreditasi</span></p>";
                                    break;
                                case 3:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Nasional</span></p>";
                                    break;
                                default:
                                    echo "<p>Apakah Anda Yakin Untuk Delete Capain <span style=\"font-weight: bold;\">Jurnal Nasional Bereputasi</span></p>";
                                    break;
                            }
                            ?>


                          
                          <input type="hidden" name="id" value="<?= $delete['publikasi_id']; ?>">
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



    