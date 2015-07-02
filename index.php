<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$locale = 'es_AR';

putenv("LANG=" . $locale);
setlocale(LC_ALL, $locale);


$domain = 'es';
bindtextdomain($domain, 'locale');
bind_textdomain_codeset($domain, 'UTF-8');

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
                    <span><font color="#68c023">100%</font> MADE TO MEASURE</span>    
                    <span>HIGH <font color="#68c023">DESIGN</font> QUALITY</span>    
                    <span>POWERFULL <font color="#68c023">&</font> STRONG</span>                    
                </div>
                <div class="section-col">
                    <div class="section-text">
                        <h3>PLAN</h3>
                        <p>We construct a framework for your project to take<br/> shape within in terms of strategy, production and time.</p>
                    </div>
                    <div class="section-text">
                        <h3>DESIGN</h3>
                        <p>We distill planning into purposeful designs that reflect<br/> your objectives and outline a visual aesthetic.</p>
                    </div>


                </div>
                <div class="section-col section-col2">
                    <div class="section-text">
                        <h3>DISCOVER</h3>
                        <p>We ask and listen toward a thorough understanding of<br/> your company, project, audience and objectives.</p>
                    </div>
                    <div class="section-text">
                        <h3>GROW</h3>
                        <p>We track, analyze and correct your project’s growth<br/> through ongoing campaigns and retainers.</p>
                    </div>

                </div>

                <a href ="#" class="mostrarContacto">Get your Website</a>
                <div class="section-footer">
                    <p>Visual Design ~ Branding & Identity Design ~ Concept Development ~ Usability Testing & Research ~ Interaction Design ~ Information Architecture ~ Content Creation ~ Prototyping ~ Wireframing ~ Platform Design ~ Interface Design</p> 
                </div>
            </div>
        </section>

        <section id="apps">
            <div class="apps-contenedor">

                <div class="imagen-app1">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com">
                        <img src="img/imagen_taxista_virtual1.png" alt="TaxistaVirtual"/>
                    </a>
                </div>
                <div class="contenido-apps">
                    <h3><?php echo _('<span>We make</span> APPS'); ?></h3>
                    <div class="separador"></div>                    
                    <p>bring <b>ideas</b> to <b>reality</b></p>
                    <div class="section-col">
                        <div class="section-text">
                            <p>We're a Startup Studio. A company that builds companies.<br/>
                                Sharing people, resources and technologies to accelerate<br/>
                                our successes. We make the complex simple through<br/>
                                digital strategy and design.<br/>
                                <br/>
                                We create products, platforms and campaigns that move<br/>
                                products as well as culture.</p>
                        </div>
                        <div class="section-text">
                            <p>
                                Our passion for design goes beyond beautiful imagery<br/>
                                and into the mind of the consumer, where we believe<br/>
                                good design should solve problems and position a<br/>
                                brand so it stands out as well as stands for something.<br/>
                                <br/>

                                We design identity systems, digital platforms and brand<br/> campaigns that engage today’s consumer. 

                            </p>

                        </div>
                    </div>
                    <a href="#" class="mostrarContacto">Get your APP!</a>
                    <div class="section-footer">
                        <p>Digital Strategy -Website Design - User Interface Design<br/>
                            -User Experience Design- Social Campaigns-eCommerce / Retail -Content Development-Digital Installations-Web Apps / Products-Mobile Design</p>
                    </div>
                </div>

                <div class="imagen-app2">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com">
                        <img src="img/imagen_taxista_virtual2.png" alt="TaxistaVirtual"/>
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
                <h4>The <b>boost</b> that your<br/>
                    project <b>need</b></h4>
                <p>At work we develop strategies to put your business to the top.<br/>
                    We are a design and innovation consultancy agency that helps bring innovative<br/>
                    products to market. Helping clients to develop product strategies ranging from<br/> simple product refresh to big innovations.</p>

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
