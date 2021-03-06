<section id="suscribir">
    <div id="suscribir-progress">
        <img src="img/loader.png" alt="Progreso"/>
    </div>
    <div class="contenido-suscribir">

        <div class="contenido-footer">
            <h1 class="logo-footer-mobile">WORQ<span>TM</span></h1>
            <h3><?php echo _("SUBSCRIBE to the latest<br/>
            <strong>technology trends</strong>"); ?>
            </h3>
            <div class="contenedor-suscribir">
                <form id="form-suscribir" action="php/ajax-suscribir.php">
                    <input type="text" name="email" placeholder="<?php echo _("Enter your Email"); ?>"/>
                    <input type="submit" value="<?php echo _("Subscribe"); ?>" data-ref-bt="Suscribir footer"/>
                    <div id="form-suscribir-ok"><?php echo _('Thanks for your subscription!') ?></div>
                </form>
            </div>

        </div>
    </div>
</section>
<footer>          
    <span class="float-l"><?php echo _("WORQ &COPY; BOOSTING PROYECTS SINCE 2012 | ALL RIGHTS RESERVED. ROSARIO, ARGENTINA"); ?></span>
    <span class="float-r"><?php echo _("DEVELOPED BY <b>WORQ</b>"); ?></span>


</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/plugins.min.js"></script>
<script src="js/scripts.min.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-34333071-2', 'auto');
    ga('send', 'pageview');

    jQuery(function () {
        jQuery.scrollDepth();
    });
</script>
<!-- Hotjar Tracking Code for worq.com.ar -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:79603,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>