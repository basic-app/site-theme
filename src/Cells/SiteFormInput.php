<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\Theme\Cells\BaseFormInput;

class SiteFormInput extends BaseFormInput
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/form-input.php';
}