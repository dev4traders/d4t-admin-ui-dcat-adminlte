<?php

namespace D4T\Admin\UI\DcatAdminlte\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum SideBarStyle : string implements D4TEnum {
    use D4TEnumTrait;

    case PRIMARY = 'sidebar-primary';
    case PRIMARY_LIGHT = 'sidebar-light-primary';
    case PRIMARY_DARK = 'sidebar-dark-white';
}