<!--==========================
  Services Section
============================-->
<section id="services">
    <div class="container">
        <?php  $r = $create->last_query(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
        <div class="section-header">
            <h2>Usluge</h2>
            <p> <?php echo $t['service_texterea']; ?> </p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Dubinsko namestaja</a></h4>
                    <p class="description"> <?php echo $t['service_1']; ?> </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-picture-o"></i></div>
                    <h4 class="title"><a href="">Poliranje farova</a></h4>
                    <p class="description"> <?php echo $t['service_2']; ?> </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Poliranje vozila</a></h4>
                    <p class="description"> <?php echo $t['service_3']; ?> </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-map"></i></div>
                    <h4 class="title"><a href="">Dubinsko pranje vozila</a></h4>
                    <p class="description"> <?php echo $t['service_4']; ?> </p>
                </div>
            </div>

        </div>
        <?php endwhile; endif; ?>

    </div>
</section><!-- #services -->