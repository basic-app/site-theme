<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-dark';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>