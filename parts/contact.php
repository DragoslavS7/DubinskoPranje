<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Kontaktirajte nas</h2>
            <?php  $r = $create->last_query(); if($r > 0): while ($t = $r->fetch_assoc()): ?>
                <p> <?php echo $t['contac_text']; ?> </p>
            <?php endwhile; endif; ?>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Adresa</h3>
                    <address>41 Relje Savica | Cenej , Srbija | 21000</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Broj Telefona</h3>
                    <p><a href="tel:(+381) 64/068-8040">(+381) 64/068-8040</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:stolestole990@gmail.com">stolestole990@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>

    <div id="google-map" data-latitude="45.267136" data-longitude="19.833549"></div>

    <div class="container">
        <?php include 'comments.php';?>
        <div class="form">
            <div class="section-header text-center">
                <h3>Dodajte Komentar</h3>
            </div>
            <div id="sendmessage">Kompanija 021 MS Vam se zahvaljuje na komentaru !!!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

    </div>
</section><!-- #contact -->