<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\SiteTheme\Interfaces\SiteThemeCell;

class Site implements SiteThemeCell
{
	public function layout(array $params = []) : string
	{
        return view_cell('SiteLayout', $params);
    }
	
	public function page(array $params = []) : string
	{
        return view_cell('SitePage', $params);
	}

	public function header(array $params = []) : string
	{
        return view_cell('SiteHeader', $params);
	}

	public function footer(array $params = []) : string
	{
        return view_cell('SiteFooter', $params);
	}

    public function footerMenuItem(array $params = []) : string
    {
        return view_cell('SiteFooterMenuItem', $params);
    }

	public function nav(array $params = []) : string
	{
        return view_cell('SiteNav', $params);
	}

    public function card(array $params = []) : string
    {
        return view_cell('SiteCard', $params);
    }
} 