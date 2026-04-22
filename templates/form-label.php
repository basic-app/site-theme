<?php

$attributes['class'] = $attributes['class'] ?? 'form-label';

?>
<label<?= stringify_attributes($attributes);?>><?= $slot;?></label>