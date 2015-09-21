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
                    <input type="submit" value="<?php echo _("Subscribe"); ?>"/>
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
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>

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

</script>