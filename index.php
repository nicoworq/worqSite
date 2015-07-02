<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

$locale = 'es_AR';

putenv("LANG=".$locale);
setlocale(LC_ALL, $locale);


$domain = 'es';
echo bindtextdomain($domain, 'locale');
//bind_textdomain_codeset($domain, 'UTF-8');

textdomain($domain)
?>

<!DOCTYPE html>
<html lang="es">

    <?php include_once './php/layout/head.php'; ?>
    <body>

        <?php include_once './php/layout/header.php'; ?>
        <section id="botonera-container" class="loaderAnim"> 
            <ul id="botonera">
                <li><a href="#proweb" ><?php echo _("PROFESIONAL WEBSITE") ?></a></li>
                <li><a href="#apps"><?php echo _('CUSTOM APPLICATIONS'); ?></a></li>
                <li><a href="#servicios"><?php echo _('BRAND CONSULTING'); ?></a></li>
                <li><a href="#servicios2"><?php echo _('MARKETING & REPORTS'); ?></a></li>
            </ul>
        </section>
        <section id="slide-home" class="loaderAnim">            
            <div id="slide-home-bg">
                <img class="img-bg" src="img/bg2.jpg" alt="WORQ"/>
                <div class='flexslider'>
                    <ul class='slides'>
                        <li>
                            <div class='slide'>
                                <div class="slide-text">
                                    <h1>WORQ</h1>
                                </div>
                                <div class="slide-action">
                                    <img src="img/slide-mobile-min.png"/>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class='slide'>
                                <div class="slide-text">
                                    <h2 class=""><?php echo _('WE LAUCH WEB PROJECTS <br/> WITH <b>SUPERIOR QUALITY</b>'); ?></h2>                                                       
                                </div>
                                <div class="slide-action">
                                    <div class="cta-slide">
                                        <span><?php echo _('Impulse your project '); ?></span><br>
                                        <div class="bt-form mostrarContacto"><?php echo _('Get your website'); ?></div>
                                    </div>

                                </div>
                            </div>

                        </li>
                    </ul>
                </div>



            </div>
        </section>





        <section id="ultimos-proyectos" class="loaderAnim">
            <h3><span>&#8776;</span>&nbsp;<?php echo _('OUR WORK'); ?></h3>

            <div class="fila-proyectos">
                <div class="proyecto" >
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>

                    </div>
                    <img src="img/portfolio1.jpg"/>
                </div>
                <div class="proyecto">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>
                    </div>     
                    <img src="img/portfolio2.jpg"/>
                </div>
                <div class="proyecto">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>
                    </div>     
                    <img src="img/portfolio3.jpg"/>
                </div>

            </div>

            <div class="fila-proyectos">
                <div class="proyecto" >
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>
                    </div>   
                    <img src="img/portfolio4.jpg"/>
                </div>
                <div class="proyecto">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>
                    </div>     
                    <img src="img/portfolio5.jpg"/>
                </div>
                <div class="proyecto" >
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span>VIEW CASE</span>
                        </div>
                    </div>
                    <img src="img/portfolio6.jpg"/>
                </div>
            </div>

            <!-- <div class="bg-separador"></div>-->

        </section>

        <section id="pro-web">
            <div class="bg-pro-web">
                <h4>PRO<span>&#8776;</span>WEBSITES</h4>

                <div class="propiedades">
                    <span>100% MADE TO MEASURE</span>    
                    <span>HIGH DESIGN QUALITY</span>    
                    <span>POWERFULL & STRONG</span>    
                    <span>RESPONSIVE & USABLE</span>    
                    <span>NON TEMPLATE DESIGN</span>    
                </div>
                <a href ="#" class="mostrarContacto">Get your Website</a>
            </div>
        </section>

        <section id="apps">
            <div class="apps-contenedor">
                <div class="contenido-apps">
                    <h3><?php echo _('<span>We make</span> APPS'); ?></h3>
                    <div class="separador"></div>
                    <h4>CUSTOM APPLICATIONS</h4>
                    <p>bring <b>ideas</b> to <b>reality</b></p>
                    <a href="#" class="mostrarContacto">I want my APP!</a>
                </div>
                <div class="imagen-apps">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com">
                        <img src="img/imagen_taxista_virtual-min.png" alt="TaxistaVirtual"/>
                    </a>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="contenido-servicios">
                <h3>WEB<span>&</span>BRAND<span>CONSULTING</span></h3>
                <div class="nuestros-servicios">
                    <span>WEB PERFORMANCE ANALYSIS&nbsp;&nbsp;|&nbsp;&nbsp;OPTIMIZE RESULTS&nbsp;&nbsp;|&nbsp;&nbsp;NAMING ADVICE</span>
                </div>

            </div>
        </section>
        <section id="servicios2">
            <div class="contenido-servicios">
                <h3>ONLINE MARKETING <br/><span>&</span>REPORTS</h3>
                <div class="nuestros-servicios">
                    <span>STATS AND METRICS</span>
                    <span>SOCIAL MEDIA</span>
                    <span class="seo">SEO</span>
                    <span>MOBILE FRIENDLY</span>
                    <span>EMAIL AND CONTENT</span>
                </div>

            </div>
        </section>
        <!-- <section id="botonera2">
            <ul>
                <li><a href="#">PRESS</a></li>
                <li><a href="#">AWARDS</a></li>
                <li><a href="#">THE COMPANY</a></li>
                <li><a href="#">OUR TEAM</a></li>
                <li><a href="#">BLOG</a></li>
            </ul>
            <div class="botonera2-right">

                <span>IMPULSE YOUR PROJECT </span>
                <span>WORK WITH US</span>
            </div>


        </section>
       
        <section id="worq2">
            <div class="bg-worq2">

                <h1>WORQ</h1>
                <div class="separador"></div>
                <h2>FROM ROSARIO TO THE WORLD</h2>              


            </div>

        </section>
        -->

         <?php include_once './php/layout/footer.php'; ?>
    </body>
</html>
