
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
                <form action="<?= BASEURL ?>admin/Download" method="post">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <label>Filter Category:</label>
                        <select class="form-control" name="filter_category">
                            <option value="all" >ALL Category</option>
                            <?php foreach ($category->result_array() as $value) { ?>
                                <option value="<?php echo $value['category_id'] ?>"><?php echo $value['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary"type="submit" style="margin-top:30px;" >Submit</button>
                    </div>
                </div>
                </form>
                
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="300" >Nama Panduan</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Category Panduan</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">File Name</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($download->result_array() as $val) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $val['panduan_tema'] ?></td>
                                    <td><?php echo $val['category_name'] ?></td>
                                    <td><?php echo $val['panduan_name_ekstensi'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <button type="button" class="btn btn btn-warning" data-toggle="modal" data-target="#modal-update<?= $val['panduan_id'] ?>"><i class="fas fa-edit"></i></button> | 
                                        <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $val['panduan_id'] ?>"><i class="fas fa-trash"></i></button>
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
                <h4 class="modal-title">Tambah Panduan Download</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/Download/create" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Nama Panduan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Category Panduan</label>
                              <select class="form-control" name="category">
                                    <?php foreach ($category->result_array() as $val) { ?>
                                        <option value="<?php echo $val['category_id'] ?>"><?php echo $val['category_name'] ?></option>
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

<?php foreach ($download->result_array() as $update) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['panduan_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Panduan Download</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Download/update" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Panduan</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $update['panduan_tema']; ?>" required>
                          <input type="hidden" name="id" value="<?= $update['panduan_id']; ?>" >
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Category Panduan</label>
                                  <select class="form-control" name="category">
                                        <?php foreach ($category->result_array() as $val) { 
                                            if ($update['category_donwload_id'] == $val['category_id']) { ?>
                                                <option value="<?php echo $val['category_id'] ?>" selected><?php echo $val['category_name'] ?></option>
                                            <?php } else {?>
                                                <option value="<?php echo $val['category_id'] ?>"><?php echo $val['category_name'] ?></option>
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
                            if (isset($update['panduan_name_ekstensi'])) {
                                echo '<p class="text-muted">File saat ini: ' . htmlspecialchars($update['panduan_name_ekstensi']) . '</p>';
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


<?php foreach ($download->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['panduan_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Panduan Download</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>admin/Download/delete" method="post">
                        <div class="mb-3">
                          <p>Apakah Anda Yakin Untuk Delete Panduan Download <span style="font-weight: bold;" ><?php echo $delete['panduan_tema'] ?></span> </p>
                          <input type="hidden" name="id" value="<?= $delete['panduan_id']; ?>">
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



    