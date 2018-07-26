<!--==========================
  Our Portfolio Section
============================-->
<section id="portfolio" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Nas portfolio</h2>
            <?php  $r = $create->last_query(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
            <p> <?php echo $t['portf_text']; ?> </p>
            <?php endwhile; endif; ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row no-gutters">
            <?php $r = $img->select_where_enum_one(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
            <div class="col-lg-3 col-md-4">
                <div class="portfolio-item wow fadeInUp">
                    <a href="../upload/<?php echo $t['img_url']; ?>" class="portfolio-popup">
                        <img src="../upload/<?php echo $t['img_url']; ?>" alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>

</section><!-- #portfolio -->