<?php include_once './php/layout/language.php'; ?>
<!DOCTYPE html>
<html lang=es>
<?php $title = _('Web Apps Rosario'); include_once './php/layout/head.php'; ?>
    <style>
        #page-loader {
    position: absolute;
    z-index: 1000000000;
    width: 100%;
    text-align: center;
    height: 100%;
    background-color: rgba(0, 0, 0, 1);
    -webkit-transition: opacity 1s cubic-bezier(0.23, 1, 0.32, 1);
    transition: opacity 1s cubic-bezier(0.23, 1, 0.32, 1);
}
#page-loader.hide{
    opacity: 0;
}

#page-loader img{
    position: absolute;
    left: 50%;
    top: 7%;
    /* margin-top: -16px; */
    margin-left: -16px;
    -webkit-animation: rotating 1s linear infinite;
    -moz-animation: rotating 1s linear infinite;
    -ms-animation: rotating 1s linear infinite;
    -o-animation: rotating 1s linear infinite;
    animation: rotating 1s linear infinite;
}


header{
    background:#040404;
    height: 30px;
    padding: 15px 35px 7px;
    color:white;
    font-size: 12px;
    color:#dbdbdb;
    letter-spacing: 2px;
    position: relative;
    display: table;
    width: 100%;
    box-sizing: border-box;
    transition-duration: 0.3s;
    transform: translateY(0);
}
header ul li {
    display: block;
    margin-right: 19px;
    float: left;
}
header ul li a{
    color:white;
    font-size: 12px;
    letter-spacing: 2px;
    position: relative;
    padding: 10px 4px;
    display: inline-block;
}

header ul li a:after{
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 1px;
    background: #FFF;
    content: '';
    opacity: 0;
    -webkit-transition: height 0.3s, opacity 0.3s, -webkit-transform 0.3s;
    -moz-transition: height 0.3s, opacity 0.3s, -moz-transform 0.3s;
    transition: height 0.3s, opacity 0.3s, transform 0.3s;
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    transform: translateY(-10px);
}

header ul li a:hover:after{
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    transform: translateY(-3px);
}
#logo-worq{
    margin-left: 5px;
    margin-right: 44px;
    float: left;
    display: inline-block;
    margin-top: -5px;
}

header > span{
    float: left;
    margin-top: 9px;
    color:white;
}
header ul{
    display: inline-block;
    margin-top: -2px;
    margin-left: 38px;
}

.header-left, .header-center ,.header-right{
    display: table-cell;
    vertical-align: top;
    width: 33%;
}

.header-left{
    padding-top: 8px;

    width: 29%;
}
.header-left a{
    color: white;
    display: inline-block;
}

.header-center{
    text-align: center;


    width: 42%;
}
.header-center span{


}
.header-right{
    font-weight: bold;
    font-size: 12px;
    padding-top: 8px;
    letter-spacing: 2px;
    text-align: right;
}
.header-right span{
    /* margin-left: 14px; */
}

.header-right b a{
    color:#6dc823;

    margin-left: 30px;
}

.header-right .idioma{
    margin-right: 30px;

}
.header-right .idioma a{color: white;}
.header-right .idioma a.active{color: #6DC823;}
.header-right .llamar{
    color: white;
}
.header-right .contacto{}

.press header, .the-company header{position: fixed;top: 0;z-index: 100000;}

#slide-home , #botonera-container{
    padding: 0;
    transition-duration: 0.4s;

}

#slide-home-bg{
    width: 100%;
    height: 899px;
    height: 87vh;
    /** background: url(../img/bg2.jpg) no-repeat 50%;*/
    background-size: cover;
    position: relative;
    margin-bottom: 0;
}
#slide-home-bg .img-bg{
    position: absolute;
    /* top: 0; */
    /* bottom: 0; */
    /* left: 0; */
    /* right: 0; */
    width: 100%;
    height: 100%;
}

.slide-home-arrow{
    position: absolute;    
    bottom: 63px;
    left: 50%;
    margin-left: -45px;
    display: inline-block;
    text-align: center;
    color: white;
    font-family: MuseoSans;
    font-size: 13px;
    font-weight: 400;
    opacity: 0.8;
    -webkit-animation: arrowScroll 3s infinite; /* Chrome, Safari, Opera */
    animation: arrowScroll 3s infinite;
}

