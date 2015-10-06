<?php include_once './php/layout/language.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <?php $title = _('The Company'); include_once './php/layout/head.php'; ?>

    <body class="the-company">
        
        <?php include_once './php/layout/header.php'; ?>

        <section id="we-are">
            <div class="we-are-content-abs">
                <h1><?php echo _("We are WORQ"); ?></h1>
                <h3><?php echo _("Strategic innovation to boost your project"); ?></h3>
                <a href="#" class="mostrarContacto"><?php echo _("Let's get started now") ?></a>
            </div>

        </section>

        <section id="we-are-2">
            <div class="we-are-container">
                <div class="we-are-col">
                    <h3><?php echo _("Great experiences <br/> build great brands"); ?></h3>
                    <h4>
                        <img src="img/we-are-iso.png" alt="We Are WORQ"/>
                        <?php echo _("Through brand strategy and design, we craft experiences that help brands stand out."); ?>
                    </h4>
                    <div class="we-are-content">
                        <p>
                            <?php
                            echo _("Worq is a talented multi-disciplinary team of digital creators and strategists. We partner with our clients to solve problems, realize opportunities and deliver truly exceptional experiences. <br/>"
                                    . "Our collaborators include both independent agencies, as well as
                            
                            an exciting host of local creative outfits.");
                            ?>
                        </p>

                    </div>



                </div>
                <div class="we-are-col">
                    <h3><?php echo _("Technology, Strategy
                        and Creativity"); ?></h3>
                    <div class="we-are-content">
                        <p>
                            <?php echo _("We guide the digital transformation of companies and organizations by pioneering ground-breaking marketing solutions, products and business models."); ?>
                        </p>
                        <p>
                            <?php echo _("We know that today no agency can do everything. Tasks and projects are becoming more complex as new technologies and specializations emerge. Those who still promise 'Full-Service' end up delivering only half the possible results. That's why we concentrate on what our clients really need to be successful."); ?>
                        </p>
                    </div>

                </div>
            </div>


        </section>

        <section id="what-we-do">
            <h2><?php echo _("What We Do"); ?></h2>

            <div class="what-we-do-container">
                <ul class="we-do-list">
                    <li><h4><?php echo _("360 Solutions"); ?></h4>

                        <p>
                            <?php echo _("Websites and mobile applications from Rosario. Tasks and projects are becoming more complex as new technologies and specializations emerge."); ?>
                        </p>
                    </li>
                    <li><h4><?php echo _("Boost Projects"); ?></h4>

                        <p>
                            <?php echo _("Those who still promise 'Full-Service' end up delivering only half the possible results. That's why we concentrate on what our clients really need to be successful."); ?>
                        </p>
                    </li>
                    <li><h4><?php echo _("Design & develop"); ?></h4>

                        <p>
                            <?php echo _("We create web & digital experiences that transform brands, grow businesses and make people's lives better. We have the energy to boost your project."); ?>
                        </p>
                    </li>
                </ul>





            </div>

            <div class="section-footer we-do-everyday">
                <h4><?php echo _("AND EVERYDAY WE DO"); ?></h4>
                <p><?php echo _("Branding & Identity Design ~ Concept Development ~ Usability Testing & Research ~ Interaction Design ~ UX and UI design ~ Information Architecture ~ Content Creation ~ Interface Design"); ?></p> 
            </div>
        </section>

        <section id="rosario">      
            <div class="rosario-bg"></div>
            <div class="rosario-content">
                <h2><?php echo _("Apps From Rosario to the World"); ?></h2>
                <p>
                    Buenos aires 2235 . Rosario, Santa Fe, Argentina <br/>
                    +54 9 3416 28 04 27 contacto@worq.com.ar
                </p>
            </div>

        </section>

        <?php include_once './php/layout/footer.php'; ?>
    </body>
</html>
