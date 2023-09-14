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
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="text-align:center;">

                <h3>Edit Article</h3>
                
            </div>
            <div class="card-body">
                <form action="<?= BASEURL ?>Article/edit" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Judul</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" required value="<?php echo $article['article_judul'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Puklikasi</label>
                      <input type="date" class="form-control" id="exampleFormControlInput1" name="publikasi" value="<?= $article['created_at'] ?>" required>
                      <input type="hidden" name="id" value="<?= $article['article_id'] ?>" >
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Type</label>
                      <select class="form-control" name="type">
                        <?php if ($article['article_type'] == 1) { ?>
                            <option value="1" selected>Berita</option>
                            <option value="2" >Opini</option>
                        <?php } elseif ($article['article_type'] == 2) {?>
                            <option value="1" >Berita</option>
                            <option value="2" selected>Opini</option>
                        <?php } ?>
                          
                      </select>
                    </div>

                    <div class="mb-3">
                        <label>Body</label>
                      <textarea id="summernote" name="body"><?php echo $article['article_body'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <?php if($article['article_img'] != '' ) {  ?>
                                <img src="<?= BASEURL ?>assets2/images/article/<?= $article['article_img'] ?>" id="imagePreview"  width="300" class="bordered-image">
                            <?php } else { ?>
                                <img src="<?= BASEURL ?>assets2/images/article/example.jpeg" id="imagePreview"  width="300" class="bordered-image">
                            <?php } ?>
                            
                        </div>
                        <div class="form-group">
                            <label for="imageInput"></label>
                            <input type="file" id="imageInput" name="image" accept="image/*">
                        </div>
                    </div>

                    <a href="<?= BASEURL ?>Article" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
        
    </div>
    
</div>

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