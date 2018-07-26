<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container">
            <div class="box">
                <div class="section-header">
                    <h2>Dodaj</h2>
                </div>

                <div class="form">
                    <div id="sendmessage">Cestitamo, uspesno ste popunili sva polja.</div>
                    <div id="errormessage"></div>
                    <form action="" method="POST" role="form" class="contactForm">
                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                        <h3>sec1</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_about" id="inp_about" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Uneti odgovarajuci tekst za polje 'O NAMA' . . ."></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_about_1" class="form-control mb-3" id="inp_about_1" placeholder="1." data-rule="minlen:4"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_about_2" class="form-control mb-3" id="inp_about_2" placeholder="2." data-rule="minlen:4"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_about_3" id="inp_about_3" placeholder="3." data-rule="minlen:4"/>
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
                                            <textarea class="form-control mb-3" name="inp_service" id="inp_service" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Polje za unos teksta za polje 'usluge' "></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_service_1" class="form-control mb-3" id="inp_service_1" placeholder="1." data-rule="minlen:4"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="inp_service_2" class="form-control mb-3" id="inp_service_2" placeholder="2." data-rule="minlen:4"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_service_3" id="inp_service_3" placeholder="3." data-rule="minlen:4"/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-center col-md-12">
                                            <input type="text" class="form-control" name="inp_service_4" id="inp_service_4" placeholder="4." data-rule="minlen:4"/>
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
                                            <textarea class="form-control mb-3" name="inp_port" id="inp_port" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Uneti odgovarajuci tekst za galeriju slika . . ."></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control mb-3" name="inp_contact" id="inp_contact" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Uneti odgovarajuci tekst za uvod u kontakt . . ."></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bord_form mb-3">
                            <div class="bord_form mb-3">
                                <div class="bord_form mb-3">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <div class="text-center"><button type="submit" class="btn-block" name="btn_create" id="btn_create">Kreiraj</button></div
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