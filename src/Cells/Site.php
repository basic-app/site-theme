<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\SiteTheme\Interfaces\SiteThemeCell;
use BasicApp\Theme\Cells\Theme;

class Site extends Theme implements SiteThemeCell
{
	public function layout(array $params = []) : string
	{
        return view_cell('SiteLayout', $params);
    }

	public function header(array $params = []) : string
	{
        return view_cell('SiteHeader', $params);
	}

	public function footer(array $params = []) : string
	{
        return view_cell('SiteFooter', $params);
	}

    public function footerMenu(array $params = []) : string
    {
        return view_cell('SiteFooterMenu', $params);
    }

    public function footerMenuItem(array $params = []) : string
    {
        return view_cell('SiteFooterMenuItem', $params);
    }

	public function nav(array $params = []) : string
	{
        return view_cell('SiteNav', $params);
	}

    public function navMenu(array $params = []) : string
    {
        return view_cell('SiteNavMenu', $params);
    }

    public function navMenuItem(array $params = []) : string
    {
        return view_cell('SiteNavMenuItem', $params);
    }

    public function card(array $params = []) : string
    {
        return view_cell('SiteCard', $params);
    }

    public function pager(array $params = []) : string
    {
        return view_cell('SitePager', $params);
    }

    public function post(array $params = []) : string
    {
        return view_cell('SitePost', $params);
    }

    public function posts(array $params = []) : string
    {
        return view_cell('SitePosts', $params);
    }

    public function postsItem(array $params = []) : string
    {
        return view_cell('SitePostsItem', $params);
    }
} 