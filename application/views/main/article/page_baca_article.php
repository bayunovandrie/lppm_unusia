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
            <div class=" mt-5 mb-5" style="text-align:center;">
                <div class="row">
                    <div class="col">
                        <h3><?= $article['article_judul'] ?></h3>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <p><?= $publikasi ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <img src="http://localhost/CI3_admin/assets2/images/article/<?= $article['article_img'] ?>" alt="">
                    </div>
                </div>
                    
                <div class="row" style="text-align:left;">
                    <div class="col">
                        <p style="color:black;">
                            <?= $article['article_body'] ?>
                        </p>
                    </div>
                </div>
                <div class="row mt-3" align="right">
                    <div class="col">
                        <a href="<?= BASEURL ?>Home" class="btn btn-primary" >Back To Home</a>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
</main>