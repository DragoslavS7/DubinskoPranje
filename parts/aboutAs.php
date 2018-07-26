<!--==========================
  About Section
============================-->
<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="../img/about-img.jpg" alt="">
            </div>

            <div class="col-lg-6 content">
                <h2>O NAMA | 021 MS </h2>
                <?php  $r = $create->last_query(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
                <h3> <?php echo $t['about_texterea']; ?> </h3>
                <ul>
                    <li><i class="ion-android-checkmark-circle"></i> <?php echo $t['about_1'] ?> </li>
                    <li><i class="ion-android-checkmark-circle"></i> <?php echo $t['about_2'] ?> </li>
                    <li><i class="ion-android-checkmark-circle"></i> <?php echo $t['about_3'] ?> </li>
                </ul>
                <?php endwhile; endif; ?>

            </div>
        </div>

    </div>
</section><!-- #about -->