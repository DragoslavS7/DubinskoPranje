<!--==========================
  Comments
============================-->
<section id="comments" >
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-6">
                <?php $r = $contact->select(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
                <div class="blog-comment">
                    <hr/>
                    <ul class="comments wow fadeInLeft">
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
                            <div class="post-comments">
                                <p class="meta"> <?php echo $t['create_at']; ?> <a href="#"> <?php echo $t['name']; ?> </a> says : <i class="pull-right"></i></p>
                                <p> <?php echo $t['mesage'] ?> </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
