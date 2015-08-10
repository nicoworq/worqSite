<div id="page-loader">
    <img src="img/loader.svg" alt="Loading"/>
</div>

<header class="loaderAnim">
    <div class="header-left">
        <a id="logo-worq" href="index.php">
            <img  src="img/logo-worq.png" alt="WORQ" title="WORQ" />
        </a>
        <a href="index.php" class='shake'><span><?php echo _('BOOST YOUR PROJECT'); ?></span></a>
    </div>
    <div class="header-center">
        <ul id="navigation-center">
            <li><a href="press.php"><?php echo _('PRESS') ?></a></li>
            <!--<li><a href="#">AWARDS</a></li>-->
            <li><a href="thecompany.php"><?php echo _('THE COMPANY') ?></a></li>
            <!--<li><a href="thecompany.php"><?php echo _('PORTFOLIO') ?></a></li>
            <li><a href="ourteam.php">OUR TEAM</a></li>
            <li><a href="#">BLOG</a></li>-->
        </ul>
    </div>
    <div class="header-right">
        <span class="idioma">
            <a href="<?php echo $current_page . '?lang=en'; ?>" class="<?php
            if ($lang === 'en') {
                echo 'active';
            }
            ?>">EN</a>/ 
            <a href="<?php echo $current_page . '?lang=es'; ?>" class="<?php
            if ($lang === 'es') {
                echo 'active';
            }
            ?>">ES</a>
        </span>
        <span class="llamar"><?php //echo _('CALL US');   ?> +54 (9) 3416 280427</span>
        <span class="contacto"><b><a href="#" class="mostrarContacto"><?php echo _('CONTACT'); ?></a></b></span>
    </div>

</header>
<section id="botonera-fixed">
    <div class="botonera-marco">
        <div class="botonera-bg">
            <span id="logo-botonera"><a href='#slide-home'><img src='img/logo-worq-fixed.jpg' alt='WORQ'/></a></span>
            <ul id="navegacion-fixed">
                <li><a href="#pro-web"><?php echo _('Profesional Websites'); ?></a></li>
                <li><a href="#apps"><?php echo _('Custom Applications'); ?></a></li>
                <li><a href="#servicios"><?php echo _('Web & Brand Consulting'); ?></a></li>
                <li><a href="#servicios2"><?php echo _('Marketing & Consulting'); ?></a></li>
                <li class="nav-fixed-contacto"><a class="mostrarContacto" href="#contacto"><?php echo _('Contact Us'); ?></a></li>
            </ul>
        </div>
    </div>
</section>
<section id="contacto-ok">
    <div class="contacto-ok-contenido">
        <h3><?php echo _('Thanks for your submission');?></h3>
        <h4><?php echo _("We'll respond to you<br/>as soon as we can!");?></h4>
        <button id="cerrar-form"><?php echo _('Continue at worq');?></button>
    </div>

</section>
<section id="contacto">
    <div id="cerrar-contacto" class="mostrarContacto">
        <img src="img/close.png">
    </div>


    <div class="contenido-contacto">
        <h2><?php echo _('Lets Talk<br/>About Your Project'); ?></h2>       

        <form id="form-contacto" method="post" action="php/ajax-form-contacto.php">
            <div id="contacto-progress">
                <img src="img/loader.svg" alt="Progreso"/>
            </div>


            <div class="necesito">
                <h5><?php echo _('what do you need?'); ?></h5>
                <label tabindex="0">
                    <input type="checkbox" name="necesito[]" value="Branding"/>
                    <div class="necesito-bt">Branding</div>
                </label>
                <label>
                    <input type="checkbox" name="necesito[]" value="Pro Website"/>
                    <div class="necesito-bt">Pro Website</div>
                </label>
                <label>
                    <input type="checkbox" name="necesito[]" value="APP"/>
                    <div class="necesito-bt">APP</div>
                </label>
                <label>
                    <input type="checkbox" name="necesito[]" value="Web Application"/>
                    <div class="necesito-bt"><?php echo _('Web Application'); ?></div>
                </label>
                <label>
                    <input type="checkbox" name="necesito[]" value="Other"/>
                    <div class="necesito-bt"><?php echo _('Other');?></div>
                </label>

            </div>

            <div class="invertir">
                <h5><?php echo _('How much do you want to invest?'); ?></h5>

                <div class="slider-invertir">
                    <div class="linea"></div>
                    <div class="pelota"></div>
                    <div class="valor">$7000</div>
                </div>
            </div>
            <div class="separador-contacto separador2"></div>
            <div class="datos-cliente">
                <div class="form-invalid">
                    <?php echo _('Some inputs are empty or wrong, please fill them right') ?>
                </div>
                <h5><?php echo _('please complete this form, we will contact you soon'); ?></h5>
                <input type="text" name="nombre" placeholder="<?php echo _('Your Name *') ?>" tabindex="1"/>
                <input type="text" name="email" placeholder="Email" tabindex="2"/>
                <input type="text" name="telefono" placeholder="<?php echo _('Phone'); ?>" tabindex="3"/>
                <input type="text" name="sex" value=""/>
                <textarea rows="5" name="mensaje" placeholder="<?php echo _('Message'); ?>" tabindex="4"></textarea>
            </div>
            <input type="submit" value="<?php echo _('Send Message')?>" tabindex="5" />

        </form>
        <div class="telefonos">
            <h4 class="email"><?php echo _('Email us:');?> contacto@worq.com.ar</h4>
            <h4 class="ciudad">Rosario, Argentina</h4>
            <h4 class="cel"><?php echo _('Call us:'); ?>: +54 (9) 3416280427</h4>
        </div>
    </div>

</section>

