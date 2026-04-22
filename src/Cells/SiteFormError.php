<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\Theme\Cells\BaseFormError;

class SiteFormError extends BaseFormError
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/form-error.php';
}