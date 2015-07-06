<div id="page-loader">
    <img src="img/loader.svg" alt="Loading"/>
</div>

<header class="loaderAnim">
    <div class="header-left">
        <a id="logo-worq" href="index.php">
            <img  src="img/logo-worq.png" alt="WORQ" title="WORQ" />
        </a>
        <a href="index.php" class='shake'><span><?php echo _('IMPULSE YOUR PROJECT'); ?></span></a>
    </div>
    <div class="header-center">
        <ul id="navigation-center">
            <li><a href="press.php"><?php echo _('PRESS') ?></a></li>
            <!--<li><a href="#">AWARDS</a></li>-->
            <li><a href="thecompany.php"><?php echo _('THE COMPANY') ?></a></li>
            <li><a href="thecompany.php"><?php echo _('PORTFOLIO') ?></a></li>
            <!--<li><a href="ourteam.php">OUR TEAM</a></li>
            <li><a href="#">BLOG</a></li>-->
        </ul>
    </div>
    <div class="header-right">
        <span class="idioma"><b>EN</b>/ES</span>
        <span class="llamar"><?php echo _('CALL US'); ?> +54 (9) 3416 280427</span>
        <span class="contacto"><b><a href="#" class="mostrarContacto"><?php echo _('CALL US'); ?>x</a></b></span>
    </div>

</header>
<section id="botonera-fixed">
    <div class="botonera-marco">
        <div class="botonera-bg">
            <span id="logo-botonera"><a href='#slide-home'><img src='img/logo-worq-fixed.jpg' alt='WORQ'/></a></span>
            <ul id="navegacion-fixed">
                <li><a href="#pro-web"><?php echo _('Profesional Websites'); ?></a></li>
                <li><a href="#apps"><?php echo _('Custom Applications'); ?></a></li>
                <li><a href="#servicios"><?php echo _('Brand Consulting'); ?></a></li>
                <li><a href="#servicios2"><?php echo _('Marketing & Consulting'); ?>S</a></li>
                <li><a class="nav-fixed-contacto mostrarContacto" href="#contacto"><?php echo _('CONTACT US'); ?></a></li>
            </ul>
        </div>
    </div>
</section>
<section id="contacto">
    <div id="cerrar-contacto" class="mostrarContacto">
        <img src="img/close.png">
    </div>
    <div class="contacto-parte">

        <div class="contenido-contacto">
            <h2><?php echo _('LETS TALK ABOUT YOUR PROJECT'); ?></h2>
            <div class="separador"></div>
            <h3><?php echo _('WE ARE EAGER TO HEAR YOUR IDEAS'); ?></h3>
        </div>

    </div>
    <div class="contacto-parte">


        <form id="form-contacto" method="post" action="php/ajax-form-contacto.php">
            <div id="contacto-progress"></div>

            <h3><?php echo _('LETS GET IN TOUCH'); ?></h3>

            <input type="text" name="nombre" placeholder="Name" />
            <input type="text" name="email" placeholder="Email"/>
            <textarea rows="5" name="mensaje" placeholder="Message"></textarea>
            <input type="submit" value="Contact Us" />
            <span><?php echo _('We will contact you shortly!'); ?></span>

        </form>


    </div>
    <div class="contacto-parte contacto-telefonos">

        <h4><?php echo _('OR JUST CALL US'); ?>: <br> +54 9 3416280427</h4>

        <p><?php echo _('SEND AN EMAIL TO'); ?>:  <span>CONTACTO@WORQ.COM.AR</span></p>
        <p><?php echo _('IF YOU WANT TO TALK<br> WITH JUAN:'); ?> <br> <span>JUAN@WORQ.COM.AR</span></p>
        <p><?php echo _('IF YOU WANT TALK <br> WITH NICOLAS:'); ?> <br> <span>NICOLAS@WORQ.COM.AR</span></p>
        <p><?php echo _('FIND US IN:'); ?> <br> <span>ROSARIO, SANTA FE<br>ARGENTINA</span></p>


    </div>

</section>

