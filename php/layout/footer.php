<section id="suscribir">
    <div id="suscribir-progress">
        <img src="img/loader.svg" alt="Progreso"/>
    </div>
    <div class="contenido-suscribir">
        <h3><?php echo _("SUBSCRIBE to the latest<br/>
            <strong>technology trends</strong>"); ?>
        </h3>
        <form id="form-suscribir" action="php/ajax-suscribir.php">
            <input type="text" name="email" placeholder="<?php echo _("Enter your Email"); ?>"/>
            <input type="submit" value="<?php echo _("Subscribe"); ?>"/>
            <div id="form-suscribir-ok"><?php echo _('Thanks for your subscription!') ?></div>
        </form>
    </div>
</section>
<footer>          
    <span class="float-l"><?php echo _("WORQ &COPY; SINCE 2012 | ALL RIGHTS RESERVED. ROSARIO, ARGENTINA"); ?></span>
    <span class="float-r"><?php echo _("DEVELOPED BY <b>WORQ</b>"); ?></span>


</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
<script src="js/smooth.js"></script>