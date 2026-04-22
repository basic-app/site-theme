<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\Theme\Cells\BaseFormSubmit;

class SiteFormSubmit extends BaseFormSubmit
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/form-submit.php';
}