<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container">
            <div class="box">
                <div class="section-header">
                    <h2>Izmeni cenu</h2>

                    <div class="form">
                        <div id="sendmessage">Succesful registration. Thank you!</div>
                        <div id="errormessage"></div>
                        <input type="hidden" name="pid" id="pid" value="<?php echo $_GET['pid']; ?>">
                        <form action="" method="POST" role="form" class="contactForm" <?php $res = $price->select_price($_GET['pid']); ?> >
                            <?php foreach ($res as $val): ?>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="price_title" class="form-control mb-4" id="price_title" placeholder="Naziv" data-rule="minlen:4" value="<?php echo $val['title'];  ?>"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="price_list" class="form-control mb-4" id="price_list" placeholder="Vasa cena" data-rule="minlen:4"  value="<?php echo $val['price']; ?>"/>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="text-center"><button type="submit" name="btn_update_price" id="btn_update_price">Izmeni</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #team -->
<?php require_once 'admin.foot.php'; ?>