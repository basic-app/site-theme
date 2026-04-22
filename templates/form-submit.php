<?php

helper('form');

$attributes['class'] = $attributes['class'] ?? 'btn btn-primary';

echo form_submit($attributes);
