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
            <?php $r = $pagination->select_paginate($limit); if($r > 0 ): while ($t = $r->fetch_assoc()): ?>
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if ($page > 0): $prevpage = $page -1  ?>
                        <li>
                            <a href="?page=<?php echo $prevpage; ?>" class="previous" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php for ($i = 1; $i<=$page; $i++): ?>
                        <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                        <?php  if ($page < $total): $nextpage = $page + 1 ?>
                        <li>
                            <a href="?page=<?php echo $nextpage; ?>" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</section><!-- #portfolio -->