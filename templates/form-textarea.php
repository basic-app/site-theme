<?php

helper('form');

$attributes['class'] = $attributes['class'] ?? 'form-control';

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

echo form_textarea($attributes);
