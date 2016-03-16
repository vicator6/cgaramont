<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

    <section id="contact">
        <div class="container-fluid ac_maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4364.048291777199!2d2.2444285043311094!3d48.91540902
        8016164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665b73af7d3d9%3A0xddf064acad6b6826!2sLycee+Polyv
        alent+Claude+Garamont!5e0!3m2!1sfr!2sfr!4v1458061723200" width="100%" height="450" frameborder="10"
                    style="border:0"></iframe>

        </div>


        <div class="container">

            <div class="row ac_margin_sep">

                <div class="row">
                    <div class="col-md-9">
                        <h3 class="ac_contact_title text-center">Contact</h3>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-md-4">
                            <input id="fname" name="name" type="text" placeholder="Nom" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Adresse Mail" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input id="phone" name="phone" type="text" placeholder="Telephone" class="form-control">
                        </div>

                    </div>

                    <div class="row sept2">
                        <div class="col-md-12">
                            <input id="subject" name="subject" type="text" placeholder="Sujet" class="form-control">
                        </div>
                    </div>

                    <div class="row sept2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Votre message" id="comment"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit" id="btn-submit" name="btn-submit" value="submit">Envoyer le message</button>
                        </div>

                    </div>
                </div>

                <div class="container-fluid ac_nopadding">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                        <?php the_content(); ?>


                    <?php endwhile; endif; ?>
                </div>

            </div>
        </div>

    </section>

<?php include 'enbrief.php'; ?>

<?php get_footer(); ?>