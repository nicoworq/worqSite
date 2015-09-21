<div id="page-loader">
    <img src="img/loader.png" alt="Loading"/>
</div>

<header class="loaderAnim">
    <div class="header-left">
        <a id="logo-worq" href="index.php" data-ref-bt="Logo Header">
            <img  src="img/logo-worq.png" alt="WORQ" title="WORQ" />
        </a>
        <a href="index.php" class='shake' data-ref-bt="Boost your proyect header"><span><?php echo _('BOOST YOUR PROJECT'); ?></span></a>
    </div>
    <div class="header-center">
        <ul id="navigation-center">
            <li><a href="press.php" data-ref-bt="Prensa header"><?php echo _('PRESS') ?></a></li>
            <!--<li><a href="#">AWARDS</a></li>-->
            <li><a href="thecompany.php" data-ref-bt="La compania header"><?php echo _('THE COMPANY') ?></a></li>
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
            ?>" data-ref-bt="Ingles header">EN</a>/ 
            <a href="<?php echo $current_page . '?lang=es'; ?>" class="<?php
            if ($lang === 'es') {
                echo 'active';
            }
            ?>" data-ref-bt="Español header">ES</a>
        </span>
        <a class="llamar" href="tel:3416280427" data-ref-bt="Llamar header">+54 (9) 3416 280427</a>
        <span class="contacto"><b><a href="#" class="mostrarContacto" data-ref-bt="Contacto header"><?php echo _('CONTACT'); ?></a></b></span>
    </div>

</header>

<section id="top-mobile">
    <div class="header-mobile">               
        <button id="menu-mobile-bt">
            <span>&nbsp;</span>
            <span class="hide">&nbsp;</span>
            <span>&nbsp;</span>
        </button>
        <a id="logo-mobile" href="#" data-ref-bt="Logo Header MObile">
            <img src="img/logo-worq-mobile.png" alt="WORQ"/>
        </a>
        <a id="call-mobile" href="tel:3416280427" data-ref-bt="Llamar header mobile">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUQ4NDU2RUE1RDdFMTFFNThBQzlFRDA2RDg0QzYwMTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUQ4NDU2RUI1RDdFMTFFNThBQzlFRDA2RDg0QzYwMTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFRDg0NTZFODVEN0UxMUU1OEFDOUVEMDZEODRDNjAxMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFRDg0NTZFOTVEN0UxMUU1OEFDOUVEMDZEODRDNjAxMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlUsbpcAAAOTSURBVHjarJjfSxVREMfvXUW7lr8iA0EDLSQjo19UYCVFWfYDyqAfEhUU2C/DiKA/oId6ykClB3vroZceoocyFSwvoiBpFqZppgUVBZXi7Yeh23dgFobD7t6z1zPwYXfP2ZmdPWd2zpwN27YdCihFoByUguVgCUgHZGgKjINB8Bw8BaOBrJNDGiSDk6DbDi6d4BjbiPussMYI7QW3wVLRFgNR0Msj8BOEQSZYBtaAzSAidIZBDWhOdIQWgHvK27aCQyBV423ngcOgXbHRBCJeel7G8kC/MNIHSjWn143t4LWw9wIs1nWInBkVyjd05z8OKaBO2B1xc0pVSgevWGGaAzlkmDNgRoxUxM+h++INTrjEBI1e2JBTMqZcHaoUN11XDBwBE9w3AIoNOCWnb7fqEM3vGHf2gCShWCWG2JF+QzHlBPqwE6dOZ7V42AahlA1iHgmvyIBTZcLecenQS258oigU+mTgGkNB7uSpLrq2kBtLwCrOk/VK3vzrk1O3hsxIIx830mpADu3ihgmXtP4ZTHsYsgw59BD85vMKi1dtknbwT7l5FrxxMTIr3myuQrPQweel5NAKvujzUIi6tJ0HbSFz4jy7mBzK4wuvuuWRS1s4ZFZG+JhPDqWJGHKTVo4lKZcMxhDJJB/TLY23ngF1SlsxOGfQIefZtsXFFkmWj0ID+KS03eRCzIRk8HGKHPrAFwU+CjGeJinzuWZea8ChIj6OW+KzXhdH6QG4q7Qt4q+wFiSL9krQAh6Da+y0X8yt5uMApe5aTt2TvODFWxBbPZYSKriugKse/UOgxMVmGvjD95wNcSnhyEGNtScDtNiJyVuXeqpK9Bc4jT3c0BagdGhM0KlcxVYXt3fI1f6UUNgSYKXeB94HcOarUp+Xi76j0qFkLpJsrqlTAjhFNfEF8C6OM7/ADqUkHuI+KtQstYStEMp1CdQ1FBubuPx9Br4Jez94KyTvvyP6t3kV+U3ipmoDxReNXpbLNqpWPKfeb9cREQE+w1Nheht0Wdn3p8bbKOaAQaHUwPM9V0fSlBmgWF2ou5XOUf50UP7YMwdn9itBH+UNhPbe3vkK6pUvpYtTRIaGE5ngNOhVbNzy+4p1fseUcfG/UilJuvl3zBj4ziVENijktWs9SBI6dO9F0GnihxXliAO8ZMwGSIT0YTTzlGltwXVGSJVcsJN/SNEvvXyuZ2yu/D5yBRHlavNLEOP/BRgAe16MHGbRX6gAAAAASUVORK5CYII="/>
        </a>                
    </div>
    <ul id="menu-mobile">
        <li><a href="#pro-web" data-ref-bt="Pro web mobile"><?php echo _('Profesional Websites'); ?></a></li>
        <li><a href="#apps" data-ref-bt="Apps mobile"><?php echo _('Custom Applications'); ?></a></li>
        <li><a href="#servicios" data-ref-bt="Branding mobile"><?php echo _('Web & Brand Consulting'); ?></a></li>
        <li><a href="#servicios2" data-ref-bt="Marketing mobile"><?php echo _('Marketing & Consulting'); ?></a></li>

        <li><a href="press.php" data-ref-bt="Prensa mobile"><?php echo _('PRESS') ?></a></li>
        <li>
            <a href="<?php echo $current_page . '?lang=en'; ?>" data-ref-bt="EN Mobile" class="<?php
            if ($lang === 'en') {
                echo 'active';
            }
            ?>">EN</a>/ 
            <a href="<?php echo $current_page . '?lang=es'; ?>" data-ref-bt="ES Mobile" class="<?php
            if ($lang === 'es') {
                echo 'active';
            }
            ?>">ES</a>
        </li>
        <li><a href="thecompany.php" data-ref-bt="Compania Mobile"><?php echo _('THE COMPANY') ?></a></li>
        <li><a class="mostrarContacto" data-ref-bt="Contacto Mobile" href="#contacto"><?php echo _('Contact Us'); ?></a></li>
    </ul>
