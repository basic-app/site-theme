<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-danger';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>