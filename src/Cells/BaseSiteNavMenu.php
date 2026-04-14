<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteNavMenu extends Cell
{
    public $activeItem;

    public $items = [];

    public function mount(): void
    {
        if ($this->activeItem)
        {
            foreach($this->items as $key => $item)
            {
                if (!empty($item['item_uid']) && ($this->activeItem == $item['item_uid']))
                {
                    $this->items[$key]['item_active'] = true;
                }
            }
        }
    }
}