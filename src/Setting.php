<?php

namespace D4T\Admin\UI\DcatAdminlte;

use Dcat\Admin\Enums\LayoutType;
use Dcat\Admin\Enums\AuthLayoutType;
use Dcat\Admin\Extend\Setting as Form;
use D4T\Admin\UI\DcatAdminlte\Enums\NavBarClass;
use D4T\Admin\UI\DcatAdminlte\Enums\NavBarColor;
use D4T\Admin\UI\DcatAdminlte\Enums\NavBarType;
use D4T\Admin\UI\DcatAdminlte\Enums\SideBarStyle;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('ui-dcat-adminlte.title');
    }

    public function form()
    {
        $this->radio(AuthLayoutType::class, $this->trans('ui-sneat.auth_layout_type'))->options(AuthLayoutType::map())->default(AuthLayoutType::BASIC->value);
        $this->radio(LayoutType::class, $this->trans('ui-sneat.layout_type'))->options(LayoutType::map())->default(LayoutType::VERTICAL->value);
        $this->radio(SideBarStyle::class, $this->trans('ui-sneat.sidebar_style'))->options(SideBarStyle::map())->default(SideBarStyle::PRIMARY->value);
        $this->radio(NavBarColor::class, $this->trans('ui-sneat.navbar_color'))->options(NavBarColor::map())->default(NavBarColor::PRIMARY->value);
        $this->radio(NavBarType::class, $this->trans('ui-sneat.navbar_type'))->options(NavBarType::map())->default(NavBarType::FIXED_TOP->value);


        $this->text('theme')->default('default');
        $this->switch('sidebar_collapsed')->default(true);

        // $sidebarStyle = config('admin.layout.sidebar_style') ?: 'light';
        // $jsVariables['dark_mode'] = static::isDarkMode();
        // $jsVariables['sidebar_dark'] = config('admin.layout.sidebar_dark') || ($sidebarStyle === 'dark');
        // $jsVariables['sidebar_light_style'] = in_array($sidebarStyle, ['dark', 'light'], true) ? 'sidebar-light-primary' : 'sidebar-primary';

    }
}
