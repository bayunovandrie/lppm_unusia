<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Article</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Article</li>
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

                <a href="<?= BASEURL ?>Article/add_article" class="btn btn-primary" >
                    Add
                </a>
                
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                            <tr>
                                <th align="center" style="text-align: center; vertical-align: middle;" width="20">No</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" >Article img</th>
                                <th align="center" style="text-align: center; vertical-align: middle;" >Article Judul</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Article Type</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">Article Publikasi</th>
                                <th align="center" style="text-align: center; vertical-align: middle;">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($article->result_array() as $n) {
                                ?>
                            <tr class="gradeA">
                                <td ><?php echo $no++; ?></td>
                                <td >
                                    <img src="<?= BASEURL ?>assets2/images/article/<?= $n['article_img'] ?>" width="100">
                                </td>
                                <td>
                                    <?= $n['article_judul'] ?>
                                </td>
                                <td>
                                    <?php if ($n['article_type'] == 1) {
                                        echo "Berita";
                                    } elseif ($n['article_type'] == 2) {
                                        echo "Opini";
                                    } ?>
                                </td>
                                <td>
                                    <?php $datetimeString = "$n[created_at]";
                                    $dateTime = new DateTime($datetimeString);
                                    $monthName = $dateTime->format('F');

                                    $dayName = $dateTime->format('l');

                                    $formattedDateTime = $dateTime->format('d') . ' ' . $monthName . ' ' . $dateTime->format('Y'); echo $formattedDateTime;?>
                                </td>
                                
                                <td align="center" style="text-align: center; vertical-align: middle;">
                                    <a href="<?= BASEURL ?>Article/edit_article?id=<?= $n['article_id'] ?>" class="btn btn-warning" >
                                        <i class="fas fa-edit"></i>
                                    </a>
                                     | 

                                    <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#modal-delete<?= $n['article_id'] ?>"><i class="fas fa-trash"></i></button>
                                </td>

                                
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</div>

<?php foreach ($article->result_array() as $delete) {?>
    <div class="modal fade bd-example-modal-lg" id="modal-delete<?= $delete['article_id'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Article</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>Article/delete" method="post">
                        <div class="mb-3">
                          <p>Apakah Anda Yakin Untuk Delete Article <span style="font-weight: bold;" ><?php echo $delete['article_judul'] ?></span> </p>
                          <input type="hidden" name="id" value="<?= $delete['article_id']; ?>">
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