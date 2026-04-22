<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteTheme\Cells;

use BasicApp\Site\Interfaces\SiteThemeCell;
use BasicApp\Theme\Cells\BaseTheme;

class Site extends BaseTheme implements SiteThemeCell
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

    // Theme

    public function formGroup(array $params = []) : string
    {
        return view_cell('SiteFormGroup', $params);
    }

    public function formInput(array $params = []) : string
    {
        return view_cell('SiteFormInput', $params);
    }

    public function formInputGroup(array $params = []) : string
    {
        return view_cell('SiteFormInputGroup', $params);
    }

    public function formPassword(array $params = []) : string
    {
        return view_cell('SiteFormPassword', $params);
    }

    public function formPasswordGroup(array $params = []) : string
    {
        return view_cell('SiteFormPasswordGroup', $params);
    }

    public function formUpload(array $params = []) : string
    {
        return view_cell('SiteFormUpload', $params);
    }

    public function formUploadGroup(array $params = []) : string
    {
        return view_cell('SiteFormUploadGroup', $params);
    }

    public function formTextarea(array $params = []) : string
    {
        return view_cell('SiteFormTextarea', $params);
    }

    public function formTextareaGroup(array $params = []) : string
    {
        return view_cell('SiteFormTextareaGroup', $params);
    }

    public function formDropdown(array $params = []) : string
    {
        return view_cell('SiteFormDropdown', $params);
    }

    public function formDropdownGroup(array $params = []) : string
    {
        return view_cell('SiteFormDropdownGroup', $params);
    }

    public function formMultiselect(array $params = []) : string
    {
        return view_cell('SiteFormMultiselect', $params);
    }

    public function formMultiselectGroup(array $params = []) : string
    {
        return view_cell('SiteFormMultiselectGroup', $params);
    }

    public function formCheckbox(array $params = []) : string
    {
        return view_cell('SiteFormCheckbox', $params);
    }

    public function formCheckboxGroup(array $params = []) : string
    {
        return view_cell('SiteFormCheckboxGroup', $params);
    }

    public function formRadio(array $params = []) : string
    {
        return view_cell('SiteFormRadio', $params);
    }

    public function formLabel(array $params = []) : string
    {
        return view_cell('SiteFormLabel', $params);
    }

    public function formError(array $params = []) : string
    {
        return view_cell('SiteFormError', $params);
    }

    public function formSubmit(array $params = []) : string
    {
        return view_cell('SiteFormSubmit', $params);
    }

    public function formReset(array $params = []) : string
    {
        return view_cell('SiteFormReset', $params);
    }

    public function formButton(array $params = []) : string
    {
        return view_cell('SiteFormButton', $params);
    }

    public function alertPrimary(array $params = []) : string
    {
        return view_cell('SiteAlertPrimary', $params);
    }

    public function alertSecondary(array $params = []) : string
    {
        return view_cell('SiteAlertSecondary', $params);
    }

    public function alertSuccess(array $params = []) : string
    {
        return view_cell('SiteAlertSuccess', $params);
    }

    public function alertDanger(array $params = []) : string
    {
        return view_cell('SiteAlertDanger', $params);
    }

    public function alertWarning(array $params = []) : string
    {
        return view_cell('SiteAlertWarning', $params);
    }

    public function alertInfo(array $params = []) : string
    {
        return view_cell('SiteAlertInfo', $params);
    }

    public function alertLight(array $params = []) : string
    {
        return view_cell('SiteAlertLight', $params);
    }

    public function alertDark(array $params = []) : string
    {
        return view_cell('SiteAlertDark', $params);
    }
} 