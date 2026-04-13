<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSitePost extends Cell
{
    public $title;
    
    public $description;
    
    public $authorName;
    
    public $authorUrl;
    
    public $createdDate;
}