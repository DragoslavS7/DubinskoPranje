<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container">
            <div class="box">
                <div class="section-header">
                    <h2>Unesi cenu</h2>
                </div>
                <div class="container">
                    <div class="form">
                        <div id="sendmessage">Succesful registration. Thank you!</div>
                        <div id="errormessage"></div>
                            <form action="" method="POST" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="price_title" class="form-control mb-4" id="price_title" placeholder="Naziv" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="price_list" class="form-control mb-4" id="price_list" placeholder="Vasa cena" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="text-center"><button type="submit" name="btn_price" id="btn_price">Kreiraj</button></div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #team -->
<?php require_once 'admin.foot.php'; ?>