<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:35px; color: #3c3d3d;"><?php echo $category_dokumen['category_name'] ?></p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Download Panduan > <?php echo $category_dokumen['category_name'] ?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=" mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="container">
                            <?php foreach ($panduan->result_array() as $value) { ?>
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="card-body"> 
                                                <img src="<?= BASEURL ?>assets/images/img-pdf.png" width="75">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body" >
                                                <a href="#" style="color:#068b53; font-weight: bold; font-size: 20px;">
                                                    <?php echo $value['panduan_tema'] ?></p>
                                                </a>
                                                
                                                <p><i class="fas fa-file"></i> 1 File</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card-body" style=" margin-top: 25px;">
                                                <a href="<?= BASEURL ?>storage/panduan/<?= $value['panduan_name_ekstensi'];  ?>" download  class="btn btn-primary">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end mb-5">
                        <a href="<?= BASEURL ?>Download" class="btn btn-danger">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            

         </div>
    </section>
</main>