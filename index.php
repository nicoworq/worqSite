<?php include_once './php/layout/language.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <!--test -->
    <?php include_once './php/layout/head.php'; ?>
    <body>
        <?php include_once './php/layout/header.php'; ?>
        <section id="botonera-container" class="loaderAnim"> 
            <ul id="botonera">
                <li><a href="#pro-web" data-ref-bt="Pro web blanco"><?php echo _("PROFESIONAL WEBSITES") ?></a></li>
                <li><a href="#apps" data-ref-bt="Apps blanco"><?php echo _('CUSTOM APPLICATIONS'); ?></a></li>
                <li><a href="#servicios" data-ref-bt="Web brand blanco"><?php echo _('WEB & BRAND CONSULTING'); ?></a></li>
                <li><a href="#servicios2" data-ref-bt="Marketing blanco"><?php echo _('MARKETING & REPORTS'); ?></a></li>
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
                                <div class="slide-action slide-notebook">
                                    <img src="img/slide-home1-min.png"/>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class='slide slide-cta'>
                                <div class="slide-text">
                                    <h2 class=""><?php echo _('WE LAUNCH WEB PROJECTS <br/>  <span>WITH SUPERIOR QUALITY</span>'); ?></h2>   
                                    <div class="cta-slide">                                        
                                        <div class="bt-form mostrarContacto"><?php echo _('Get your website'); ?></div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <a href="" class="slide-home-arrow" data-ref-bt="Scroll for more">
                    <div><?php echo _('Scroll for more'); ?></div>
                    <img src="img/flecha.png" alt="WORQ" />
                </a>


            </div>
        </section>
        <section id="home-mobile">
            <h2><?php echo _('WE LAUNCH WEB PROJECTS <br/>  <span>WITH SUPERIOR QUALITY</span>'); ?></h2>  

            <ul class="slides-mobile">
                <li><img src="img/slide-mobile1-min.png" alt="WORQ - Sitios responsivos"/></li>
                <li><img src="img/slide-mobile2-min.png" alt="WORQ - Aplicaciones web"/></li>
            </ul>
            <h3><?php echo _('High Design Quality + Mobile Friendly
                & 100% Made to Measure'); ?></h3>
            <a href="#" class="getStarted mostrarContacto" data-ref-bt="Contacto Home slider"><?php echo _('Get started now'); ?></a>
        </section>

        <section id="pro-web" class="loaderAnim">
            <div class="bg-pro-web">
                <h4><?php echo _("PRO<span>&#8776;</span>WEBSITES"); ?></h4>
                <div class="propiedades">
                    <p><?php echo _('<font color="#68c023">100%</font> MADE TO MEASURE'); ?></p>  
                    <p><?php echo _('HIGH <font color="#68c023">DESIGN</font> QUALITY'); ?></p>
                    <p><?php echo _('<font color="#68c023">MOBILE </font>FRIENDLY'); ?></p>                    
                </div>
                <div class="propiedades-mobile"></div>
                <div class="pro-web-container">
                    <div class="section-col">
                        <div class="section-text">
                            <h3>1 <span>&#8776;</span> <?php echo _("PLAN"); ?></h3>
                            <p><?php echo _("We construct a framework for your project to take<br/> shape within in terms of strategy, production and time."); ?></p>
                        </div>
                        <div class="section-text">
                            <h3>2 <span>&#8776;</span> <?php echo _('DESIGN'); ?></h3>
                            <p><?php echo _('We distill planning into purposeful designs that reflect<br/> your objectives and outline a visual aesthetic.'); ?></p>
                        </div>


                    </div>
                    <div class="section-col section-col2">
                        <div class="section-text">
                            <h3>3 <span>&#8776;</span> <?php echo _('DISCOVER'); ?></h3>
                            <p><?php echo _('We ask and listen toward a thorough understanding of<br/> your company, project, audience and objectives.'); ?></p>
                        </div>
                        <div class="section-text">
                            <h3>4 <span>&#8776;</span> <?php echo _('GROW'); ?></h3>
                            <p><?php echo _("We track, analyze and correct your project's growth<br/> through ongoing campaigns and retainers."); ?></p>
                        </div>

                    </div>

                    <a href ="#" class="mostrarContacto" data-ref-bt="Contacto Prosites Home"><?php echo _('Get started now'); ?></a>
                    <div class="section-footer">
                        <p><?php echo _('Visual Design ~ Branding & Identity Design ~ Concept Development ~ Usability Testing & Research ~ Interaction Design ~ Information Architecture ~ Content Creation ~ Prototyping ~ Wireframing ~ Platform Design ~ Interface Design'); ?></p>
                    </div>
                </div>



            </div>
        </section>
        <section id="ultimos-proyectos" >
            <h3><span>&#8776;</span>&nbsp;<?php echo _('CASES'); ?>&nbsp;<span>&#8776;</span></h3>

            <div class="fila-proyectos">

                <a class="proyecto" target="blank" href="http://contadoresrosario.com" data-ref-bt="Casos Contadores.com">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br/>
                            <span><?php echo _('VIEW CASE'); ?></span><br/>
                            <span class="site-description"></span>
                        </div>

                    </div>
                    <img src="img/work-contadoresrosario.jpg"/>
                </a>

                <a class="proyecto" target="blank" href="http://gruposerval.com.ar" data-ref-bt="Casos Serval">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>     
                    <img src="img/work-gruposerval.jpg"/>
                </a>

                <a class="proyecto" target="blank" href="http://falazairroo.com" data-ref-bt="Casos Fala">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>     
                    <img src="img/work-falazairroo.jpg"/>
                </a>

                <a class="proyecto" target="blank" href="http://fourtech.com.ar" data-ref-bt="Casos Fourtech">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>   
                    <img src="img/work-fourtech.jpg"/>
                </a>
             
                
                <a class="proyecto" target="blank" href="http://monitoreoagricola.com.ar" data-ref-bt="Casos sima">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>   
                    <img src="img/work-sima.jpg"/>
                </a>
                <a class="proyecto" target="blank" href="http://conversarte.com" data-ref-bt="Casos conversarte">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>   
                    <img src="img/work-conversarte.jpg"/>
                </a>
                <a class="proyecto" target="blank" href="http://nivelempresarial.com.ar" data-ref-bt="Casos nivel empresarial">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>   
                    <img src="img/work-nivelempresarial.jpg"/>
                </a>
                <a class="proyecto" target="blank" href="http://desarrollosorfe.com" data-ref-bt="Casos orfe">
                    <div class="proyecto-over">
                        <div class="proyecto-over-contenido">
                            <span>&#8776;</span><br>
                            <span><?php echo _('VIEW CASE'); ?></span>
                        </div>
                    </div>   
                    <img src="img/work-orfe.jpg"/>
                </a>

            </div>
            <!-- 
                       <a href="#" class="ver-mas"><?php echo _('View More'); ?></a>
           
                      <div class="bg-separador"></div>-->

        </section>
        <section id="apps">
            <div class="apps-contenedor">
                <div class="imagen-app1">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com" data-ref-bt="Link taxista img1">
                        <img src="img/imagen_taxista_virtual1-min.png" alt="TaxistaVirtual"/>
                    </a>
                </div>
                <div class="imagen-app3">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com" data-ref-bt="Link taxista img3">
                        <img src="img/imagen-taxista-mobile-min.png" alt="TaxistaVirtual"/>
                    </a>
                </div>
                <div class="contenido-apps">
                    <h3><?php echo _('<span>We make</span> APPS'); ?></h3>
                    <div class="separador"></div>                    
                    <p class="bring-ideas"><?php echo _('bring <b>ideas</b> to <b>reality</b>'); ?></p>

                    <a href="#" class="mostrarContacto get-app get-app-mobile" data-ref-bt="Contacto taxista Home mobile"><?php echo _("Get your APP"); ?></a>
                    <div class="section-col">
                        <div class="section-text">
                            <p> <?php echo _(" We're a Startup Studio. A company that builds companies.<br/>
                                Sharing people, resources and technologies to accelerate<br/>
                                our successes. We make the complex simple through<br/>
                                digital strategy and design.<br/>
                                <br/>
                                We create products, platforms and campaigns that move<br/>
                                products as well as culture."); ?></p>
                        </div>
                        <div class="text-separator"></div>
                        <div class="section-text" style="padding-left: 45px;box-sizing: border-box;">
                            <p>
                                <?php echo _("Our passion for design goes beyond beautiful imagery<br/>
                                and into the mind of the consumer, where we believe<br/>
                                good design should solve problems and position a<br/>
                                brand so it stands out as well as stands for something.<br/>
                                <br/>

                                We design identity systems, digital platforms and brand<br/> campaigns that engage today's consumer."); ?> 

                            </p>

                        </div>
                    </div>
                    <a href="#" class="mostrarContacto get-app get-app-pc" data-ref-bt="Contacto taxista home"><?php echo _("Get your APP"); ?></a>
                    <div class="section-footer">
                        <p><?php echo _("Digital Strategy -Website Design - User Interface Design<br/>
                            -User Experience Design- Social Campaigns-eCommerce / Retail -Content Development-Digital Installations-Web Apps / Products-Mobile Design"); ?></p>
                    </div>
                </div>

                <div class="imagen-app2">
                    <a href="http://taxistavirtual.com" title="TaxistaVirtual.com">
                        <img src="img/imagen_taxista_virtual2-min.png" alt="TaxistaVirtual"/>
                    </a>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="contenido-servicios">
                <h3><?php echo _("WEB<span>&</span>BRAND<span> CONSULTING</span>"); ?></h3>
                <div class="nuestros-servicios">
                    <span><?php echo _("WEB PERFORMANCE ANALYSIS&nbsp;&nbsp;|&nbsp;&nbsp;OPTIMIZE RESULTS&nbsp;&nbsp;|&nbsp;&nbsp;NAMING ADVICE"); ?></span>
                </div>
                <h4><?php echo _("The <b>boost</b> that your<br/>
                    project <b>need</b>"); ?></h4>
                <p><?php echo _("At WORQ we develop strategies to put your business to the top.<br/>
                    We are a design and innovation consultancy agency that helps bring innovative<br/>
                    products to market. Helping clients to develop product strategies ranging from<br/> simple product refresh to big innovations."); ?></p>

                <a href="#" class="mostrarContacto" data-ref-bt="Contacto web brand home"><?php echo _('Get started now'); ?></a>
            </div>
        </section>
        <section id="servicios2">
            <div class="contenido-servicios">
                <h3><?php echo _("ONLINE MARKETING <br/><span>&</span>REPORTS"); ?></h3>
                <div class="nuestros-servicios">
                    <span class="nuestros-servicios-desktop"><?php echo _("STATS AND METRICS&nbsp;&nbsp;|&nbsp;&nbsp;SOCIAL MEDIA&nbsp;&nbsp;|&nbsp;&nbsp;SEO&nbsp;&nbsp;|&nbsp;&nbsp;MOBILE FRIENDLY&nbsp;&nbsp;|&nbsp;&nbsp;EMAIL AND CONTENT"); ?></span>
                    <span class="nuestros-servicios-mobile"><?php echo _("STATS AND METRICS, SOCIAL MEDIA, SEO, MOBILE FRIENDLY, EMAIL AND CONTENT"); ?></span>


                </div>
                <a href="#" class="mostrarContacto" data-ref-bt="Contacto online marketing home"><?php echo _('Get started now!'); ?></a>

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
