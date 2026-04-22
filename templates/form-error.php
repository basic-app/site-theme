<?php

$attributes['class'] = $attributes['class'] ?? 'invalid-feedback';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>