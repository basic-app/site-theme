<?php

helper('form');

$attributes['class'] = $attributes['class'] ?? 'btn btn-secondary';

echo form_reset($attributes);