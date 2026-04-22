<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-warning';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>