</section>
<section id="botonera-fixed">
    <div class="botonera-marco">
        <div class="botonera-bg">
            <span id="logo-botonera"><a href='#slide-home'><img src='img/logo-worq-fixed.jpg' alt='WORQ'/></a></span>
            <ul id="navegacion-fixed">
                <li><a href="#pro-web" data-ref-bt="Pro web fixed"><?php echo _('Profesional Websites'); ?></a></li>
                <li><a href="#apps" data-ref-bt="Apps fixed"><?php echo _('Custom Applications'); ?></a></li>
                <li><a href="#servicios" data-ref-bt="Branding fixed"><?php echo _('Web & Brand Consulting'); ?></a></li>
                <li><a href="#servicios2" data-ref-bt="Marketing fixed"><?php echo _('Marketing & Consulting'); ?></a></li>
                <li class="nav-fixed-contacto"><a class="mostrarContacto" data-ref-bt="Contacto fixed" href="#contacto"><?php echo _('Contact Us'); ?></a></li>
            </ul>
        </div>
    </div>
</section>
<section id="contacto-ok">
    <div class="contacto-ok-contenido">
        <h3><?php echo _('Thanks for your submission'); ?></h3>
        <h4><?php echo _("We'll respond to you<br/>as soon as we can!"); ?></h4>
        <button id="cerrar-form"><?php echo _('Continue at worq'); ?></button>
    </div>

</section>
<section id="contacto">
    <div id="cerrar-contacto" class="mostrarContacto" data-ref-bt="Cerrar contacto">
        <img src="img/close.png">
    </div>
    <div class="contenido-contacto">
        <h2><?php echo _('Lets Talk<br/>About Your Project'); ?></h2>       

        <form id="form-contacto" method="post" action="php/ajax-form-contacto.php">
            <div id="contacto-progress">
                <img src="img/loader.png" alt="Progreso"/>
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
                    <div class="necesito-bt"><?php echo _('Other'); ?></div>
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
            <input type="submit" value="<?php echo _('Send Message') ?>" tabindex="5" data-ref-bt="Submit contacto" />

        </form>
        <div class="telefonos">
            <h4 class="email"><?php echo _('Email us:'); ?> contacto@worq.com.ar</h4>
            <h4 class="ciudad">Rosario, Argentina</h4>
            <h4 class="cel"><?php echo _('Call us:'); ?>: +54 (9) 3416280427</h4>
        </div>
    </div>

</section>

