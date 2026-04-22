<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

class SiteAlertDark extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/alert-dark.php';

    public $slot;

    public $attributes = [];
}