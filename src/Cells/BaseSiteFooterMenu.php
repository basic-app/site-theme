<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteFooterMenu extends Cell
{
    public $items = [];

    public function mount(): void
    {
    }
}