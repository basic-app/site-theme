<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

class SiteAlertWarning extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/alert-warning.php';

    public $slot;

    public $attributes = [];
}