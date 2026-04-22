<?php

helper('form');

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

echo form_checkbox($attributes);