@keyframes arrowScroll {
    0% {opacity: 0.5;}
    50% {opacity: 0.2;}
    100% {opacity: 0.5;}
}


.slide-notebook{}
.slide-notebook img{
    height: 100% !important;
    width: auto !important;
    right: 0 !important;
}
.contenedor-contenido{
    position: absolute;
    top: 24%;
    left: 74px;
    overflow: hidden;
    z-index: 0;
}

#slide-home{
    color:white;
    /* width: 60%; */
    overflow: hidden;
    transition: transform 0.5s;
}
#slide-home h1{
    font-family: 'MuseoSans';
    font-weight: 900;
    font-size: 170px;
    -webkit-margin-before: 0;
    -webkit-margin-after: 0;

    position: absolute;
    top: 50%;
    margin-top: -109px;
    left: 11%;
}
.separador{
    width: 140px;
    height: 4px;
    background: white;
    margin-bottom: 30px;
    margin-top: 40px;
}
#slide-home h2{
    font-family: 'MuseoSans';
    font-weight: 800;
    opacity: 1;
    font-size: 43px;    
    margin: 0;
    text-transform: uppercase;
    color:white;
    /* position: absolute; */
    top: 50%;
    /* margin-top: -54px; */
    left: 12%;
}

#slide-home p{
    opacity: 0;
}
#slide-home h2 span{
    font-weight: 300;
}
.slide{
    display: block;
    width: 100%;
    margin: 0;
    height: 86vh;
    position: relative;
}
.slide-text , .slide-action{
    width: 50%;
    display: block;
    vertical-align: middle;
    float: left;
    height: 87vh;
    position: relative;
}
.slide-text {
}
.slide-cta .slide-text{
    width: 100%;
    text-align: center;
    position: absolute;
    height: auto;
    top: 50%;
    margin-top: -141px;
}
.slide-action{
    position: relative;
}
.slide-action img{
    position: absolute;
    bottom: 0;
    right: 117px;
    width: 406px;
}

.cta-slide {

    margin-top: 62px;
}

#call-action1{
    /* position: absolute; */
    top: 50%;
    text-align: center;
    right: 116px;
    z-index: 10;
    margin-top: -71.5px;
}

    </style>
