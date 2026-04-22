<?php

$attributes['class'] = $attributes['class'] ?? 'alert alert-success';

?>
<div<?= stringify_attributes($attributes);?>><?= $slot;?></div>