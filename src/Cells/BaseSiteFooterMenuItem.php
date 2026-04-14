<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteFooterMenuItem extends Cell
{
    public $item_enabled;

    public $item_url;

    public $item_name;

    public $item_uid;

    public $item_html_class;

    public $item_active;
}