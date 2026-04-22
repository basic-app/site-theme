<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-light';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>