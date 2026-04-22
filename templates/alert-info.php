<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-info';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>