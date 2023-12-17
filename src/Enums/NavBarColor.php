<?php

namespace D4T\Admin\UI\DcatAdminlte\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum NavBarColor : string implements D4TEnum {
    use D4TEnumTrait;

    case PRIMARY = 'bg-primary';
    case DARK = 'bg-dark';
    case LIGHT = 'bg-light';
}