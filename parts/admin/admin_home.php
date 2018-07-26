<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container-fluid">
            <div class="box">
                <div class="section-header">
                    <h2>Tabela</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="member">
                            <div class="details">
                                <div id="no-more-tables">
                                    <table class="table table-hover" >
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">O nama</th>
                                            <th scope="col">1.</th>
                                            <th scope="col">2.</th>
                                            <th scope="col">3.</th>
                                            <th scope="col">Usluge</th>
                                            <th scope="col">1.</th>
                                            <th scope="col">2.</th>
                                            <th scope="col">3.</th>
                                            <th scope="col">4.</th>
                                            <th scope="col">Galerija</th>
                                            <th scope="col">Kontakt</th>
                                            <th scope="col"><a href="admin_create.php" class="btn btn-outline-dark mb-2"><i class="ion-android-add-circle"></i> Dodaj</a</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $r = $create->print_customer();
                                        if($r > 0): while ($t = $r->fetch_assoc()):
                                        ?>
                                        <input type="hidden" name="cid" id="cid" value="<?php echo $t['id']; ?>">
                                        <tr>
                                            <th scope="row"><?php echo $t['id']; ?>.</th>
                                            <td data-title="O nama"><?php echo $t['about_texterea']; ?></td>
                                            <td data-title="1."><?php echo $t['about_1']; ?></td>
                                            <td data-title="2."><?php echo $t['about_2']; ?></td>
                                            <td data-title="3."><?php echo $t['about_3']; ?></td>
                                            <td data-title="Usluge"><?php echo $t['service_texterea']; ?></td>
                                            <td data-title="1."><?php echo $t['service_1']; ?></td>
                                            <td data-title="2."><?php echo $t['service_2']; ?></td>
                                            <td data-title="3."><?php echo $t['service_3']; ?></td>
                                            <td data-title="4."><?php echo $t['service_4']; ?></td>
                                            <td data-title="Galerija"><?php echo $t['portf_text']; ?></td>
                                            <td data-title="Kontakt"><?php echo $t['contac_text']; ?></td>
                                            <td data-title="#"><a href="admin_changes.php?cid=<?php echo $t['id']; ?>" class="btn btn-outline-dark btn-edit"><i class="ion-edit"></i>Izmeni</a></td>
                                            <td data-title="#"><a class="btn btn-outline-dark btn-delete"><i class="ion-android-delete"></i>Obrisi</a></td>
                                        </tr>
                                        <?php endwhile; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #team -->
<?php require_once 'admin.foot.php'; ?>