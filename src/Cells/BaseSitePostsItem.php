<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSitePostsItem extends Cell
{
    public $title;
    
    public $description;
    
    public $created;
}