<?php

namespace D4T\Admin\UI\DcatAdminlte;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('ui-dcat-adminlte.title');
    }

    public function form()
    {
        $this->text('direction');
    }
}
