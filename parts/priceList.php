<!--==========================
  Our Team Section
============================-->
<section id="team" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Cenovnik</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="member">
                    <div class="pic"><img src="../img/team-2.jpg" alt=""></div>
                    <div class="details">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usluge</th>
                                <th scope="col">Cena</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $r = $price->view_price();
                            if($r > 0): while ($t = $r->fetch_assoc()):
                            ?>
                            <tr>
                                <th scope="row"><?php echo $t['id']; ?>.</th>
                                <td> <?php echo $t['title']; ?> </td>
                                <td> <?php echo $t['price']; ?> </td>
                            </tr>
                            <?php endwhile; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- #team -->