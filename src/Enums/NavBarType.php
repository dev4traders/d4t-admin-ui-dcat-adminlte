<?php

namespace D4T\Admin\UI\DcatAdminlte\Enums;

use D4T\Core\Contracts\D4TEnum;
use D4T\Core\Traits\D4TEnumTrait;

enum NavBarType : string implements D4TEnum {
    use D4TEnumTrait;

    case FLOATING = 'floating-nav';
    case FIXED_TOP = 'fixed-top';
    case HIDDEN = 'd-none';
}