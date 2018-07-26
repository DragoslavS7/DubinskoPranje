<?php require_once  'admin_hed.php'; ?>
<section id="admin_change">
    <div class="container">
        <div class="box">
            <div class="section-header">
                <h2>Dodati slike</h2>
            </div>

            <div class="form">
                <div id="sendmessage">Succesful registration. Thank you!</div>
                <div id="errormessage"></div>
                    <div class="form-row">

                        <div class="form-group text-center col-md-6">
                            <h3>Galerija</h3>
                            <input type="file" name="btn1" id="file_slider" class="mb-3 upload" data-value="1"  style="width:100%;">
                                <ul class="list-group mb-3">
                                    <?php $r = $img->select_where_enum_one(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
                                    <input type="hidden" name="fid" id="fid" value="<?php echo $t['id']; ?>">
                                    <li class="list-group-item mb-1"><a href="#"><?php echo $t['img_url']; ?></a><a href="#" class="del"><i class="ion-android-delete"></i></a></li>
                                    <?php endwhile; endif; ?>
                                </ul>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group text-center col-md-6">
                            <h3>Slajder</h3>
                            <input type="file" name="btn2" id="file_galery" class="mb-3 upload" data-value="2"  style="width:100%;">
                            <ul class="list-group mb-3">
                                <?php $r = $img->select_where_enum_two(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
                                    <li class="list-group-item mb-1"><a href="#"><?php echo $t['img_url']; ?></a><a href="#" class="del"><i class="ion-android-delete"></i></a> </li>
                                <?php endwhile; endif; ?>
                            </ul>
                            <div class="validation"></div>
                            <input type="hidden" name="btn_galery" id="btn_galery">
                        </div>

                    </div>
            </div>
        </div>
    </div>

</section><!-- #contact -->
<?php require_once 'admin.foot.php'; ?>