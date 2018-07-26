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
        <div class="row no-gutters mb-4">
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

        <div class="row">
            <div class="col-lg-12 col-md-4">
                <ul class="pagination">
                    <li>
                        <a href="#" class="previous" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                    <li><a href="#">05</a></li>
                    <li><a href="#">06</a></li>
                    <li><a href="#">07</a></li>
                    <li><a href="#">08</a></li>
                    <li><a href="#">09</a></li>
                    <li><a href="#">10</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

</section><!-- #portfolio -->