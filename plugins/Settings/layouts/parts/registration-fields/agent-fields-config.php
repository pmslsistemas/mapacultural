<?php

use MapasCulturais\i;

$segmento_options = [];
$segmento = $app->getRegisteredTaxonomyBySlug('segmento');
foreach ($agent_fields as $field) {
    if ($field == "@terms:segmento") {
        $segmento_options[] = $field;
    }
}
?>
<div ng-if="field.config.entityField == '@terms:segmento'">
    <?php foreach ($segmento_options as $field_name) : ?>
        <div ng-if='field.config.entityField === "<?= $field_name ?>"'>
            <?php i::_e("Informe os termos que estarão disponíveis para seleção.") ?>
            <textarea ng-model="field.fieldOptions" ng-init='field.fieldOptions = field.fieldOptions || data.taxonomies.segmento.terms.join("\n")' placeholder="<?php \MapasCulturais\i::esc_attr_e("Opções de seleção"); ?>"></textarea>
        </div>
    <?php endforeach ?>
</div>