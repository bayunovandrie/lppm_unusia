<main>
    <section class="intro-section" id="intro-section">
        <div class="" style="margin-top: 70px; background-color: whitesmoke;">
            <div class="container">
                <div class="row">
                    <div class="col pt-4 pb-4">
                        <p style="font-size:35px; color: #3c3d3d;">Pengabdian</p>
                        <p style="color: #9fa0a0; margin-top: -12px;">LPPM UNUSIA > Pengabdian > KKN</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5" style="box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
            <form action="<?= BASEURL ?>pengabdian-kkn" method="post" class="form-group">

                <div class="row">
                    <div class="col-md-2 form-group mt-4">
                        <label>Select Tahun: </label>

                        <select class="form-control" name="tahun">
                            <?php foreach ($tahun->result_array() as $value) { ?>
                            <option value="<?php echo $value['TahunID'] ?>"><?php echo $value['tahun'] ?></option>
                            <?php } ?>
                        </select>

                    </div>

                    <div class="col-md-3 mt-5">
                        <button class="btn btn-primary" type="submit" name="ex">Submit</button>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-header">
                    <h5 style="color:#3c3d3d;">Daftar Penelitian Internal</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tema</th>
                                    <th>Tahun</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $no = 1;
                            foreach ($pengabdian->result_array() as $n) {
                                ?>
                                <tr class="gradeA">
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?php echo $no++; ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['pengabdian_tema'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['tahun'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <?= $n['pengabdian_desk'] ?></td>
                                    <td align="center" style="text-align: center; vertical-align: middle;">
                                        <img src="<?= BASEURL ?>assets2/images/pengabdian/<?php echo $n['pengabdian_img'] ?>"
                                            width="100">
                                    </td>


                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <br>



        </div>
    </section>
</main>