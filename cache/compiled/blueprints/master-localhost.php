<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '5902e42580777183bb694868a78d9d56:b3da45cf2399ccaf176a58cf33292257',
    'files' => [
        'user/plugins' => [
            'plugins/anchors' => [
                'file' => 'user/plugins/anchors/blueprints.yaml',
                'modified' => 1439346820
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1439346820
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1439346820
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/blueprints.yaml',
                'modified' => 1439346820
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1439346822
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1439346822
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/blueprints.yaml',
                'modified' => 1451688056
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1439346820
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1439346820
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1439346820
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1439346820
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.anchors.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.anchors.enabled'
            ],
            'plugins.anchors.active' => [
                'type' => 'toggle',
                'label' => 'Active',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'help' => 'Activate for all pages. If disabled then you must activate per-page',
                'name' => 'plugins.anchors.active'
            ],
            'plugins.anchors.selectors' => [
                'type' => 'text',
                'label' => 'Selectors',
                'size' => 'large',
                'default' => 'h1,h2,h3,h4',
                'placeholder' => 'Anchor Selectors',
                'help' => 'Comma separated list of header selectors to activate on',
                'name' => 'plugins.anchors.selectors'
            ],
            'plugins.anchors.placement' => [
                'type' => 'select',
                'label' => 'Placement',
                'classes' => 'fancy',
                'help' => 'Either `left` or `right`',
                'default' => 'right',
                'options' => [
                    'left' => 'left',
                    'right' => 'right'
                ],
                'name' => 'plugins.anchors.placement'
            ],
            'plugins.anchors.visible' => [
                'type' => 'select',
                'label' => 'Visible',
                'classes' => 'fancy',
                'help' => 'Hover activates on `hover` else will always display',
                'default' => 'hover',
                'options' => [
                    'hover' => 'hover',
                    'always' => 'always'
                ],
                'name' => 'plugins.anchors.visible'
            ],
            'plugins.anchors.icon' => [
                'type' => 'text',
                'label' => 'Icon',
                'size' => 'medium',
                'default' => '',
                'help' => 'Replace the default link icon with the character(s) provided, e.g. #, ¶, ❡ or §',
                'name' => 'plugins.anchors.icon'
            ],
            'plugins.anchors.class' => [
                'type' => 'text',
                'label' => 'Class',
                'size' => 'medium',
                'default' => '',
                'help' => 'Adds the provided class to the anchor html',
                'name' => 'plugins.anchors.class'
            ],
            'plugins.breadcrumbs.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.enabled'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'Show even with one item',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css'
            ],
            'plugins.breadcrumbs.include_home' => [
                'type' => 'toggle',
                'label' => 'Include Home',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_home'
            ],
            'plugins.breadcrumbs.icon_home' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Home',
                'default' => '',
                'name' => 'plugins.breadcrumbs.icon_home'
            ],
            'plugins.breadcrumbs.icon_divider_classes' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Icon Divider Classes',
                'default' => 'fa fa-angle-right',
                'name' => 'plugins.breadcrumbs.icon_divider_classes'
            ],
            'plugins.breadcrumbs.link_trailing' => [
                'type' => 'toggle',
                'label' => 'Link Trailing',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.link_trailing'
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => '404 Route',
                'default' => '/error',
                'name' => 'plugins.error.routes.404'
            ],
            'plugins.highlight.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.highlight.enabled'
            ],
            'plugins.highlight.theme' => [
                'type' => 'select',
                'label' => 'CSS Theme',
                'default' => 'default',
                'options' => [
                    'default' => 'Default',
                    'monokai' => 'Monakai',
                    'learn' => 'Grav Learn',
                    'railscasts' => 'Railscasts',
                    'arta' => 'Arta',
                    'ascetic' => 'Ascetic',
                    'atelier-dune.dark' => 'Atelier Dune Dark',
                    'atelier-dune.light' => 'Atelier Dune Light',
                    'atelier-forest.dark' => 'Atelier Forest Dark',
                    'atelier-forest.light' => 'Atelier Forest Light',
                    'atelier-heath.dark' => 'Atelier Heath Dark',
                    'atelier-heath.light' => 'Atelier Heath Light',
                    'atelier-lakeside.dark' => 'Atelier Lakeside Dark',
                    'atelier-lakeside.light' => 'Atelier Lakeside Light',
                    'atelier-seaside.dark' => 'Atelier Seaside Dark',
                    'atelier-seaside.light' => 'Atelier Seaside Light',
                    'brown_paper' => 'Brown Paper',
                    'codepen-embed' => 'Codepen Embed',
                    'color-brewer' => 'Color Brewer',
                    'dark' => 'Dark',
                    'docco' => 'Docco',
                    'far' => 'Far',
                    'foundation' => 'Foundation',
                    'github' => 'Github',
                    'googlecode' => 'GoogleCode',
                    'hybrid' => 'Hybrid',
                    'idea' => 'Idea',
                    'ir_black' => 'IRBlack',
                    'kimbie.dark' => 'Kimbie Dark',
                    'kimbie.light' => 'Kimbie Light',
                    'magula' => 'Magula',
                    'mono-blue' => 'Mono Blue',
                    'monokai_sublime' => 'Monokai Sublime',
                    'obsidian' => 'Obsidian',
                    'paraiso.dark' => 'Paraiso Dark',
                    'paraiso.light' => 'Paraiso Light',
                    'pojoaque' => 'Pojoaque',
                    'rainbow' => 'Rainbow',
                    'school_book' => 'School Book',
                    'solarized_dark' => 'Solarized Dark',
                    'solarized_light' => 'Solarized Light',
                    'sunburst' => 'Sunburst',
                    'tomorrow-night-blue' => 'Tomorrow Night Blue',
                    'tomorrow-night-bright' => 'Tomorrow Night Bright',
                    'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
                    'tomorrow-night' => 'Tomorrow Night',
                    'tomorrow' => 'Tomorrow',
                    'vs' => 'VS',
                    'xcode' => 'XCode',
                    'zenburn' => 'Zenburn'
                ],
                'name' => 'plugins.highlight.theme'
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css'
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Route',
                'default' => '/random',
                'help' => 'Default route of the simplesearch plugin',
                'name' => 'plugins.simplesearch.route'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Template',
                'default' => 'simplesearch_results',
                'help' => 'Name of the template for the search results',
                'name' => 'plugins.simplesearch.template'
            ],
            'plugins.simplesearch.filters' => [
                'type' => 'selectize',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator'
            ],
            'plugins.sitemap.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.enabled'
            ],
            'plugins.sitemap.route' => [
                'type' => 'text',
                'label' => 'Route to sitemap',
                'placeholder' => '/sitemap',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.sitemap.route'
            ],
            'plugins.sitemap.ignores' => [
                'type' => 'array',
                'label' => 'Ignore',
                'help' => 'URLs to ignore',
                'value_only' => true,
                'placeholder_value' => '/ignore-this-route',
                'name' => 'plugins.sitemap.ignores'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site, often used in themes',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'help' => 'A default author name, often used in themes or page content',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'help' => 'A default email to reference in themes or pages',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'help' => 'Taxonomy types must be defined here if you wish to use them in pages',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'Enabled',
                'highlight' => 1,
                'help' => 'Enable page summary (the summary returns the same as the page content)',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'help' => 'The amount of characters of a page to use as a content summary',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'Format',
                'classes' => 'fancy',
                'help' => 'short = use the first occurrence of delimiter or size; long = summary delimiter will be ignored',
                'highlight' => 'short',
                'options' => [
                    'short' => 'Short',
                    'long' => 'Long'
                ],
                'name' => 'site.summary.format'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Delimiter',
                'help' => 'The summary delimiter (default \'===\')',
                'name' => 'site.summary.delimiter'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'help' => 'Default metadata values that will be displayed on every page unless overridden by the page',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'Custom Redirects',
                'help' => 'routes to redirect to other pages. Standard Regex replacement is valid',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/redirect',
                'name' => 'site.redirects'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom Routes',
                'help' => 'routes to alias to other pages. Standard Regex replacement is valid',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'Default theme',
                'help' => 'Set the default theme for Grav to use (default is Antimatter)',
                'name' => 'system.pages.theme'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'help' => 'Control how pages are processed. Can be set per-page rather than globally',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'Timezone',
                'size' => 'medium',
                'classes' => 'fancy',
                'help' => 'Override the default timezone the server',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'America/Santa_Isabel' => '(UTC-08:00) America/Santa_Isabel',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Chihuahua' => '(UTC-07:00) America/Chihuahua',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Mazatlan' => '(UTC-07:00) America/Mazatlan',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Monterrey' => '(UTC-06:00) America/Monterrey',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'America/Mexico_City' => '(UTC-06:00) America/Mexico_City',
                    'America/Bahia_Banderas' => '(UTC-06:00) America/Bahia_Banderas',
                    'America/Merida' => '(UTC-06:00) America/Merida',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'Pacific/Easter' => '(UTC-05:00) Pacific/Easter',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Cuiaba' => '(UTC-04:00) America/Cuiaba',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/Campo_Grande' => '(UTC-04:00) America/Campo_Grande',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/Montevideo' => '(UTC-03:00) America/Montevideo',
                    'Antarctica/Palmer' => '(UTC-03:00) Antarctica/Palmer',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Sao_Paulo' => '(UTC-03:00) America/Sao_Paulo',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'America/Santiago' => '(UTC-03:00) America/Santiago',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Godthab' => '(UTC-03:00) America/Godthab',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Asuncion' => '(UTC-03:00) America/Asuncion',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Scoresbysund' => '(UTC-01:00) America/Scoresbysund',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Atlantic/Azores' => '(UTC-01:00) Atlantic/Azores',
                    'Africa/El_Aaiun' => '(UTC+00:00) Africa/El_Aaiun',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Europe/London' => '(UTC+00:00) Europe/London',
                    'Europe/Jersey' => '(UTC+00:00) Europe/Jersey',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'Antarctica/Troll' => '(UTC+00:00) Antarctica/Troll',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Europe/Lisbon' => '(UTC+00:00) Europe/Lisbon',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Africa/Casablanca' => '(UTC+00:00) Africa/Casablanca',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'UTC' => '(UTC+00:00) UTC',
                    'Atlantic/Madeira' => '(UTC+00:00) Atlantic/Madeira',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Europe/Guernsey' => '(UTC+00:00) Europe/Guernsey',
                    'Europe/Dublin' => '(UTC+00:00) Europe/Dublin',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Atlantic/Canary' => '(UTC+00:00) Atlantic/Canary',
                    'Atlantic/Faroe' => '(UTC+00:00) Atlantic/Faroe',
                    'Europe/Isle_of_Man' => '(UTC+00:00) Europe/Isle_of_Man',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Europe/Warsaw' => '(UTC+01:00) Europe/Warsaw',
                    'Europe/Busingen' => '(UTC+01:00) Europe/Busingen',
                    'Europe/Copenhagen' => '(UTC+01:00) Europe/Copenhagen',
                    'Europe/Malta' => '(UTC+01:00) Europe/Malta',
                    'Europe/Skopje' => '(UTC+01:00) Europe/Skopje',
                    'Europe/Zurich' => '(UTC+01:00) Europe/Zurich',
                    'Europe/Stockholm' => '(UTC+01:00) Europe/Stockholm',
                    'Europe/Berlin' => '(UTC+01:00) Europe/Berlin',
                    'Europe/Bratislava' => '(UTC+01:00) Europe/Bratislava',
                    'Europe/Belgrade' => '(UTC+01:00) Europe/Belgrade',
                    'Europe/Vatican' => '(UTC+01:00) Europe/Vatican',
                    'Europe/Amsterdam' => '(UTC+01:00) Europe/Amsterdam',
                    'Europe/Vaduz' => '(UTC+01:00) Europe/Vaduz',
                    'Europe/Brussels' => '(UTC+01:00) Europe/Brussels',
                    'Europe/Andorra' => '(UTC+01:00) Europe/Andorra',
                    'Europe/Budapest' => '(UTC+01:00) Europe/Budapest',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Europe/Tirane' => '(UTC+01:00) Europe/Tirane',
                    'Europe/Vienna' => '(UTC+01:00) Europe/Vienna',
                    'Europe/Paris' => '(UTC+01:00) Europe/Paris',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Europe/Madrid' => '(UTC+01:00) Europe/Madrid',
                    'Europe/Luxembourg' => '(UTC+01:00) Europe/Luxembourg',
                    'Europe/Sarajevo' => '(UTC+01:00) Europe/Sarajevo',
                    'Europe/Monaco' => '(UTC+01:00) Europe/Monaco',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Europe/Zagreb' => '(UTC+01:00) Europe/Zagreb',
                    'Europe/Oslo' => '(UTC+01:00) Europe/Oslo',
                    'Europe/Podgorica' => '(UTC+01:00) Europe/Podgorica',
                    'Europe/Gibraltar' => '(UTC+01:00) Europe/Gibraltar',
                    'Europe/Rome' => '(UTC+01:00) Europe/Rome',
                    'Arctic/Longyearbyen' => '(UTC+01:00) Arctic/Longyearbyen',
                    'Europe/San_Marino' => '(UTC+01:00) Europe/San_Marino',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Africa/Ceuta' => '(UTC+01:00) Africa/Ceuta',
                    'Europe/Ljubljana' => '(UTC+01:00) Europe/Ljubljana',
                    'Europe/Prague' => '(UTC+01:00) Europe/Prague',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Europe/Tallinn' => '(UTC+02:00) Europe/Tallinn',
                    'Europe/Kiev' => '(UTC+02:00) Europe/Kiev',
                    'Europe/Vilnius' => '(UTC+02:00) Europe/Vilnius',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Uzhgorod' => '(UTC+02:00) Europe/Uzhgorod',
                    'Europe/Mariehamn' => '(UTC+02:00) Europe/Mariehamn',
                    'Asia/Nicosia' => '(UTC+02:00) Asia/Nicosia',
                    'Europe/Sofia' => '(UTC+02:00) Europe/Sofia',
                    'Europe/Riga' => '(UTC+02:00) Europe/Riga',
                    'Europe/Chisinau' => '(UTC+02:00) Europe/Chisinau',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Asia/Amman' => '(UTC+02:00) Asia/Amman',
                    'Europe/Zaporozhye' => '(UTC+02:00) Europe/Zaporozhye',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Cairo' => '(UTC+02:00) Africa/Cairo',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Asia/Beirut' => '(UTC+02:00) Asia/Beirut',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Asia/Damascus' => '(UTC+02:00) Asia/Damascus',
                    'Asia/Jerusalem' => '(UTC+02:00) Asia/Jerusalem',
                    'Europe/Helsinki' => '(UTC+02:00) Europe/Helsinki',
                    'Europe/Athens' => '(UTC+02:00) Europe/Athens',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Europe/Bucharest' => '(UTC+02:00) Europe/Bucharest',
                    'Africa/Windhoek' => '(UTC+02:00) Africa/Windhoek',
                    'Asia/Gaza' => '(UTC+02:00) Asia/Gaza',
                    'Asia/Hebron' => '(UTC+02:00) Asia/Hebron',
                    'Europe/Istanbul' => '(UTC+02:00) Europe/Istanbul',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Asia/Tehran' => '(UTC+03:30) Asia/Tehran',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Asia/Baku' => '(UTC+04:00) Asia/Baku',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Broken_Hill' => '(UTC+10:30) Australia/Broken_Hill',
                    'Australia/Adelaide' => '(UTC+10:30) Australia/Adelaide',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Australia/Hobart' => '(UTC+11:00) Australia/Hobart',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Bougainville' => '(UTC+11:00) Pacific/Bougainville',
                    'Australia/Currie' => '(UTC+11:00) Australia/Currie',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Australia/Melbourne' => '(UTC+11:00) Australia/Melbourne',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Australia/Lord_Howe' => '(UTC+11:00) Australia/Lord_Howe',
                    'Australia/Sydney' => '(UTC+11:00) Australia/Sydney',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Auckland' => '(UTC+13:00) Pacific/Auckland',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Antarctica/McMurdo' => '(UTC+13:00) Antarctica/McMurdo',
                    'Pacific/Chatham' => '(UTC+13:45) Pacific/Chatham',
                    'Pacific/Apia' => '(UTC+14:00) Pacific/Apia',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short date format',
                'help' => 'Set the short date format that can be used by themes',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long date format',
                'help' => 'Set the long date format that can be used by themes',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS of F g:i A' => 'Date2',
                    'D, m M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default ordering',
                'help' => 'Pages in a list will render using this order unless it is overridden',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default order direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'help' => 'The direction of pages in a list',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default page count',
                'help' => 'Default maximum pages count in a list',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'Date-based publishing',
                'help' => 'Automatically (un)publish posts based on their date',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'Events',
                'help' => 'Enable or Disable specific events.  Disabling these can break plugins',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'toggle',
                'label' => 'Redirect default route',
                'help' => 'Automatically redirect to a page\'s default route',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.redirect_default_route'
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'Supported',
                'help' => 'Comma separated list of 2 letter language codes (for example \'en,fr,de\')',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'Translations enabled',
                'help' => 'Support translations in Grav, plugins and extensions',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'Translations fallback',
                'help' => 'Fallback through supported translations if active language doesn\'t exist',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'Active language in session',
                'help' => 'Store the active language in the session',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active'
            ],
            'system.languages.home_redirect.include_lang' => [
                'type' => 'toggle',
                'label' => 'Home redirect include language',
                'help' => 'Include language in home redirect (/en)',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_lang'
            ],
            'system.languages.home_redirect.include_route' => [
                'type' => 'toggle',
                'label' => 'Home redirect include route',
                'help' => 'Include route in home redirect (/blog)',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.home_redirect.include_route'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Expires',
                'help' => 'Sets the expires header. The value is in seconds.',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'Last modified',
                'help' => 'Sets the last modified header that can help optimize proxy and browser caching',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'ETag',
                'help' => 'Sets the etag header to help identify when a page has been modified',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'Vary accept encoding',
                'help' => 'Sets the `Vary: Accept Encoding` header to help with proxy and CDN caching',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'help' => 'Enable default support for Markdown Extra - https://michelf.ca/projects/php-markdown/extra/',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'Auto line breaks',
                'help' => 'Enable support for automatic line breaks in markdown',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'Auto URL links',
                'help' => 'Enable automatic conversion of URLs into HTML hyperlinks',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'Escape markup',
                'help' => 'Escape markup tags into HTML entities',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'help' => 'Global ON/OFF switch to enable/disable Grav caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache check method',
                'help' => 'Select the method that Grav uses to check if page files have been modified.',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'help' => 'Choose which cache driver Grav should use. \'Auto Detect\' attempts to find the best for you',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache prefix',
                'help' => 'An identifier for part of the Grav key.  Don\'t change unless you know what your doing.',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Lifetime',
                'help' => 'Sets the cache lifetime in seconds. 0 = infinite',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'Gzip compression',
                'help' => 'Enable GZip compression of the Grav page for increased performance.',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'help' => 'Control the Twig caching mechanism. Leave this enabled for best performance.',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'help' => 'Allows the option of not loading the Twig Debugger extension',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'help' => 'Twig will automatically recompile the Twig cache if it detects any changes in Twig templates',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'help' => 'Autoescapes all variables.  This will break your site most likely',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS pipeline',
                'help' => 'The CSS pipeline is the unification of multiple CSS resources into one file',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS minify',
                'help' => 'Minify the CSS during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS minify Windows override',
                'help' => 'Minify Override for Windows platforms. False by default due to ThreadStackSize',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS rewrite',
                'help' => 'Rewrite any CSS relative URLs during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript pipeline',
                'help' => 'The JS pipeline is the unification of multiple JS resources into one file',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript minify',
                'help' => 'Minify the JS during pipelining',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on assets',
                'help' => 'Enable asset timestamps',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.assets.collections' => [
                'type' => 'array',
                'label' => 'Collections',
                'placeholder_key' => 'collection_name',
                'placeholder_value' => 'collection_path',
                'name' => 'system.assets.collections'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'Display errors',
                'help' => 'Display full backtrace-style error page',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'Log errors',
                'help' => 'Log errors to /logs folder',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'help' => 'Enable Grav debugger and following settings',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.twig' => [
                'type' => 'toggle',
                'label' => 'Debug Twig',
                'help' => 'Enable debugging of Twig templates',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.twig'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown close connection',
                'help' => 'Close the connection before calling onShutdown(). false for debugging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'Default image quality',
                'help' => 'Default image quality to use when resampling or caching images (85%)',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'Cache all images',
                'help' => 'Run all images through Grav\'s cache system even if they have no media manipulations',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'Image debug watermark',
                'help' => 'Show an overlay over images indicating the pixel depth of the image when working with retina for example',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'File upload limit',
                'help' => 'Set maximum upload size in bytes (0 is unlimited)',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on media',
                'help' => 'Appends a timestamp based on last modified date to each media item',
                'highlight' => 0,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.session.enabled' => [
                'type' => 'toggle',
                'label' => 'Enabled',
                'help' => 'Enable session support within Grav',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Timeout',
                'help' => 'Sets the session timeout in seconds',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.session.timeout'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'Name',
                'help' => 'An identifier used to form the name of the session cookie',
                'name' => 'system.session.name'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'Absolute URLs',
                'highlight' => 0,
                'help' => 'Absolute or relative URLs for `base_url`',
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'Parameter separator',
                'classes' => 'fancy',
                'help' => 'Separater for passed parameters that can be changed for Apache on Windows',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'anchors' => [
                    'enabled' => 'plugins.anchors.enabled',
                    'active' => 'plugins.anchors.active',
                    'selectors' => 'plugins.anchors.selectors',
                    'placement' => 'plugins.anchors.placement',
                    'visible' => 'plugins.anchors.visible',
                    'icon' => 'plugins.anchors.icon',
                    'class' => 'plugins.anchors.class'
                ],
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'show_all' => 'plugins.breadcrumbs.show_all',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'include_home' => 'plugins.breadcrumbs.include_home',
                    'icon_home' => 'plugins.breadcrumbs.icon_home',
                    'icon_divider_classes' => 'plugins.breadcrumbs.icon_divider_classes',
                    'link_trailing' => 'plugins.breadcrumbs.link_trailing'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'highlight' => [
                    'enabled' => 'plugins.highlight.enabled',
                    'theme' => 'plugins.highlight.theme'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'route' => 'plugins.simplesearch.route',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => 'plugins.simplesearch.filters',
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator'
                ],
                'sitemap' => [
                    'enabled' => 'plugins.sitemap.enabled',
                    'route' => 'plugins.sitemap.route',
                    'ignores' => 'plugins.sitemap.ignores'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'expires' => 'system.pages.expires',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'home_redirect' => [
                        'include_lang' => 'system.languages.home_redirect.include_lang',
                        'include_route' => 'system.languages.home_redirect.include_route'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify',
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'collections' => 'system.assets.collections'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'twig' => 'system.debugger.twig',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'debug' => 'system.images.debug'
                ],
                'media' => [
                    'upload_limit' => 'system.media.upload_limit',
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name'
                ],
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
