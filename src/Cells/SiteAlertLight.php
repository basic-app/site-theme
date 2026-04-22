<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

class SiteAlertLight extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme/templates/alert-light.php';

    public $slot;

    public $attributes = [];
}