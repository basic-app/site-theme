<?php

if (!empty($attributes['id']))
{
    $labelAttributes['for'] = $attributes['id'];
}

$groupAttributes['slot'] = view_cell('Site::formInput', [
    'attributes' => $attributes,
    'error' => $error,
    'label' => $label
]);

$groupAttributes['label'] = $label;

$groupAttributes['labelAttributes'] = $labelAttributes;

$groupAttributes['error'] = $error;

$groupAttributes['errorAttributes'] = $errorAttributes;

echo view_cell('Site::formInput', $groupAttributes);