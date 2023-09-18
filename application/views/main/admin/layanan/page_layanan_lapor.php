<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Layanan LAPOR</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">LAPOR</li>
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
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                            <th align="center" style="text-align: center; vertical-align: middle;">Link Google Form
                                Layanan LAPOR</th>
                            <th align="center" style="text-align: center; vertical-align: middle;" width="100">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($lapor->result_array() as $n) {
                                ?>
                        <tr class="gradeA">
                            <td><?php echo $no++; ?></td>
                            <td><?= $n['layanan_link'] ?></td>

                            <td align="center" style="text-align: center; vertical-align: middle;">
                                <button type="button" class="btn btn btn-warning" data-toggle="modal"
                                    data-target="#modal-update<?= $n['layanan_id'] ?>"><i
                                        class="fas fa-edit"></i></button>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>


<?php foreach ($lapor->result_array() as $update) { ?>
<div class="modal fade bd-example-modal-lg" id="modal-update<?= $update['layanan_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Link Form Layanan LAPOR</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>admin/Layanan/update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Link Google Form</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link"
                            value="<?= $update['layanan_link']; ?>" required>
                        <input type="hidden" name="id" value="<?= $update['layanan_id']; ?>">
                        <input type="hidden" name="jenis" value="lapor">
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