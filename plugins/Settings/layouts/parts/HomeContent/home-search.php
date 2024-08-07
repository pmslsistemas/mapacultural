<?php $this->applyTemplateHook("home-content--home-searsh", "before"); ?>
<div class="box">
    <?php $this->applyTemplateHook("home-content--home-searsh", "begin"); ?>
    <div>
        <?php if($config['title_home']):?>
            <?php  $this->part('HomeContent/home-searsh--title', ["config" => $config]);?>
        <?php endif ?>
    </div>
    <div>
        <?php if($config['images_home']):?>
            <?php  $this->part('HomeContent/home-searsh--images', ["config" => $config]);?>
        <?php endif ?>
    </div>
    <div>
        <?php if($config['text_home']):?>
            <?php  $this->part('HomeContent/home-searsh--text', ["config" => $config]);?>
        <?php endif ?>
   </div>
    
   <div>
        <?php if($config['action_home_text']):?>
            <?php  $this->part('HomeContent/home-searsh--actions', ["config" => $config]);?>
        <?php endif ?>
   </div>
   <?php $this->applyTemplateHook("home-content--home-searsh", "end"); ?>
</div>
<?php $this->applyTemplateHook("home-content--home-searsh", "after"); ?>