</section>

<?php $this->applyTemplateHook('main-footer','before'); ?>
<footer id="main-footer">
    <?php $this->applyTemplateHook('main-footer','begin'); ?>
    <?php $this->applyTemplateHook('main-footer','end'); ?>
</footer>
<?php $this->applyTemplateHook('main-footer','after'); ?>

<?php $this->part('templates'); ?>
<?php $this->bodyEnd(); ?>
<iframe id="require-authentication" src="" style="display:none; position:fixed; top:0%; left:0%; width:100%; height:100%; z-index:100000"></iframe>

<?php if ($this->isEditable()): ?>
    <div id="editbox-human-crop" class="js-editbox" title="<?php \MapasCulturais\i::esc_attr_e("Recortar imagem");?>">
        <img id="human-crop-image"/>
    </div>
<?php endif; ?>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/655c005191e5c13bb5b2063b/1hfnm2g4p';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
</body>
</html>