<body>
<?php include_once './php/layout/header.php'; ?>
<section id=botonera-container class=loaderAnim>
<ul id=botonera>
<li><a href=#pro-web data-ref-bt="Pro web blanco"><?php echo _("PROFESIONAL WEBSITES") ?></a></li>
<li><a href=#apps data-ref-bt="Apps blanco"><?php echo _('CUSTOM APPLICATIONS'); ?></a></li>
<li><a href=#servicios data-ref-bt="Web brand blanco"><?php echo _('WEB & BRAND CONSULTING'); ?></a></li>
<li><a href=#servicios2 data-ref-bt="Marketing blanco"><?php echo _('MARKETING & REPORTS'); ?></a></li>
</ul>
</section>
<section id=slide-home class=loaderAnim>
<div id=slide-home-bg>
<img class=img-bg src=img/bg2.jpg alt="WORQ"/>
<div class=flexslider>
<ul class=slides>
<li>
<div class=slide>
<div class=slide-text>
<h1>WORQ</h1>
</div>
<div class="slide-action slide-notebook">
<img src="img/slide-home1-min.png"/>
</div>
</div>
</li>
<li>
<div class='slide slide-cta'>
<div class=slide-text>
<h2 class><?php echo _('WE LAUNCH WEB PROJECTS <br/>  <span>WITH SUPERIOR QUALITY</span>'); ?></h2>
<div class=cta-slide>
<div class="bt-form mostrarContacto"><?php echo _('Get your website'); ?></div>
</div>
</div>
</div>
</li>
</ul>
</div>
<a href class=slide-home-arrow data-ref-bt="Scroll for more">
<div><?php echo _('Scroll for more'); ?></div>
<img src=img/flecha.png alt=WORQ />
</a>
</div>
</section>
<section id=home-mobile>
<h2><?php echo _('WE LAUNCH WEB PROJECTS <br/>  <span>WITH SUPERIOR QUALITY</span>'); ?></h2>
<ul class=slides-mobile>
<li><img src=img/slide-mobile1-min.png alt="WORQ - Sitios responsivos"/></li>
<li><img src=img/slide-mobile2-min.png alt="WORQ - Aplicaciones web"/></li>
</ul>
<h3><?php echo _('High Design Quality + Mobile Friendly
                & 100% Made to Measure'); ?></h3>
<a href=# class="getStarted mostrarContacto" data-ref-bt="Contacto Home slider"><?php echo _('Get started now'); ?></a>
</section>
<section id=pro-web class=loaderAnim>
<div class=bg-pro-web>
<h4><?php echo _("PRO<span>&#8776;</span>WEBSITES"); ?></h4>
<div class=propiedades>
<p><?php echo _('<font color="#68c023">100%</font> MADE TO MEASURE'); ?></p>
<p><?php echo _('HIGH <font color="#68c023">DESIGN</font> QUALITY'); ?></p>
<p><?php echo _('<font color="#68c023">MOBILE </font>FRIENDLY'); ?></p>
</div>
<div class=propiedades-mobile></div>
<div class=pro-web-container>
<div class=section-col>
<div class=section-text>
<h3>1 <span>&#8776;</span> <?php echo _("PLAN"); ?></h3>
<p><?php echo _("We construct a framework for your project to take<br/> shape within in terms of strategy, production and time."); ?></p>
</div>
<div class=section-text>
<h3>2 <span>&#8776;</span> <?php echo _('DESIGN'); ?></h3>
<p><?php echo _('We distill planning into purposeful designs that reflect<br/> your objectives and outline a visual aesthetic.'); ?></p>
</div>
</div>
<div class="section-col section-col2">
<div class=section-text>
<h3>3 <span>&#8776;</span> <?php echo _('DISCOVER'); ?></h3>
<p><?php echo _('We ask and listen toward a thorough understanding of<br/> your company, project, audience and objectives.'); ?></p>
</div>
<div class=section-text>
<h3>4 <span>&#8776;</span> <?php echo _('GROW'); ?></h3>
<p><?php echo _("We track, analyze and correct your project's growth<br/> through ongoing campaigns and retainers."); ?></p>
</div>
</div>
<a href=# class=mostrarContacto data-ref-bt="Contacto Prosites Home"><?php echo _('Get started now'); ?></a>
<div class=section-footer>
<p><?php echo _('Visual Design ~ Branding & Identity Design ~ Concept Development ~ Usability Testing & Research ~ Interaction Design ~ Information Architecture ~ Content Creation ~ Prototyping ~ Wireframing ~ Platform Design ~ Interface Design'); ?></p>
</div>
</div>
</div>
</section>
<section id=ultimos-proyectos>
<h3><span>&#8776;</span>&nbsp;<?php echo _('CASES'); ?>&nbsp;<span>&#8776;</span></h3>
<div class=fila-proyectos>
<a class=proyecto target=blank href=http://contadoresrosario.com data-ref-bt="Casos Contadores.com">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br/>
<span><?php echo _('VIEW CASE'); ?></span><br/>
<span class=site-description></span>
</div>
</div>
<img src="img/work-contadoresrosario.jpg"/>
</a>
<a class=proyecto target=blank href=http://gruposerval.com.ar data-ref-bt="Casos Serval">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-gruposerval.jpg"/>
</a>
<a class=proyecto target=blank href=http://falazairroo.com data-ref-bt="Casos Fala">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-falazairroo.jpg"/>
</a>
<a class=proyecto target=blank href=http://fourtech.com.ar data-ref-bt="Casos Fourtech">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-fourtech.jpg"/>
</a>
<a class=proyecto target=blank href=http://monitoreoagricola.com.ar data-ref-bt="Casos sima">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-sima.jpg"/>
</a>
<a class=proyecto target=blank href=http://conversarte.com data-ref-bt="Casos conversarte">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-conversarte.jpg"/>
</a>
<a class=proyecto target=blank href=http://nivelempresarial.com.ar data-ref-bt="Casos nivel empresarial">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-nivelempresarial.jpg"/>
</a>
<a class=proyecto target=blank href=http://desarrollosorfe.com data-ref-bt="Casos orfe">
<div class=proyecto-over>
<div class=proyecto-over-contenido>
<span>&#8776;</span><br>
<span><?php echo _('VIEW CASE'); ?></span>
</div>
</div>
<img src="img/work-orfe.jpg"/>
</a>
</div>
</section>
<section id=apps>
<div class=apps-contenedor>
<div class=imagen-app1>
<a href=http://taxistavirtual.com title=TaxistaVirtual.com data-ref-bt="Link taxista img1">
<img src=img/imagen_taxista_virtual1-min.png alt="TaxistaVirtual"/>
</a>
</div>
<div class=imagen-app3>
<a href=http://taxistavirtual.com title=TaxistaVirtual.com data-ref-bt="Link taxista img3">
<img src=img/imagen-taxista-mobile-min.png alt="TaxistaVirtual"/>
</a>
</div>
<div class=contenido-apps>
<h3><?php echo _('<span>We make</span> APPS'); ?></h3>
<div class=separador></div>
<p class=bring-ideas><?php echo _('bring <b>ideas</b> to <b>reality</b>'); ?></p>
<a href=# class="mostrarContacto get-app get-app-mobile" data-ref-bt="Contacto taxista Home mobile"><?php echo _("Get your APP"); ?></a>
<div class=section-col>
<div class=section-text>
<p> <?php echo _(" We're a Startup Studio. A company that builds companies.<br/>
                                Sharing people, resources and technologies to accelerate<br/>
                                our successes. We make the complex simple through<br/>
                                digital strategy and design.<br/>
                                <br/>
                                We create products, platforms and campaigns that move<br/>
                                products as well as culture."); ?></p>
</div>
<div class=text-separator></div>
<div class=section-text style=padding-left:45px;box-sizing:border-box>
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
<a href=# class="mostrarContacto get-app get-app-pc" data-ref-bt="Contacto taxista home"><?php echo _("Get your APP"); ?></a>
<div class=section-footer>
<p><?php echo _("Digital Strategy -Website Design - User Interface Design<br/>
                            -User Experience Design- Social Campaigns-eCommerce / Retail -Content Development-Digital Installations-Web Apps / Products-Mobile Design"); ?></p>
</div>
</div>
<div class=imagen-app2>
<a href=http://taxistavirtual.com title=TaxistaVirtual.com>
<img src=img/imagen_taxista_virtual2-min.png alt="TaxistaVirtual"/>
</a>
</div>
</div>
</section>
<section id=servicios>
<div class=contenido-servicios>
<h3><?php echo _("WEB<span>&</span>BRAND<span> CONSULTING</span>"); ?></h3>
<div class=nuestros-servicios>
<span><?php echo _("WEB PERFORMANCE ANALYSIS&nbsp;&nbsp;|&nbsp;&nbsp;OPTIMIZE RESULTS&nbsp;&nbsp;|&nbsp;&nbsp;NAMING ADVICE"); ?></span>
</div>
<h4><?php echo _("The <b>boost</b> that your<br/>
                    project <b>need</b>"); ?></h4>
<p><?php echo _("At WORQ we develop strategies to put your business to the top.<br/>
                    We are a design and innovation consultancy agency that helps bring innovative<br/>
                    products to market. Helping clients to develop product strategies ranging from<br/> simple product refresh to big innovations."); ?></p>
<a href=# class=mostrarContacto data-ref-bt="Contacto web brand home"><?php echo _('Get started now'); ?></a>
</div>
</section>
<section id=servicios2>
<div class=contenido-servicios>
<h3><?php echo _("ONLINE MARKETING <br/><span>&</span>REPORTS"); ?></h3>
<div class=nuestros-servicios>
<span class=nuestros-servicios-desktop><?php echo _("STATS AND METRICS&nbsp;&nbsp;|&nbsp;&nbsp;SOCIAL MEDIA&nbsp;&nbsp;|&nbsp;&nbsp;SEO&nbsp;&nbsp;|&nbsp;&nbsp;MOBILE FRIENDLY&nbsp;&nbsp;|&nbsp;&nbsp;EMAIL AND CONTENT"); ?></span>
<span class=nuestros-servicios-mobile><?php echo _("STATS AND METRICS, SOCIAL MEDIA, SEO, MOBILE FRIENDLY, EMAIL AND CONTENT"); ?></span>
</div>
<a href=# class=mostrarContacto data-ref-bt="Contacto online marketing home"><?php echo _('Get started now!'); ?></a>
</div>
</section>
<?php include_once './php/layout/footer.php'; ?>
</body>
</html>