<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteFooterMenuItem extends Cell
{
    public $url;

    public $icon;

    public $name;
}