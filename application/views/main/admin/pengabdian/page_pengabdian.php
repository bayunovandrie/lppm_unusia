
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Pengabdian</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pengabdian</li>
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
                                <th align="center" style="text-align: center; vertical-align: middle;">Gambar</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300" >Tema Pengabdian</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Deksripsi</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="60">Tahun</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Tipe</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="130">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($penelitian->result_array() as $n) {
                                ?>
                            <tr class="gradeA">
                                <td ><?php echo $no++; ?></td>
                                <td >
                                    <img src="<?= BASEURL ?>assets2/images/pengabdian/<?php echo $n['pengabdian_img']; ?>" width="100">
                                </td>
                                <td ><?= $n['pengabdian_tema'] ?></td>
                                <td ><?= $n['pengabdian_desk'] ?></td>
                                <td ><?= $n['tahun'] ?></td>
                                <td >
                                    <?php if ($n['pengabdian_tipe'] == 1 ) {
                                        echo "Internal";
                                    } elseif ($n['pengabdian_tipe'] == 2) {
                                        echo "Eksternal";
                                    } elseif ($n["pengabdian_tipe"] == 3) {
                                        echo "KKN";
                                    } elseif ($n['pengabdian_tipe'] == 4 ) {
                                        echo "Mandiri";
                                    } ?>
                                        
                                    </td>

                                <td align="center" style="text-align: center; vertical-align: middle;">
                                    <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $n['pengabdian_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                    <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $n['pengabdian_id'] ?>"><i class="fas fa-trash"></i></button>
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
                <h4 class="modal-title">Tambah Pengabdian</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/Pengabdian/create" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tema Pengabdian</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="tema" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Deksripsi</label>
                      <textarea  name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tipe Riset</label>
                              <select class="form-control" name="type">
                                    <option value="1">Internal</option>
                                    <option value="2">Eksternal</option>
                                    <option value="3">KKN</option>
                                    <option value="4">Mandiri</option>
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
                        <img src="<?= BASEURL ?>assets/images/pengabdian/pengabdian-eks-1.jpg" id="imagePreview"  width="100" class="bordered-image">
                    </div>
                    <div class="form-group">
                        <label for="imageInput"></label>
                        <input type="file" id="imageInput" name="image" accept="image/*" required>
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
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['pengabdian_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Pengabdian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Pengabdian/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tema Pengabdian</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="tema" value="<?php echo $update['pengabdian_tema'] ?>" required>
                      <input type="hidden" name="id" value="<?php echo $update['pengabdian_id'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Deksripsi</label>
                      <textarea  name="deskripsi" class="form-control" required><?php echo $update['pengabdian_desk'] ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tipe Riset</label>
                              <select class="form-control" name="type">
                                        <?php if ($update['pengabdian_tipe'] == 1) { ?>
                                            <option value="1" selected>Internal</option>
                                            <option value="2">Eksternal</option>
                                            <option value="3">KKN</option>
                                            <option value="4">Mandiri</option>
                                        <?php } elseif ($update['pengabdian_tipe'] == 2) {?>
                                            <option value="1">Internal</option>
                                            <option value="2" selected>Eksternal</option>
                                            <option value="3">KKN</option>
                                            <option value="4">Mandiri</option>
                                        <?php } elseif ($update['pengabdian_tipe'] == 3) {?>
                                            <option value="1">Internal</option>
                                            <option value="2">Eksternal</option>
                                            <option value="3" selected>KKN</option>
                                            <option value="4">Mandiri</option>
                                        <?php }  elseif ($update['pengabdian_tipe'] == 4) {?>
                                            <option value="1">Internal</option>
                                            <option value="2">Eksternal</option>
                                            <option value="3">KKN</option>
                                            <option value="4" selected>Mandiri</option>
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
                                    <?php foreach ($tahun as $value) { ?>
                                        <option value="<?php echo $value['TahunID'] ?>"><?php echo $value['tahun'] ?></option>
                                    <?php } ?>
                              </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <?php if ($update['pengabdian_img'] != '' ) { ?>
                            <img src="<?= BASEURL ?>assets2/images/pengabdian/<?php echo $update['pengabdian_img'] ?>" id="imagePreview"  width="100" class="bordered-image">
                        <?php } ?>
                        
                    </div>
                    <div class="form-group">
                        <label for="imageInput"></label>
                        <input type="file" id="imageInput" name="image" accept="image/*">
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
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['pengabdian_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Pengabdian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Pengabdian/delete" method="post">
                        <div class="mb-3">
                          <p>Apakah Anda Yakin Untuk Delete Pengabdian <span style="font-weight: bold;" ><?php echo $delete['pengabdian_tema'] ?></span> </p>
                          <input type="hidden" name="id" value="<?= $delete['pengabdian_id']; ?>">
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


<script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function(event) {
            const selectedImage = event.target.files[0];
            if (selectedImage) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }

                reader.readAsDataURL(selectedImage);
            }
        });
    </script>




    