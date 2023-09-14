<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:35px; color: #3c3d3d;">Article</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Article</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class=" mt-5 mb-5">
                <div class="row">
                    <?php foreach ($article->result_array() as $value) { ?>
                        <div class="col-md-4">
                                <div class="card rounded-card" style="width: 18rem;">
                                  <img src="http://localhost/CI3_admin/assets2/images/article/<?= $value['article_img'] ?>" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <a href="" style="color:black;">
                                    <p class="card-title" style="font-weight: bold;"><?= $value['article_judul'] ?></p>
                                    
                                    </a>
                                  </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" style="text-align:right; margin-right: 50px;">
                    <div class="col">
                        <a href="<?= BASEURL ?>Home" class="btn btn-primary">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>