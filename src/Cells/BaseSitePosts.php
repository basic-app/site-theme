<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSitePosts extends Cell
{
    public $posts = [];

    public $pager;

    public function mount(): void
    {
    }
}