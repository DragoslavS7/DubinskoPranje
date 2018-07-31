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
            <?php if($res > 0 ): foreach ($res as $key=>$val):  ?>
            <div class="col-lg-3 col-md-4">
                <div class="portfolio-item wow fadeInUp">
                    <a href="../upload/<?php echo $val[0] ?>" class="portfolio-popup">
                        <img src="../upload/<?php echo $val[0] ?>" alt="">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li>
                            <a href="?page=<?php echo $prev; ?>" class="previous" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i<=$next; $i++): ?>
                        <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        <li>
                            <a href="?page=<?php echo $next; ?>" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</section><!-- #portfolio -->