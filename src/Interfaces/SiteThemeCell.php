<?php

namespace BasicApp\SiteTheme\Interfaces;

interface SiteThemeCell
{
    public function layout(array $params = []) : string;
    public function page(array $params = []) : string;
    public function header(array $params = []) : string;
    public function footer(array $params = []) : string;
    public function footerMenuItem(array $params = []) : string;
    public function nav(array $params = []) : string;
    public function card(array $params = []) : string;
}