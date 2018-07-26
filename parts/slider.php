
<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <h2>Dubinsko<span> Pranje</span></h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">O nama</a>
            <a href="#portfolio" class="btn-projects scrollto">Nas portfolio</a>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
        <?php $r = $img->select_where_enum_two(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
        <div class="item" style="background: url('../upload/<?php echo $t['img_url']; ?>') no-repeat;background-size: cover;width: 100%;height: 85vh;"></div>
        <?php endwhile; endif; ?>
    </div>

</section><!-- #intro -->