<?php $this->applyTemplateHook("home-content--home-searsh-images", "before"); ?>
<div style="text-align:center">
    <?php $this->applyTemplateHook("home-content--home-searsh-images", "begin"); ?>
    <?php foreach ($config['images_home'] as $image) : ?>
        <a href="<?=$config['action_home_link']?>">
            <img src="<?= $this->asset("{$image}", false) ?>" alt="Preamar de cultura e arte" style="width: <?= $config['images_size_home'] ?>; margin-right: 10px;">
        </a>
    <?php endforeach ?>
    <?php $this->applyTemplateHook("home-content--home-searsh-images", "end"); ?>
</div>
<?php $this->applyTemplateHook("home-content--home-searsh-images", "after"); ?>