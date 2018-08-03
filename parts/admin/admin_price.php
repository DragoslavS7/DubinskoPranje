<?php require_once  'admin_hed.php'; ?>
    <section id="admin_change">
        <div class="container">
            <div class="box">
                <div class="section-header">
                    <h2>Cene</h2>
                    <a href="add_price.php" id="add-price-list" class="btn btn-outline-dark mb-2"><i class="ion-android-add-circle"></i> Dodaj</a>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="member">
                            <div class="details">
                                <div id="no-more-tables">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Usluge</th>
                                            <th scope="col">Cena</th>
                                            <th scope="col"></th>
                                            <th scope="col"><a href="add_price.php" class="btn btn-outline-dark mb-2"><i class="ion-android-add-circle"></i> Dodaj</a></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $r = $price->view_price();
                                        if($r > 0): while ($t = $r->fetch_assoc()):
                                        ?>
                                            <input type="hidden" name="pid" id="pid" value="<?php echo $t['id']; ?>">
                                        <tr>
                                            <th scope="row"><?php echo $t['id']; ?>.</th>
                                            <td data-title="Usluge"><?php echo $t['title']; ?></td>
                                            <td data-title="Cena"><?php echo $t['price']; ?> rsd</td>
                                            <td><a href="edit_price.php?pid=<?php echo $t['id'] ?>" class="btn btn-outline-dark"><i class="ion-edit"></i>Izmeni</a></td>
                                            <td><a href="#" class="btn btn-outline-dark delete_price_list"><i class="ion-android-delete "></i>Obrisi</a></td>
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