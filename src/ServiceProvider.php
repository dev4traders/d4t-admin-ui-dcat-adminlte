<?php

namespace D4T\Admin\UI\DcatAdminlte;

use Dcat\Admin\Admin;
use D4T\Admin\UI\DcatAdminlte\Setting;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::UI;
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
        parent::init();

        //todo::move to Grid
        Admin::css('@datatables');

        Admin::requireAssets('@dev4traders.d4t-admin-ui-dcat-adminlte');

        $this->publishable();
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
