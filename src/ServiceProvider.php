<?php

namespace D4T\Admin\UI\DcatAdminlte;

use Dcat\Admin\Admin;
use Dcat\Admin\Enums\LayoutType;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Enums\AuthLayoutType;
use D4T\Admin\UI\DcatAdminlte\Setting;
use D4T\Admin\UI\DcatAdminlte\Enums\NavBarType;
use D4T\Admin\UI\DcatAdminlte\Enums\NavBarColor;
use D4T\Admin\UI\DcatAdminlte\Enums\SideBarStyle;
use Dcat\Admin\Enums\DarkModeType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::UI;
    }

    public static function sidebarCollapsed() : bool {
        return self::setting('sidebar_collapsed') ?? false;
    }

    public static function darkMode(): DarkModeType
    {
        return DarkModeType::tryFrom(self::setting(DarkModeType::class)) ?? DarkModeType::DARK;
    }

    public static function layoutType(): LayoutType
    {
        return LayoutType::tryFrom(self::setting(LayoutType::class)) ?? LayoutType::VERTICAL;
    }

    public static function authLayoutType(): AuthLayoutType
    {
        return AuthLayoutType::tryFrom(self::setting(AuthLayoutType::class)) ?? AuthLayoutType::BASIC;
    }

    public static function sidebarStyle(): SideBarStyle
    {
        return SideBarStyle::tryFrom(self::setting(SideBarStyle::class)) ?? SideBarStyle::PRIMARY_DARK;
    }

    // public static function sidebarColor(): NavBarColor
    // {
    //     return NavBarColor::tryFrom(self::setting(NavBarColor::class)) ?? NavBarColor::PRIMARY;
    // }

    public static function navbarColor(): NavBarColor
    {
        return NavBarColor::tryFrom(self::setting(NavBarColor::class)) ?? NavBarColor::DARK;
    }

    public static function navbarType(): NavBarType
    {
        return NavBarType::tryFrom(self::setting(NavBarType::class)) ?? NavBarType::FIXED_TOP;
    }

    public static function sidebarClass(): string
    {
        return self::sidebarCollapsed() ? 'sidebar-collapse' : '';
    }

    public static function navbarClass(): string
    {
        return self::navbarType()().' '.self::navbarColor()();

    }

    public static function bodyClass(): string
    {
        $class = [];

        //todo:: layout-fixed add to settings
        //dd(self::darkMode());
        if(self::darkMode() == DarkModeType::DARK)
            $class[] = 'dark-mode';

        if(self::navbarType() == NavBarType::FIXED_TOP)
            $class[] = 'navbar-fixed-top';

        if(self::sidebarCollapsed())
            $class[] = 'sidebar-collapse';

        if(self::layoutType() == LayoutType::HORIZONTAL)
            $class[] = 'horizontal-menu';

        return implode(' ', $class);
    }

    public static function theme(): string
    {
        return self::setting('theme') ?? 'default';
    }

    protected $js = [
        'adminlte/adminlte.js',
        //'dcat/js/dcat-app.js',
        //'dcat/plugins/vendors.min.js',
        //'dcat/plugins/extensions/toastr.min.js',
        //'dcat/plugins/jquery-pjax/jquery.pjax.min.js',
        //'dcat/plugins/bootstrap-validator/validator.min.js',
        //'dcat/plugins/layer/layer.js',
        'dcat/plugins/jquery.initialize/jquery.initialize.min.js',
    ];
    protected $css = [
        'adminlte/adminlte.css',
        'dcat/plugins/vendors.min.css',
        'dcat/plugins/extensions/toastr.css',
        'dcat/css/dcat-app.css',
    ];

    protected array $aliases = [
        '@nunito' => [
            //'css' => 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i',
            'css' => 'dcat/css/nunito.css',
        ],
        '@datatables' => [
            'css' => 'dcat/plugins/tables/datatable/datatables.min.css',
        ],
        '@grid-extension' => [
            'js' => 'dcat/extra/grid-extend.js',
        ],
        '@resource-selector' => [
            'js' => 'dcat/extra/resource-selector.js',
        ],
        '@select-table' => [
            'js' => 'dcat/extra/select-table.js',
        ],
        '@layer' => [
            'js' => 'dcat/plugins/layer/layer.js',
        ],
        '@tinymce' => [
            'js' => 'dcat/plugins/tinymce/tinymce.min.js',
        ],
        // '@pjax' => [
        //     'js' => 'dcat/plugins/jquery-pjax/jquery.pjax.min.js',
        // ],
        // '@toastr' => [
        //     'js'  => 'dcat/plugins/extensions/toastr.min.js',
        //     'css' => 'dcat/plugins/extensions/toastr.css',
        // ],
        '@jquery.nestable' => [
            'js'  => 'dcat/plugins/nestable/jquery.nestable.min.js',
            'css' => 'dcat/plugins/nestable/nestable.css',
        ],
        '@validator' => [
            'js' => 'dcat/plugins/bootstrap-validator/validator.min.js',
        ],
        // '@select2' => [
        //     'js'  => [
        //         'dcat/plugins/select/select2.full.min.js',
        //         'dcat/plugins/select/i18n/{lang}.js',
        //     ],
        //     'css' => 'dcat/plugins/select/select2.min.css',
        // ],
        '@bootstrap-datetimepicker' => [
            'js'  => 'dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js',
            'css' => 'dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css',
        ],
        '@moment' => [
            'js' => [
                'dcat/plugins/moment/moment-with-locales.min.js',
            ],
        ],
        '@moment-timezone' => [
            'js' => [
                'dcat/plugins/moment-timezone/moment-timezone-with-data.min.js',
            ],
        ],
        '@jstree' => [
            'js'  => 'dcat/plugins/jstree-theme/jstree.min.js',
            'css' => 'dcat/plugins/jstree-theme/themes/proton/style.min.css',
        ],
        '@switchery' => [
            'js'  => 'dcat/plugins/switchery/switchery.min.js',
            'css' => 'dcat/plugins/switchery/switchery.min.css',
        ],
        '@webuploader' => [
            'js' => [
                'dcat/plugins/webuploader/webuploader.min.js',
                'dcat/extra/upload.js',
            ],
            'css' => 'dcat/extra/upload.css',
        ],
        '@chartjs' => [
            'js' => 'dcat/plugins/chart.js/chart.bundle.min.js',
        ],
        '@jquery.sparkline' => [
            'js' => 'dcat/plugins/jquery.sparkline/jquery.sparkline.min.js',
        ],
        '@jquery.bootstrap-duallistbox' => [
            'js'  => 'dcat/plugins/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js',
            'css' => 'dcat/plugins/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css',
        ],
        '@number-input' => [
            'js' => 'dcat/plugins/number-input/bootstrap-number-input.js',
        ],
        '@ionslider' => [
            'js' => [
                'dcat/plugins/ionslider/ion.rangeSlider.min.js',
            ],
            'css' => [
                'dcat/plugins/ionslider/ion.rangeSlider.css',
                'dcat/plugins/ionslider/ion.rangeSlider.skinNice.css',
            ],
        ],
        '@editor-md' => [
            'js' => [
                'dcat/plugins/editor-md/lib/raphael.min.js',
                'dcat/plugins/editor-md/lib/marked.min.js',
                'dcat/plugins/editor-md/lib/prettify.min.js',
                'dcat/plugins/editor-md/lib/underscore.min.js',
                'dcat/plugins/editor-md/lib/sequence-diagram.min.js',
                'dcat/plugins/editor-md/lib/flowchart.min.js',
                'dcat/plugins/editor-md/lib/jquery.flowchart.min.js',
                'dcat/plugins/editor-md/editormd.min.js',
            ],
            'css' => [
                'dcat/plugins/editor-md/css/editormd.preview.min.css',
                'dcat/extra/markdown.css',
            ],
        ],
        '@editor-md-form' => [
            'js' => [
                'dcat/plugins/editor-md/lib/raphael.min.js',
                'dcat/plugins/editor-md/editormd.min.js',
            ],
            'css' => [
                'dcat/plugins/editor-md/css/editormd.min.css',
            ],
        ],
        '@jquery.inputmask' => [
            'js' => 'dcat/plugins/input-mask/jquery.inputmask.bundle.min.js',
        ],
        '@apex-charts' => [
            'js' => 'dcat/plugins/charts/apexcharts.min.js',
        ],
        '@fontawesome-iconpicker' => [
            'js' => 'dcat/plugins/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.js',
            'css' => 'dcat/plugins/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css',
        ],
        '@color' => [
            'js' => 'dcat/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
            'css' => 'dcat/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        ],
        '@qrcode' => [
            'js' => 'dcat/plugins/jquery-qrcode/dist/jquery-qrcode.min.js',
        ],
        '@sortable' => [
            'js' => 'dcat/plugins/sortable/Sortable.min.js',
        ],
        '@autocomplete' => [
            'js' => 'dcat/plugins/autocomplete/jquery.autocomplete.min.js',
        ],
    ];

    protected array $fonts = [
        //'@nunito',
    ];

    public function init()
    {

        //dd(Admin::app());
        parent::init();
        //todo::move to Grid

        Admin::css('@datatables');

        //Admin::requireAssets('@dev4traders.d4t-admin-ui-dcat-adminlte');

        //$this->publishable();
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}

