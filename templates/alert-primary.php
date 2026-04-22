<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-primary';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>