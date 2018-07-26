<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container">
            <div class="box">
                <div class="section-header">
                    <h2>Edit</h2>
                </div>

                <div class="form">
                    <div id="sendmessage">Cestitamo, uspesno ste Izmenili polje.</div>
                    <div id="errormessage"></div>
                    <input type="hidden" name="cid" id="cid" value="<?php echo $_GET['cid']; ?>">
                    <form action="" method="POST" role="form" class="contactForm" <?php $res = $create->select($_GET['cid']); ?> >
                        <?php foreach ($res as $val): ?>
                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                    <h3>sec1</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_about" id="inp_about" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php echo $val['about_texterea']; ?></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_about_1" class="form-control mb-3" id="inp_about_1" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['about_1']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_about_2" class="form-control mb-3" id="inp_about_2" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['about_2']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_about_3" id="inp_about_3" placeholder="Your password" data-rule="minlen:4" value="<?php echo $val['about_3']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                    <h3>sec2</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_service" id="inp_service" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php echo $val['service_texterea']; ?></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_service_1" class="form-control mb-3" id="inp_service_1" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['service_1']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_service_2" class="form-control mb-3" id="inp_service_2" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['service_2']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_service_3" id="inp_service_3" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['service_3']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_service_4" id="inp_service_4" placeholder="Your Name" data-rule="minlen:4" value="<?php echo $val['service_4']; ?>"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                    <h3>sec3</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_port" id="inp_port" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php echo $val['portf_text']; ?></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_contact" id="inp_contact" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php echo $val['contac_text']; ?></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <div class="text-center"><button type="submit" class="btn-block" name="btn_change" id="btn_change">Edit</button></div
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section><!-- #contact -->

<?php require_once 'admin.foot.php'; ?>