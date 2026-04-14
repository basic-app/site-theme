<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteFooter extends Cell
{
    public $copyright = 'Copyright &copy; Your Website';
    
    public $menu = [];

    public function mount(): void
    {
    }
}