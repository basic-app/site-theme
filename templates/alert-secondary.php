<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-secondary';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>