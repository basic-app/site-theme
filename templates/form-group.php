<?php

$attributes['class'] = $attributes['class'] ?? 'mb-2';

?>
<div<?= stringify_attributes($attributes);?>>
    <?php if($label):?>
        <?= view_cell('Site::formLabel', [
            'slot' => $label,
            'attributes' => $labelAttributes
        ]);?>
    <?php endif;?>
    <?= $slot;?>
    <?php if($error):?>
        <?= view_cell('Site::formError', [
            'slot' => $error,
            'attributes' => $errorAttributes
        ]);?>
    <?php endif;?>
</div>