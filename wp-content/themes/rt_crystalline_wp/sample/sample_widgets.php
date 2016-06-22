<?php
        function replace_token_url($var){
        $out = $var;
        if (is_string($var)){
            $out = str_replace("@RT_SITE_URL@", get_bloginfo("wpurl"), $var);
        }
        return $out;
    }

    function filter_token_url($value, $oldvalue) {
        if (is_array($value)){
            return multidimensionalArrayMap("replace_token_url", $value);
            return $value;
        }
        else if (is_string($value))
            return replace_token_url($value);
        else
            return $value;
    }

    function multidimensionalArrayMap( $func, $arr )
    {
    $newArr = array();
    foreach( $arr as $key => $value )
        {
        $newArr[ $key ] = ( is_array( $value ) ? multidimensionalArrayMap( $func, $value ) : $func( $value ) );
        }
    return $newArr;
   }

    // unpublish hellow world
     $hello_world = array();
     $hello_world["ID"] = 1;
     $hello_world["post_status"] = "draft";
     wp_update_post( $hello_world );
      
    
        add_filter('pre_update_option_rt_crystalline_wp-template-options', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options',array (
  'template_full_name' => 'Crystalline',
  'grid_system' => '12',
  'template_prefix' => 'crystalline-',
  'cookie_time' => '31536000',
  'copy_lang_files_if_diff' => '1',
  'overlays_list_limit' => '50',
  'blog' => 
  array (
    'cat' => '',
    'type' => 'post',
    'content' => 'content',
    'order' => 'date',
    'page-title' => 'Other Featured Characteristics',
    'title' => '0',
    'link-title' => '0',
    'meta-author' => '0',
    'meta-date' => '0',
    'meta-modified' => '0',
    'meta-comments' => '0',
    'meta-link-comments' => '1',
    'readmore' => 'Read more ...',
    'query' => '',
  ),
  'page' => 
  array (
    'title' => '1',
    'meta-author' => '0',
    'meta-date' => '0',
    'meta-modified' => '0',
    'meta-comments' => '0',
    'comments-form' => '1',
  ),
  'post' => 
  array (
    'title' => '1',
    'meta-author' => '1',
    'meta-date' => '1',
    'meta-modified' => '1',
    'meta-comments' => '1',
    'tags' => '1',
    'footer' => '1',
    'comments-form' => '1',
  ),
  'category' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-title' => '1',
    'title' => '1',
    'link-title' => '0',
    'meta-author' => '1',
    'meta-date' => '1',
    'meta-modified' => '0',
    'meta-comments' => '1',
    'meta-link-comments' => '1',
    'readmore' => 'Read more ...',
  ),
  'archive' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-title' => '1',
    'title' => '1',
    'link-title' => '0',
    'meta-author' => '1',
    'meta-date' => '1',
    'meta-modified' => '0',
    'meta-comments' => '1',
    'meta-link-comments' => '1',
    'readmore' => 'Read more ...',
  ),
  'tags' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-title' => '1',
    'title' => '1',
    'link-title' => '0',
    'meta-author' => '1',
    'meta-date' => '1',
    'meta-modified' => '0',
    'meta-comments' => '1',
    'meta-link-comments' => '1',
    'readmore' => 'Read more ...',
  ),
  'search' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-title' => '1',
    'title' => '1',
    'link-title' => '0',
    'meta-author' => '1',
    'meta-date' => '1',
    'meta-modified' => '0',
    'meta-comments' => '1',
    'meta-link-comments' => '1',
    'readmore' => 'Read more ...',
  ),
  'thumbnails-enabled' => '1',
  'header' => 
  array (
    'background' => '#004e63',
    'text' => '#ffffff',
    'link' => '#ebe5c3',
    'overlay' => 'lines-4',
    'shadows' => 'dark',
    'graphic' => 'header-1',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:9;i:1;i:3;}i:6;a:6:{i:0;i:2;i:1;i:2;i:2;i:2;i:3;i:2;i:4;i:2;i:5;i:2;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'main' => 
  array (
    'background' => '#f1e8d6',
    'text' => '#55473e',
    'link' => '#000000',
    'overlay' => 'circles',
    'shadows' => 'light',
  ),
  'feature' => 
  array (
    'background' => '#dedede',
    'text' => '#444444',
    'link' => '#004e63',
    'overlay' => 'none',
    'shadows' => 'light',
    'layout' => 'a:1:{i:12;a:4:{i:2;a:2:{i:0;i:6;i:1;i:6;}i:3;a:3:{i:0;i:3;i:1;i:3;i:2;i:6;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}i:6;a:6:{i:0;i:2;i:1;i:2;i:2;i:2;i:3;i:2;i:4;i:2;i:5;i:2;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'body' => 
  array (
    'background' => '#ffffff',
    'text' => '#666666',
    'link' => '#004e63',
    'overlay' => 'none',
    'shadows' => 'light',
  ),
  'bottom' => 
  array (
    'background' => '#a61027',
    'text' => '#ffffff',
    'link' => '#ebe5c3',
    'overlay' => 'lines-4',
    'shadows' => 'dark',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'thumb' => 
  array (
    'width' => '177',
    'height' => '114',
    'position' => 'img-left',
  ),
  'webfonts' => 
  array (
    'enabled' => '0',
    'source' => 'google',
  ),
  'font' => 
  array (
    'family' => 'helvetica',
    'size' => 'default',
    'size-is' => 'default',
  ),
  'wordpress-comments' => '1',
  'belatedpng-priority' => '8',
  'ie6-priority' => '5',
  'iphonegradients-priority' => '4',
  'iphoneimages-priority' => '6',
  'jstools-priority' => '10',
  'rtl-priority' => '7',
  'childcss-priority' => '100',
  'thumbnails-priority' => '1',
  'title-priority' => '5',
  'webfonts-priority' => '5',
  'styledeclaration' => 
  array (
    'overlaycheck' => '1',
    'enabled' => '1',
    'prority' => '1',
  ),
  'pagesuffix' => 
  array (
    'enabled' => '0',
    'class' => '',
    'priority' => '2',
  ),
  'feedlinks' => 
  array (
    'enabled' => '1',
    'priority' => '1',
  ),
  'ie6warn' => 
  array (
    'enabled' => '1',
    'delay' => '2000',
    'priority' => '9',
  ),
  'smartload' => 
  array (
    'enabled' => '0',
    'text' => '50',
    'exclusion' => '',
    'priority' => '11',
  ),
  'typographyshortcodes' => 
  array (
    'enabled' => '1',
    'priority' => '2',
  ),
  'widgetshortcodes' => 
  array (
    'enabled' => '1',
    'priority' => '2',
  ),
  'analytics' => 
  array (
    'enabled' => '0',
    'code' => '',
    'priority' => '3',
  ),
  'top' => 
  array (
    'layout' => '5,7',
    'showall' => '0',
    'showmax' => '6',
  ),
  'showcase' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'utility' => 
  array (
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:9;i:1;i:3;}i:6;a:6:{i:0;i:2;i:1;i:2;i:2;i:2;i:3;i:2;i:4;i:2;i:5;i:2;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'maintop' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbodyPosition' => 'a:1:{i:12;a:1:{i:2;a:2:{s:2:"mb";i:9;s:2:"sa";i:3;}}}',
  'mainbottom' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'footer-position' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'iphone-enabled' => '1',
  'iphone-scalable' => '0',
  'iphoneimages' => 
  array (
    'enabled' => '1',
    'minWidth' => '80',
    'percentage' => '33',
  ),
  'mobile' => 
  array (
    'drawer' => 'drawer',
    'top' => 'top-a',
    'header' => 'header-a',
    'navigation' => 'mobile-navigation',
    'showcase' => 'mobile-showcase',
    'footer-position' => 'footer-a',
    'copyright' => 'copyright',
  ),
  'cache' => 
  array (
    'enabled' => '0',
    'time' => '900',
  ),
  'gzipper' => 
  array (
    'enabled' => '0',
    'time' => '600',
    'expirestime' => '1440',
    'stripwhitespace' => '1',
  ),
  'inputstyling' => 
  array (
    'enabled' => '1',
    'exclusions' => '\'.content_vote,#rt-popup\'',
  ),
  'demostyles-enabled' => '1',
  'component-enabled' => '1',
  'rtl-enabled' => '1',
  'buildspans-enabled' => '1',
  'texturize-enabled' => '0',
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-1', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-1',array (
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'oct10-home',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-3', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-3',array (
  'texturize-enabled' => '1',
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-assignments-1',array (
  'templatepage' => 
  array (
    'home' => true,
    'front_page' => true,
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-assignments-2',array (
  'templatepage' => 
  array (
    'single' => true,
    'page' => true,
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-assignments-3',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 326,
      1 => 328,
      2 => 362,
    ),
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-assignments-4',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 257,
    ),
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-sidebar-1',array (
  'showcase' => 
  array (
    0 => 'widget-roktabs-10004',
  ),
  'feature' => 
  array (
    0 => 'text-20062',
    1 => 'gantrydivider-20546',
    2 => 'text-20063',
    3 => 'gantrydivider-20547',
    4 => 'text-20064',
  ),
  'sidebar' => 
  array (
    0 => 'gantry_menu-20511',
    1 => 'text-20061',
    2 => 'gantry_meta-20507',
    3 => 'gantry_categories-10003',
    4 => 'text-20068',
  ),
  'content-top' => 
  array (
    0 => 'text-20065',
    1 => 'gantrydivider-20548',
    2 => 'text-20066',
    3 => 'text-20067',
  ),
  'bottom' => 
  array (
    0 => 'text-20057',
    1 => 'gantrydivider-20543',
    2 => 'text-20058',
    3 => 'gantrydivider-20542',
    4 => 'text-20059',
    5 => 'gantrydivider-20544',
    6 => 'text-20060',
  ),
  'wp_inactive_widgets' => 
  array (
    0 => 'text-10003',
    1 => 'text-10004',
    2 => 'text-10005',
    3 => 'text-10006',
    4 => 'text-10007',
    5 => 'text-10008',
    6 => 'text-10009',
    7 => 'text-10010',
    8 => 'text-10011',
    9 => 'text-10012',
    10 => 'text-10013',
    11 => 'text-10014',
    12 => 'text-20003',
    13 => 'text-20004',
    14 => 'text-20005',
    15 => 'text-20006',
    16 => 'text-20007',
    17 => 'text-20008',
    18 => 'text-20009',
    19 => 'text-20010',
    20 => 'text-20011',
    21 => 'text-20012',
    22 => 'text-20013',
    23 => 'text-20014',
    24 => 'text-20015',
    25 => 'text-20016',
    26 => 'text-20017',
    27 => 'text-20018',
    28 => 'text-20019',
    29 => 'text-20020',
    30 => 'text-20021',
    31 => 'text-20022',
    32 => 'text-20023',
    33 => 'text-20024',
    34 => 'text-20025',
    35 => 'text-20026',
    36 => 'text-20027',
    37 => 'text-20028',
    38 => 'text-20029',
    39 => 'text-20030',
    40 => 'text-20031',
    41 => 'text-20032',
    42 => 'text-20033',
    43 => 'text-20034',
    44 => 'text-20035',
    45 => 'text-20036',
    46 => 'text-20037',
    47 => 'text-20038',
    48 => 'text-20039',
    49 => 'text-20040',
    50 => 'text-20041',
    51 => 'text-20042',
    52 => 'text-20043',
    53 => 'text-20044',
    54 => 'text-20045',
    55 => 'text-20046',
    56 => 'text-20047',
    57 => 'text-20048',
    58 => 'text-20049',
    59 => 'text-20050',
    60 => 'text-20051',
    61 => 'text-20052',
    62 => 'text-20053',
    63 => 'text-20054',
    64 => 'text-20055',
    65 => 'text-20056',
    66 => 'rokajaxsearch-10003',
    67 => 'widget-roktabs-10003',
    68 => 'gantry_breakcrumbs-10503',
    69 => 'gantry_breakcrumbs-30003',
    70 => 'gantry_copyright-20503',
    71 => 'gantry_loginform-10503',
    72 => 'gantry_loginform-20503',
    73 => 'gantrydivider-10012',
    74 => 'gantrydivider-10013',
    75 => 'gantrydivider-10014',
    76 => 'gantrydivider-10015',
    77 => 'gantrydivider-10016',
    78 => 'gantrydivider-10017',
    79 => 'gantrydivider-10018',
    80 => 'gantrydivider-10019',
    81 => 'gantrydivider-10020',
    82 => 'gantrydivider-20012',
    83 => 'gantrydivider-20013',
    84 => 'gantrydivider-20014',
    85 => 'gantrydivider-20015',
    86 => 'gantrydivider-20016',
    87 => 'gantrydivider-20511',
    88 => 'gantrydivider-20512',
    89 => 'gantrydivider-20513',
    90 => 'gantrydivider-20514',
    91 => 'gantrydivider-20515',
    92 => 'gantrydivider-20516',
    93 => 'gantrydivider-20517',
    94 => 'gantrydivider-20518',
    95 => 'gantrydivider-20519',
    96 => 'gantrydivider-20520',
    97 => 'gantrydivider-20521',
    98 => 'gantrydivider-20522',
    99 => 'gantrydivider-20523',
    100 => 'gantrydivider-20524',
    101 => 'gantrydivider-20525',
    102 => 'gantrydivider-20526',
    103 => 'gantrydivider-20527',
    104 => 'gantrydivider-20528',
    105 => 'gantrydivider-20529',
    106 => 'gantrydivider-20530',
    107 => 'gantrydivider-20531',
    108 => 'gantrydivider-20532',
    109 => 'gantrydivider-20533',
    110 => 'gantrydivider-20534',
    111 => 'gantrydivider-20535',
    112 => 'gantrydivider-20536',
    113 => 'gantrydivider-20537',
    114 => 'gantrydivider-20538',
    115 => 'gantrydivider-20539',
    116 => 'gantry_meta-10503',
    117 => 'gantry_meta-10504',
    118 => 'gantry_meta-20503',
    119 => 'gantry_recentcomments-10003',
    120 => 'gantry_viewswitcher-20503',
    121 => 'gantry_logo-20503',
    122 => 'gantry_menu-10505',
    123 => 'gantry_menu-10006',
    124 => 'gantry_menu-20504',
    125 => 'gantry_menu-20505',
    126 => 'gantry_menu-20506',
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-sidebar-2',array (
  'breadcrumb' => 
  array (
    0 => 'gantry_breakcrumbs-30004',
  ),
  'wp_inactive_widgets' => 
  array (
    0 => 'text-30503',
    1 => 'text-30504',
    2 => 'text-30505',
    3 => 'text-30506',
    4 => 'text-30507',
    5 => 'text-30508',
    6 => 'text-30509',
    7 => 'text-30510',
    8 => 'text-30511',
    9 => 'text-30512',
    10 => 'text-30513',
    11 => 'text-30514',
    12 => 'text-20003',
    13 => 'text-20004',
    14 => 'text-20005',
    15 => 'text-20006',
    16 => 'text-20007',
    17 => 'text-20008',
    18 => 'text-20009',
    19 => 'text-20010',
    20 => 'text-20011',
    21 => 'text-20012',
    22 => 'text-20013',
    23 => 'text-20014',
    24 => 'text-20015',
    25 => 'text-20016',
    26 => 'text-20017',
    27 => 'text-20018',
    28 => 'text-20019',
    29 => 'text-20020',
    30 => 'text-20021',
    31 => 'text-20022',
    32 => 'text-20023',
    33 => 'text-20024',
    34 => 'text-20025',
    35 => 'text-20026',
    36 => 'text-20027',
    37 => 'text-20028',
    38 => 'text-20029',
    39 => 'text-20030',
    40 => 'text-20031',
    41 => 'text-20032',
    42 => 'text-20033',
    43 => 'text-20034',
    44 => 'text-20035',
    45 => 'text-20036',
    46 => 'text-20037',
    47 => 'text-20038',
    48 => 'text-20039',
    49 => 'text-20040',
    50 => 'text-20041',
    51 => 'text-20042',
    52 => 'text-20043',
    53 => 'text-20044',
    54 => 'text-20045',
    55 => 'text-20046',
    56 => 'text-20047',
    57 => 'text-20048',
    58 => 'text-20049',
    59 => 'text-20050',
    60 => 'text-20051',
    61 => 'text-20052',
    62 => 'text-20053',
    63 => 'text-20054',
    64 => 'text-20055',
    65 => 'text-20056',
    66 => 'rokajaxsearch-30503',
    67 => 'widget-roktabs-30503',
    68 => 'gantry_breakcrumbs-31003',
    69 => 'gantry_breakcrumbs-30003',
    70 => 'gantry_colorchooser-20502',
    71 => 'gantry_copyright-20503',
    72 => 'gantry_loginform-31003',
    73 => 'gantry_loginform-20503',
    74 => 'gantrydivider-20502',
    75 => 'gantrydivider-30512',
    76 => 'gantrydivider-30513',
    77 => 'gantrydivider-30514',
    78 => 'gantrydivider-30515',
    79 => 'gantrydivider-30516',
    80 => 'gantrydivider-30517',
    81 => 'gantrydivider-30518',
    82 => 'gantrydivider-30519',
    83 => 'gantrydivider-30520',
    84 => 'gantrydivider-20012',
    85 => 'gantrydivider-20013',
    86 => 'gantrydivider-20014',
    87 => 'gantrydivider-20015',
    88 => 'gantrydivider-20016',
    89 => 'gantrydivider-20511',
    90 => 'gantrydivider-20512',
    91 => 'gantrydivider-20513',
    92 => 'gantrydivider-20514',
    93 => 'gantrydivider-20515',
    94 => 'gantrydivider-20516',
    95 => 'gantrydivider-20517',
    96 => 'gantrydivider-20518',
    97 => 'gantrydivider-20519',
    98 => 'gantrydivider-20520',
    99 => 'gantrydivider-20521',
    100 => 'gantrydivider-20522',
    101 => 'gantrydivider-20523',
    102 => 'gantrydivider-20524',
    103 => 'gantrydivider-20525',
    104 => 'gantrydivider-20526',
    105 => 'gantrydivider-20527',
    106 => 'gantrydivider-20528',
    107 => 'gantrydivider-20529',
    108 => 'gantrydivider-20530',
    109 => 'gantrydivider-20531',
    110 => 'gantrydivider-20532',
    111 => 'gantrydivider-20533',
    112 => 'gantrydivider-20534',
    113 => 'gantrydivider-20535',
    114 => 'gantrydivider-20536',
    115 => 'gantrydivider-20537',
    116 => 'gantrydivider-20538',
    117 => 'gantrydivider-20539',
    118 => 'gantry_meta-31003',
    119 => 'gantry_meta-31004',
    120 => 'gantry_meta-20503',
    121 => 'gantry_recentcomments-30503',
    122 => 'gantry_viewswitcher-20503',
    123 => 'gantry_logo-20503',
    124 => 'gantry_menu-31005',
    125 => 'gantry_menu-30506',
    126 => 'gantry_menu-20504',
    127 => 'gantry_menu-20505',
    128 => 'gantry_menu-20506',
    129 => 'gantry_copyright-20502',
    130 => 'gantry_loginbutton-20502',
    131 => 'gantry_loginform-20502',
    132 => 'gantry_resetsettings-20502',
    133 => 'gantry_totop-20502',
    134 => 'gantry_archives-20502',
    135 => 'gantry_breakcrumbs-20502',
    136 => 'gantry_categories-20502',
    137 => 'gantry_date-20502',
    138 => 'gantrydivider-20510',
    139 => 'gantry_fontsizer-20502',
    140 => 'gantry_links-20502',
    141 => 'gantry_meta-20502',
    142 => 'gantry_overrides_map-20502',
    143 => 'gantry_pages-20502',
    144 => 'gantry_recentcomments-20502',
    145 => 'gantry_recentposts-20502',
    146 => 'gantry_viewswitcher-20502',
    147 => 'gantry_iphonemenu-20502',
    148 => 'gantry_menu-20502',
    149 => 'gantry_logo-20502',
    150 => 'rokajaxsearch-20502',
    151 => 'widget-roktabs-20502',
    152 => 'pages-20502',
    153 => 'calendar-20502',
    154 => 'links-20502',
    155 => 'text-20502',
    156 => 'rss-20502',
    157 => 'tag_cloud-20502',
    158 => 'nav_menu-20502',
    159 => 'search-20502',
    160 => 'recent-posts-20502',
    161 => 'recent-comments-20502',
    162 => 'archives-20502',
    163 => 'categories-20502',
    164 => 'meta-20502',
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-sidebar-4',array (
  'top' => 
  array (
    0 => 'text-60057',
    1 => 'gantrydivider-60546',
    2 => 'text-60058',
    3 => 'gantrydivider-60547',
    4 => 'text-60059',
    5 => 'gantrydivider-60549',
    6 => 'text-60060',
    7 => 'gantrydivider-60548',
    8 => 'text-60061',
    9 => 'gantrydivider-60550',
    10 => 'text-60062',
  ),
  'header' => 
  array (
    0 => 'gantry_logo-61005',
  ),
  'showcase' => 
  array (
    0 => 'text-60066',
    1 => 'gantrydivider-60553',
    2 => 'text-60067',
    3 => 'gantrydivider-60554',
    4 => 'text-60068',
    5 => 'gantrydivider-60552',
    6 => 'text-60069',
  ),
  'utility' => 
  array (
    0 => 'text-60070',
    1 => 'gantrydivider-61045',
    2 => 'gantry_loginbutton-40504',
    3 => 'gantrydivider-60555',
    4 => 'text-60071',
    5 => 'gantrydivider-60556',
    6 => 'text-60072',
    7 => 'gantrydivider-60557',
    8 => 'text-60074',
    9 => 'gantrydivider-60558',
    10 => 'text-60073',
  ),
  'feature' => 
  array (
    0 => 'text-60075',
    1 => 'gantrydivider-60561',
    2 => 'text-60076',
    3 => 'gantrydivider-60560',
    4 => 'text-60077',
    5 => 'gantrydivider-60559',
    6 => 'text-60078',
    7 => 'gantrydivider-60563',
    8 => 'text-60079',
    9 => 'gantrydivider-60562',
    10 => 'text-60080',
  ),
  'maintop' => 
  array (
    0 => 'text-60081',
    1 => 'gantrydivider-60565',
    2 => 'text-60082',
    3 => 'gantrydivider-60566',
    4 => 'text-60083',
    5 => 'gantrydivider-60564',
    6 => 'text-60084',
  ),
  'sidebar' => 
  array (
    0 => 'text-60091',
    1 => 'text-60092',
    2 => 'text-60095',
    3 => 'text-60098',
    4 => 'gantrydivider-61047',
    5 => 'text-60090',
    6 => 'text-60093',
    7 => 'text-60096',
    8 => 'text-60099',
    9 => 'gantrydivider-61046',
    10 => 'text-60089',
    11 => 'text-60094',
    12 => 'text-60097',
    13 => 'text-60100',
  ),
  'content-top' => 
  array (
    0 => 'text-60085',
    1 => 'gantrydivider-60567',
    2 => 'text-60086',
  ),
  'content-bottom' => 
  array (
    0 => 'text-60088',
    1 => 'gantrydivider-60568',
    2 => 'text-60087',
  ),
  'mainbottom' => 
  array (
    0 => 'text-60101',
    1 => 'gantrydivider-61048',
    2 => 'text-60102',
    3 => 'gantrydivider-61049',
    4 => 'text-60103',
    5 => 'gantrydivider-61050',
    6 => 'text-60104',
  ),
  'bottom' => 
  array (
    0 => 'text-60105',
    1 => 'gantrydivider-61051',
    2 => 'text-60116',
    3 => 'gantrydivider-61055',
    4 => 'text-60115',
    5 => 'gantrydivider-61054',
    6 => 'text-60113',
    7 => 'gantrydivider-61053',
    8 => 'text-60114',
    9 => 'gantrydivider-61052',
    10 => 'text-60106',
  ),
  'footer-position' => 
  array (
    0 => 'text-60112',
    1 => 'gantrydivider-61057',
    2 => 'text-60107',
    3 => 'gantrydivider-61058',
    4 => 'text-60108',
    5 => 'gantrydivider-61060',
    6 => 'text-60109',
    7 => 'gantrydivider-61056',
    8 => 'text-60110',
    9 => 'gantrydivider-61059',
    10 => 'text-60111',
  ),
  'copyright' => 
  array (
    0 => 'gantry_viewswitcher-61005',
    1 => 'gantry_copyright-61005',
    2 => 'gantry_resetsettings-40504',
    3 => 'text-60117',
  ),
  'wp_inactive_widgets' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-widgets-1',array (
  'widget_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_calendar' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_meta' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_search' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    2 => 
    array (
    ),
    20057 => 
    array (
      'title' => 'Site Information',
      'text' => '<p><em class="bold">Example Site Only.</em></p>
<p>All demo content is for demonstration purposes only, intended to show a representative example of a live site.</p>
<a class="readon" href="#"><span>Read More</span></a>						',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20058 => 
    array (
      'title' => 'Theme Guides',
      'text' => '<p><em class="bold">Crystalline Tutorials.</em></p>
<p>Documentation covering many aspects on how to use the October 2010 theme from installation to logo editing instructions.</p>
<a class="readon" href="#"><span>Read This Demo Content</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20059 => 
    array (
      'title' => 'Demo Launcher',
      'text' => '<p><em class="bold">Installable Demo Copy</em></p>
<p>Download our RocketLauncher package to install an exact copy / replica of the Crystalline demo on your own server or domain.</p>
<a class="readon" href="#"><span>Learn More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20060 => 
    array (
      'title' => 'XHTML/CSS3 Valid',
      'text' => '<p><em class="bold">Validate Crystalline Live</em></p>
<p>The template is fully compliant with the <strong>XHTML 1.0 Transitional</strong> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fdemo.rockettheme.com%2Fwordpress%2Fwp_crystalline&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;lang=en" target="_blank">CSS3 standards</a>, as set by the World Wide Web Consortium.</p>
<a class="readon" href="http://validator.w3.org/check?uri=http://demo.rockettheme.com/wordpress/wp_crystalline/"><span>Validate (HTML)</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20061 => 
    array (
      'title' => 'About Us',
      'text' => '<p><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/rt1.jpg" alt="Oct10 Demo Image" class="demo-fp-img"></p>
<p><em class="bold">Delivering versatile WordPress themes since Oct 2009.</em></p>
<p>Crystalline is a creation built using our new feature rich Gantry Framework. Unleash the WordPress power!</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg3',
    ),
    20062 => 
    array (
      'title' => 'Color Chooser',
      'text' => '<p><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-a.jpg" alt="Oct10 Demo Image" class="demo-fp-img"></p>
<p>
	<em class="bold">Customize the theme live with the Color Chooser.</em>
	<br>
	Save your custom presets by logging in as Admin.
</p>
<p><a class="readon" href="#"><span>Read More</span></a></p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20063 => 
    array (
      'title' => 'Updated RokTabs',
      'text' => '<p><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-b.jpg" alt="Oct10 Demo Image" class="demo-fp-img"></p>
<p>
	<em class="bold">RokTabs now supports inline icons for each Tab.</em>
	<br>
	Dynamic controls in its settings allow for easy icon assignment.
</p>
<p><a class="readon" href="#"><span>Read More</span></a></p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20064 => 
    array (
      'title' => 'Built with the Gantry Framework',
      'text' => '<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-1.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/><span class="demo-sep">&nbsp;</span>
<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-2.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/><span class="demo-sep">&nbsp;</span>
<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-3.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/>
<div class="demo-horiz-sep"></div>
<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-4.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/><span class="demo-sep">&nbsp;</span>
<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-5.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/><span class="demo-sep">&nbsp;</span>
<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ft-c-6.jpg" alt="Oct10 Demo Image" class="demo-fp-img demo-left"/>
<div class="demo-horiz-sep"></div>
<p><a class="readon" href="#"><span>Read More</span></a></p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    20065 => 
    array (
      'title' => 'Latest Upload',
      'text' => '<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ct-b.jpg" alt="Oct10 Demo Image"/>',
      'filter' => false,
      'widgetstyle' => 'flushbottom',
      'variation' => '',
    ),
    20066 => 
    array (
      'title' => 'Advanced Menu Options',
      'text' => '<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ct-a-1.jpg" alt="Oct10 Demo Image" class="demo-fp-img img-left">
<span>
	<em class="bold">Fusion Menu, Mootools powered CSS menu.</em>
	<br>
	SEO friendly JS enhanced CSS dropdown system.
</span>
<div class="ct-read"><a class="readon" href="#"><span>More</span></a></div>',
      'filter' => false,
      'widgetstyle' => 'flushbottom',
      'variation' => '',
    ),
    20067 => 
    array (
      'title' => '',
      'text' => '<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_crystalline_wp/frontpage/ct-a-3.jpg" alt="Mar10 Demo Image" class="demo-fp-img img-left"/>
<span>
	<em class="bold">Splitmenu, a Versatile and Functional menu.</em>
	<br>
	A traditional, separated 1st and 2nd tier menu system.
</span>
<div class="ct-read"><p><a class="readon" href="#"><span>More</span></a></p></div>',
      'filter' => false,
      'widgetstyle' => 'flushtop',
      'variation' => '',
    ),
    20068 => 
    array (
      'title' => '',
      'text' => '<p><em class="bold">Cross Browser Compatible</em></p>
<p>This theme is compatible with the major and modern browsers, plus limited support for IE6.</p>
<a class="readon" href="#"><span>Learn More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_categories' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-posts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-comments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rss' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_tag_cloud' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_nav_menu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_widget-roktabs' => 
  array (
    2 => 
    array (
    ),
    10004 => 
    array (
      'title' => '',
      'roktabs_width' => '960',
      'roktabs_tabs_count' => '6',
      'roktabs_cat' => 'roktabs',
      'roktabs_content' => 'content',
      'roktabs_order' => 'date',
      'roktabs_pos' => 'bottom',
      'roktabs_duration' => '600',
      'roktabs_transition_type' => 'scrolling',
      'roktabs_link_margin' => '0',
      'roktabs_autoplay' => '0',
      'roktabs_autoplay_delay' => '2000',
      'roktabs_effect' => 'Quad.easeInOut',
      'roktabs_mouse' => 'click',
      'roktabs_show_icon' => '1',
      'roktabs_icon_side' => 'left',
      'widgetstyle' => 'flush',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_colorchooser' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_copyright' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginbutton' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_resetsettings' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_totop' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_categories' => 
  array (
    2 => 
    array (
    ),
    10003 => 
    array (
      'title' => 'Categories',
      'dropdown' => '0',
      'orderby' => 'name',
      'menu_class' => 'menu',
      'show_count' => '0',
      'hierarchical' => '1',
      'hide_empty' => '1',
      'exclude' => '',
      'depth' => '0',
      'widgetstyle' => '',
      'variation' => 'bg5',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_date' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    2 => 
    array (
    ),
    20542 => 
    array (
    ),
    20543 => 
    array (
    ),
    20544 => 
    array (
    ),
    20546 => 
    array (
    ),
    20547 => 
    array (
    ),
    20548 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_fontsizer' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    2 => 
    array (
    ),
    20507 => 
    array (
      'title' => 'Meta',
      'menu_class' => 'menu',
      'widgetstyle' => '',
      'variation' => 'bg2',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_overrides_map' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentcomments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentposts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_viewswitcher' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_logo' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_iphonemenu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    2 => 
    array (
    ),
    20511 => 
    array (
      'title' => 'Site Navigation',
      'nav_menu' => 'main-menu',
      'theme' => 'crystalline_splitmenu',
      'limit_levels' => '1',
      'startLevel' => '0',
      'endLevel' => '1',
      'showAllChildren' => '0',
      'show_empty_menu' => '0',
      'maxdepth' => '10',
      'fusion_load_css' => '0',
      'fusion_enable_js' => '1',
      'fusion_opacity' => '1',
      'fusion_effect' => 'slidefade',
      'fusion_hidedelay' => '500',
      'fusion_menu_animation' => 'Sine.easeOut',
      'fusion_menu_duration' => '200',
      'fusion_pill' => '0',
      'fusion_pill_animation' => 'Sine.easeOut',
      'fusion_pill_duration' => '250',
      'fusion_centeredOffset' => '0',
      'fusion_tweakInitial_x' => '0',
      'fusion_tweakInitial_y' => '-1',
      'fusion_tweakSubsequent_x' => '1',
      'fusion_tweakSubsequent_y' => '-1',
      'fusion_enable_current_id' => '0',
      'menu_suffix' => '',
      'widgetstyle' => '',
      'variation' => 'bg1',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-widgets-2',array (
  'widget_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_calendar' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_meta' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_search' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_categories' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-posts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-comments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rss' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_tag_cloud' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_nav_menu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_widget-roktabs' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    2 => 
    array (
    ),
    30004 => 
    array (
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_colorchooser' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_copyright' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginbutton' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_resetsettings' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_totop' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_categories' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_date' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_fontsizer' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_overrides_map' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentcomments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentposts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_viewswitcher' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_logo' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_iphonemenu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-override-widgets-4',array (
  'widget_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_calendar' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_meta' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_search' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    2 => 
    array (
    ),
    60057 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60058 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60059 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60060 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60061 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60062 => 
    array (
      'title' => 'Top',
      'text' => '<p>The <a href="javascript:void(0);">Top</a> position, using its <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60066 => 
    array (
      'title' => 'Showcase',
      'text' => '<p>This is the <a href="javascript:void(0);">Showcase</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60067 => 
    array (
      'title' => 'Showcase',
      'text' => '<p>This is the <a href="javascript:void(0);">Showcase</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60068 => 
    array (
      'title' => 'Showcase',
      'text' => '<p>This is the <a href="javascript:void(0);">Showcase</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60069 => 
    array (
      'title' => 'Showcase',
      'text' => '<p>This is the <a href="javascript:void(0);">Showcase</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60070 => 
    array (
      'title' => 'Utility',
      'text' => '<p>This is the <a href="javascript:void(0);">Utility</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60071 => 
    array (
      'title' => 'Utility',
      'text' => '<p>This is the <a href="javascript:void(0);">Utility</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60072 => 
    array (
      'title' => 'Utility',
      'text' => '<p>This is the <a href="javascript:void(0);">Utility</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60073 => 
    array (
      'title' => 'Utility',
      'text' => '<p>This is the <a href="javascript:void(0);">Utility</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60074 => 
    array (
      'title' => 'Utility',
      'text' => '<p>This is the <a href="javascript:void(0);">Utility</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60075 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60076 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60077 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60078 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60079 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60080 => 
    array (
      'title' => 'Feature',
      'text' => '<p>This is the <a href="javascript:void(0);">Feature</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60081 => 
    array (
      'title' => 'MainTop',
      'text' => '<p>This is the <a href="javascript:void(0);">MainTop</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60082 => 
    array (
      'title' => 'MainTop',
      'text' => '<p>This is the <a href="javascript:void(0);">MainTop</a> widget position, using <strong>Background 1</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg1',
    ),
    60083 => 
    array (
      'title' => 'MainTop',
      'text' => '<p>This is the <a href="javascript:void(0);">MainTop</a> widget position, using <strong>Background 2</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg2',
    ),
    60084 => 
    array (
      'title' => 'Background 3',
      'text' => '<p>This is the <a href="javascript:void(0);">MainTop</a> widget position, using <strong>Background 3</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg3',
    ),
    60085 => 
    array (
      'title' => 'Content Top',
      'text' => '<p>This is the <a href="javascript:void(0);">Content Top</a> widget position, using <strong>Background 4</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg4',
    ),
    60086 => 
    array (
      'title' => 'Content Top',
      'text' => '<p>This is the <a href="javascript:void(0);">Content Top</a> widget position, using <strong>Background 5</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg5',
    ),
    60087 => 
    array (
      'title' => 'Content Bottom',
      'text' => '<p>This is the <a href="javascript:void(0);">Content Bottom</a> widget position, using <strong>basic</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'basic',
    ),
    60088 => 
    array (
      'title' => 'Content Bottom',
      'text' => '<p>This is the <a href="javascript:void(0);">Content Bottom</a> widget position, using <strong>default</strong> widget styling.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg5',
    ),
    60089 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Background 2</strong> widget class suffix.</p>
<p>Lorem ipsum dolor sit amet, consec tetur adipi scing elit. Donec sit amet nibh sadir.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg2',
    ),
    60090 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Background 1</strong> widget class suffix.</p>
<p>Lorem ipsum dolor sit amet, consec tetur adipi scing elit. Donec sit amet nibh sadir.</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg1',
    ),
    60091 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>All <strong>Sidebar</strong> positions can be alternated, such as <strong>Side <em>Main</em> Side Side</strong>.</p>
<p>This is done via a sliding configuration option in the theme settings</p>
<a class="readon" href="#"><span>Read More</span></a>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60092 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Background 3</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg3',
    ),
    60093 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Background 4</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg4',
    ),
    60094 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Background 5</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg5',
    ),
    60095 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60096 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Title 1</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'title1',
    ),
    60097 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Title 2</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'title2',
    ),
    60098 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Title 3</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'title3',
    ),
    60099 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Title 4</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'title4',
    ),
    60100 => 
    array (
      'title' => 'Sidebar',
      'text' => '<p>The <a href="javascript:void(0);">Sidebar</a> position, using the <strong>Title 5</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'title5',
    ),
    60101 => 
    array (
      'title' => 'MainBottom',
      'text' => '<p>The <a href="javascript:void(0);">MainBottom</a> position, using the <strong>Background 3</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg3',
    ),
    60102 => 
    array (
      'title' => 'MainBottom',
      'text' => '<p>The <a href="javascript:void(0);">MainBottom</a> position, using the <strong>Background 2</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg2',
    ),
    60103 => 
    array (
      'title' => 'MainBottom',
      'text' => '<p>The <a href="javascript:void(0);">MainBottom</a> position, using the <strong>Background 1</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => 'bg1',
    ),
    60104 => 
    array (
      'title' => 'MainBottom',
      'text' => '<p>The <a href="javascript:void(0);">MainBottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60105 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60106 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60107 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60108 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60109 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60110 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60111 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60112 => 
    array (
      'title' => 'Footer',
      'text' => '<p>The <a href="javascript:void(0);">Footer</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60113 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60114 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60115 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60116 => 
    array (
      'title' => 'Bottom',
      'text' => '<p>The <a href="javascript:void(0);">Bottom</a> position, using the <strong>default</strong> widget class suffix.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    60117 => 
    array (
      'title' => 'Copyright Widget Position - Default Styling',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at sem ut ipsum vestibulum euismod. Mauris et massa porta leo facilisis feugiat. Suspendisse id neque a sem facilisis blandit. Aliquam sem leo, commodo ut, rutrum auctor, iaculis nec, eros. Aenean massa. Mauris tincidunt. Vivamus consectetur, tortor sit amet dictum sagittis, urna lectus dapibus metus, ut congue ligula odio sed nunc. Suspendisse potenti.</p>',
      'filter' => false,
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_categories' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-posts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_recent-comments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rss' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_tag_cloud' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_nav_menu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_widget-roktabs' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_colorchooser' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_copyright' => 
  array (
    2 => 
    array (
    ),
    61005 => 
    array (
      'text' => 'Designed by RocketTheme',
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_links' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginbutton' => 
  array (
    2 => 
    array (
    ),
    40504 => 
    array (
      'title' => '',
      'logintext' => 'Member Login',
      'logouttext' => 'Logout',
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_resetsettings' => 
  array (
    2 => 
    array (
    ),
    40504 => 
    array (
      'text' => 'Reset Settings',
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_totop' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_viewswitcher' => 
  array (
    2 => 
    array (
    ),
    61005 => 
    array (
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_archives' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_categories' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_date' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    2 => 
    array (
    ),
    60546 => 
    array (
    ),
    60547 => 
    array (
    ),
    60548 => 
    array (
    ),
    60549 => 
    array (
    ),
    60550 => 
    array (
    ),
    60552 => 
    array (
    ),
    60553 => 
    array (
    ),
    60554 => 
    array (
    ),
    61045 => 
    array (
    ),
    60555 => 
    array (
    ),
    60556 => 
    array (
    ),
    60557 => 
    array (
    ),
    60558 => 
    array (
    ),
    60559 => 
    array (
    ),
    60560 => 
    array (
    ),
    60561 => 
    array (
    ),
    60562 => 
    array (
    ),
    60563 => 
    array (
    ),
    60564 => 
    array (
    ),
    60565 => 
    array (
    ),
    60566 => 
    array (
    ),
    60567 => 
    array (
    ),
    60568 => 
    array (
    ),
    61046 => 
    array (
    ),
    61047 => 
    array (
    ),
    61048 => 
    array (
    ),
    61049 => 
    array (
    ),
    61050 => 
    array (
    ),
    61051 => 
    array (
    ),
    61052 => 
    array (
    ),
    61053 => 
    array (
    ),
    61054 => 
    array (
    ),
    61055 => 
    array (
    ),
    61056 => 
    array (
    ),
    61057 => 
    array (
    ),
    61058 => 
    array (
    ),
    61059 => 
    array (
    ),
    61060 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_fontsizer' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_meta' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_overrides_map' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_pages' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentcomments' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_recentposts' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_logo' => 
  array (
    2 => 
    array (
    ),
    61005 => 
    array (
      'perstyle' => '1',
      'css' => 'body #rt-logo',
      'widgetstyle' => '',
      'variation' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_iphonemenu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    2 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_crystalline_wp-template-options-overrides', 'filter_token_url', 10, 2);

        update_option('rt_crystalline_wp-template-options-overrides',array (
  1 => 'FrontPage',
  2 => 'Breadcrumbs',
  3 => 'No Texturize',
  4 => 'Widget Variations',
));

        remove_filter('pre_update_option_rt_crystalline_wp-template-options-overrides', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        update_option('rokajaxsearch_options',array (
  'theme' => 'light',
  'load_custom_css' => '1',
  'google_api' => '',
  'show_description' => '1',
  'show_readmore' => '1',
  'read_more' => 'Read More ...',
  'hide_divs' => '',
  'display_content' => 'excerpt',
  'order' => 'date',
  'per_page' => '3',
  'limit' => '10',
  'google_web' => '1',
  'google_blog' => '0',
  'google_images' => '0',
  'google_video' => '0',
  'image_size' => 'MEDIUM',
  'safesearch' => 'MODERATE',
  'pagination' => '1',
  'show_category' => '1',
  'show_estimated' => '1',
  'include_link' => '1',
));

        remove_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokbox_options', 'filter_token_url', 10, 2);

        update_option('rokbox_options',array (
  'theme' => 'light',
  'custom_theme' => 'sample',
  'custom_settings' => '0',
  'width' => '640',
  'height' => '460',
  'transition' => 'Quad.easeOut',
  'duration' => '200',
  'chase' => '40',
  'effect' => 'quicksilver',
  'frame-border' => '20',
  'content-padding' => '0',
  'arrows-height' => '35',
  'captions' => '1',
  'captionsDelay' => '800',
  'scrolling' => '0',
  'keyEvents' => '1',
  'overlay_background' => '#000000',
  'overlay_opacity' => '0.85',
  'overlay_duration' => '200',
  'overlay_transition' => 'Quad.easeInOut',
  'autoplay' => 'true',
  'ytautoplay' => '0',
  'ythighquality' => '0',
  'controller' => 'true',
  'bgcolor' => '#f3f3f3',
  'vimeoColor' => '00adef',
  'vimeoPortrait' => '0',
  'vimeoTitle' => '0',
  'vimeoFullScreen' => '1',
  'vimeoByline' => '0',
));

        remove_filter('pre_update_option_rokbox_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokmenu_menu_items', 'filter_token_url', 10, 2);

        update_option('rokmenu_menu_items',array (
  0 => 
  array (
    152 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    153 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    154 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    155 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    156 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    157 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    158 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    159 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    160 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    161 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    162 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    163 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    164 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    165 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    166 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    167 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    168 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    169 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    170 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    171 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    172 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    173 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    174 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    175 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    176 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    177 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    178 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    179 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    180 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    181 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    182 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    183 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    184 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    185 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    186 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    187 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    188 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    189 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
    190 => 
    array (
      'gantrymenu_subtext' => NULL,
      'gantrymenu_icon' => NULL,
    ),
  ),
  22 => 
  array (
    174 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    175 => 
    array (
      'gantrymenu_subtext' => 'Subtext Test',
      'gantrymenu_icon' => '/rt/reaction/wp-content/themes/wp_reaction/images/icons/icon-check.png',
    ),
    176 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    177 => 
    array (
      'gantrymenu_subtext' => 'Blah',
      'gantrymenu_icon' => '/rt/reaction/wp-content/themes/wp_reaction/images/icons/icon-crank.png',
    ),
    178 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    179 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    180 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    181 => 
    array (
      'gantrymenu_subtext' => 'Something',
      'gantrymenu_icon' => '/rt/reaction/wp-content/themes/wp_reaction/images/icons/icon-key2.png',
    ),
    182 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    183 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    184 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    185 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    186 => 
    array (
      'gantrymenu_subtext' => 'Oh really?',
      'gantrymenu_icon' => '/rt/reaction/wp-content/themes/wp_reaction/images/icons/icon-docs.png',
    ),
    187 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    189 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    188 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
    190 => 
    array (
      'gantrymenu_subtext' => '',
      'gantrymenu_icon' => '',
    ),
  ),
));

        remove_filter('pre_update_option_rokmenu_menu_items', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_roknewspager_options', 'filter_token_url', 10, 2);

        update_option('roknewspager_options',array (
  'theme' => 'light',
  'load_custom_css' => '0',
));

        remove_filter('pre_update_option_roknewspager_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_roktabs_options', 'filter_token_url', 10, 2);

        update_option('roktabs_options',array (
  'theme' => 'custom',
  'icons_path' => '__theme__/images/tabs',
));

        remove_filter('pre_update_option_roktabs_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  2 => 
  array (
  ),
  10003 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  10004 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  10005 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        update_option('sidebars_widgets',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'drawer' => 
  array (
  ),
  'top' => 
  array (
  ),
  'header' => 
  array (
    0 => 'gantry_logo-20505',
    1 => 'gantrydivider-20542',
    2 => 'gantry_colorchooser-4',
  ),
  'navigation' => 
  array (
    0 => 'gantry_menu-20509',
  ),
  'showcase' => 
  array (
  ),
  'utility' => 
  array (
    0 => 'rokajaxsearch-10005',
    1 => 'gantrydivider-20545',
    2 => 'gantry_loginbutton-4',
  ),
  'feature' => 
  array (
  ),
  'maintop' => 
  array (
  ),
  'breadcrumb' => 
  array (
  ),
  'sidebar' => 
  array (
    0 => 'gantry_menu-20510',
    1 => 'archives-4',
    2 => 'gantry_meta-20505',
  ),
  'content-top' => 
  array (
  ),
  'content-bottom' => 
  array (
  ),
  'mainbottom' => 
  array (
  ),
  'bottom' => 
  array (
  ),
  'footer-position' => 
  array (
  ),
  'copyright' => 
  array (
    0 => 'gantry_viewswitcher-20505',
    1 => 'gantry_copyright-20505',
    2 => 'gantry_resetsettings-4',
  ),
  'mobile-drawer' => 
  array (
  ),
  'mobile-top' => 
  array (
  ),
  'mobile-header' => 
  array (
  ),
  'mobile-navigation' => 
  array (
    0 => 'gantry_iphonemenu-4',
  ),
  'mobile-showcase' => 
  array (
  ),
  'mobile-footer' => 
  array (
  ),
  'mobile-copyright' => 
  array (
  ),
  'analytics' => 
  array (
  ),
  'debug' => 
  array (
  ),
  'popup' => 
  array (
    0 => 'gantry_loginform-20504',
  ),
  'array_version' => 3,
));

        remove_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        update_option('posts_per_page','4');

        remove_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        update_option('active_plugins',array (
  0 => 'gantry/gantry.php',
  1 => 'wp_rokajaxsearch/rokajaxsearch.php',
  2 => 'wp_rokbox/rokbox.php',
  3 => 'wp_roktabs/roktabs.php',
));

        remove_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        update_option('widget_gantry_logo',array (
  2 => 
  array (
  ),
  20503 => 
  array (
  ),
  20504 => 
  array (
    'perstyle' => '1',
    'css' => 'body #rt-logo',
    'widgetstyle' => '',
    'variation' => '',
  ),
  20505 => 
  array (
    'perstyle' => '1',
    'css' => 'body #rt-logo',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  61005 => 
  array (
    'perstyle' => '1',
    'css' => 'body #rt-logo',
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        update_option('widget_gantrydivider',array (
  10 => 
  array (
  ),
  2 => 
  array (
  ),
  10012 => 
  array (
  ),
  10013 => 
  array (
  ),
  10014 => 
  array (
  ),
  10015 => 
  array (
  ),
  10016 => 
  array (
  ),
  10017 => 
  array (
  ),
  10018 => 
  array (
  ),
  10019 => 
  array (
  ),
  10020 => 
  array (
  ),
  20012 => 
  array (
  ),
  20013 => 
  array (
  ),
  20014 => 
  array (
  ),
  20015 => 
  array (
  ),
  20016 => 
  array (
  ),
  20511 => 
  array (
  ),
  20512 => 
  array (
  ),
  20513 => 
  array (
  ),
  20514 => 
  array (
  ),
  20515 => 
  array (
  ),
  20516 => 
  array (
  ),
  20517 => 
  array (
  ),
  20518 => 
  array (
  ),
  20519 => 
  array (
  ),
  20520 => 
  array (
  ),
  20521 => 
  array (
  ),
  20522 => 
  array (
  ),
  20523 => 
  array (
  ),
  20524 => 
  array (
  ),
  20525 => 
  array (
  ),
  20526 => 
  array (
  ),
  20527 => 
  array (
  ),
  20528 => 
  array (
  ),
  20529 => 
  array (
  ),
  20530 => 
  array (
  ),
  20531 => 
  array (
  ),
  20532 => 
  array (
  ),
  20533 => 
  array (
  ),
  20534 => 
  array (
  ),
  20535 => 
  array (
  ),
  20536 => 
  array (
  ),
  20537 => 
  array (
  ),
  20538 => 
  array (
  ),
  20539 => 
  array (
  ),
  20540 => 
  array (
  ),
  20541 => 
  array (
  ),
  20542 => 
  array (
  ),
  20543 => 
  array (
  ),
  20544 => 
  array (
  ),
  20545 => 
  array (
  ),
  '_multiwidget' => 1,
  20546 => 
  array (
  ),
  20547 => 
  array (
  ),
  20548 => 
  array (
  ),
  60546 => 
  array (
  ),
  60547 => 
  array (
  ),
  60548 => 
  array (
  ),
  60549 => 
  array (
  ),
  60550 => 
  array (
  ),
  61042 => 
  array (
  ),
  60551 => 
  array (
  ),
  60552 => 
  array (
  ),
  60553 => 
  array (
  ),
  60554 => 
  array (
  ),
  61045 => 
  array (
  ),
  60555 => 
  array (
  ),
  60556 => 
  array (
  ),
  60557 => 
  array (
  ),
  60558 => 
  array (
  ),
  60559 => 
  array (
  ),
  60560 => 
  array (
  ),
  60561 => 
  array (
  ),
  60562 => 
  array (
  ),
  60563 => 
  array (
  ),
  60564 => 
  array (
  ),
  60565 => 
  array (
  ),
  60566 => 
  array (
  ),
  60567 => 
  array (
  ),
  60568 => 
  array (
  ),
  61046 => 
  array (
  ),
  61047 => 
  array (
  ),
  61048 => 
  array (
  ),
  61049 => 
  array (
  ),
  61050 => 
  array (
  ),
  61051 => 
  array (
  ),
  61052 => 
  array (
  ),
  61053 => 
  array (
  ),
  61054 => 
  array (
  ),
  61055 => 
  array (
  ),
  61056 => 
  array (
  ),
  61057 => 
  array (
  ),
  61058 => 
  array (
  ),
  61059 => 
  array (
  ),
  61060 => 
  array (
  ),
));

        remove_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_colorchooser', 'filter_token_url', 10, 2);

        update_option('widget_gantry_colorchooser',array (
  2 => 
  array (
  ),
  3 => 
  array (
    'text' => 'Color Chooser',
    'widgetstyle' => '',
    'variation' => '',
  ),
  4 => 
  array (
    'text' => 'Color Chooser',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  40504 => 
  array (
    'text' => 'Color Chooser',
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_colorchooser', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        update_option('widget_gantry_menu',array (
  2 => 
  array (
  ),
  10505 => 
  array (
  ),
  10006 => 
  array (
    'title' => 'Main Menu',
    'nav_menu' => 'main-menu',
    'theme' => 'kinetic_splitmenu',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '10',
    'fusion_tweakInitial_y' => '8',
    'fusion_tweakSubsequent_x' => '0',
    'fusion_tweakSubsequent_y' => '2',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => 'box5',
  ),
  20504 => 
  array (
  ),
  20505 => 
  array (
  ),
  20506 => 
  array (
    'title' => '',
    'nav_menu' => 'main-menu',
    'theme' => 'kinetic_splitmenu',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '1',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '10',
    'fusion_tweakInitial_y' => '8',
    'fusion_tweakSubsequent_x' => '0',
    'fusion_tweakSubsequent_y' => '2',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => 'top',
    'widgetstyle' => 'flush',
    'variation' => '',
  ),
  20507 => 
  array (
    'title' => '',
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_fusion',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '0',
    'fusion_tweakInitial_y' => '-1',
    'fusion_tweakSubsequent_x' => '1',
    'fusion_tweakSubsequent_y' => '-1',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  20508 => 
  array (
    'title' => 'Main Menu',
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_splitmenu',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '0',
    'fusion_tweakInitial_y' => '-1',
    'fusion_tweakSubsequent_x' => '1',
    'fusion_tweakSubsequent_y' => '-1',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => 'title1',
  ),
  20509 => 
  array (
    'title' => '',
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_fusion',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '0',
    'fusion_tweakInitial_y' => '-1',
    'fusion_tweakSubsequent_x' => '1',
    'fusion_tweakSubsequent_y' => '-1',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  20510 => 
  array (
    'title' => 'Main Menu',
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_splitmenu',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '0',
    'fusion_tweakInitial_y' => '-1',
    'fusion_tweakSubsequent_x' => '1',
    'fusion_tweakSubsequent_y' => '-1',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => 'title1',
  ),
  '_multiwidget' => 1,
  20511 => 
  array (
    'title' => 'Site Navigation',
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_splitmenu',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '0',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'fusion_load_css' => '0',
    'fusion_enable_js' => '1',
    'fusion_opacity' => '1',
    'fusion_effect' => 'slidefade',
    'fusion_hidedelay' => '500',
    'fusion_menu_animation' => 'Sine.easeOut',
    'fusion_menu_duration' => '200',
    'fusion_pill' => '0',
    'fusion_pill_animation' => 'Sine.easeOut',
    'fusion_pill_duration' => '250',
    'fusion_centeredOffset' => '0',
    'fusion_tweakInitial_x' => '0',
    'fusion_tweakInitial_y' => '-1',
    'fusion_tweakSubsequent_x' => '1',
    'fusion_tweakSubsequent_y' => '-1',
    'fusion_enable_current_id' => '0',
    'menu_suffix' => '',
    'widgetstyle' => '',
    'variation' => 'bg1',
  ),
));

        remove_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  2 => 
  array (
  ),
  10003 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  10004 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  10005 => 
  array (
    'title' => '',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_loginbutton', 'filter_token_url', 10, 2);

        update_option('widget_gantry_loginbutton',array (
  2 => 
  array (
  ),
  3 => 
  array (
    'title' => '',
    'logintext' => 'Member Login',
    'logouttext' => 'Logout',
    'widgetstyle' => '',
    'variation' => '',
  ),
  4 => 
  array (
    'title' => '',
    'logintext' => 'Member Login',
    'logouttext' => 'Logout',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  40504 => 
  array (
    'title' => '',
    'logintext' => 'Member Login',
    'logouttext' => 'Logout',
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_loginbutton', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_archives', 'filter_token_url', 10, 2);

        update_option('widget_archives',array (
  2 => 
  array (
    'title' => '',
    'count' => 0,
    'dropdown' => 0,
  ),
  4 => 
  array (
    'title' => 'Archives',
    'count' => 0,
    'dropdown' => 0,
    'widgetstyle' => '',
    'variation' => 'title3',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_archives', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_meta', 'filter_token_url', 10, 2);

        update_option('widget_gantry_meta',array (
  2 => 
  array (
  ),
  10503 => 
  array (
  ),
  10504 => 
  array (
    'title' => 'Meta',
    'menu_class' => 'menu',
    'widgetstyle' => '',
    'variation' => 'box5',
  ),
  20503 => 
  array (
  ),
  20504 => 
  array (
    'title' => 'Meta',
    'menu_class' => 'menu',
    'widgetstyle' => '',
    'variation' => 'title2',
  ),
  20505 => 
  array (
    'title' => 'Meta',
    'menu_class' => 'menu',
    'widgetstyle' => '',
    'variation' => 'title2',
  ),
  '_multiwidget' => 1,
  20507 => 
  array (
    'title' => 'Meta',
    'menu_class' => 'menu',
    'widgetstyle' => '',
    'variation' => 'bg2',
  ),
));

        remove_filter('pre_update_option_widget_gantry_meta', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_viewswitcher', 'filter_token_url', 10, 2);

        update_option('widget_gantry_viewswitcher',array (
  2 => 
  array (
  ),
  20503 => 
  array (
  ),
  20504 => 
  array (
    'widgetstyle' => '',
    'variation' => '',
  ),
  20505 => 
  array (
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  61005 => 
  array (
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_viewswitcher', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

        update_option('widget_gantry_copyright',array (
  2 => 
  array (
  ),
  20503 => 
  array (
  ),
  20504 => 
  array (
    'text' => 'Designed by RocketTheme',
    'widgetstyle' => '',
    'variation' => '',
  ),
  20505 => 
  array (
    'text' => 'Designed by RocketTheme',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  61005 => 
  array (
    'text' => 'Designed by RocketTheme',
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_resetsettings', 'filter_token_url', 10, 2);

        update_option('widget_gantry_resetsettings',array (
  2 => 
  array (
  ),
  3 => 
  array (
    'text' => 'Reset Settings',
    'widgetstyle' => '',
    'variation' => '',
  ),
  4 => 
  array (
    'text' => 'Reset Settings',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
  40504 => 
  array (
    'text' => 'Reset Settings',
    'widgetstyle' => '',
    'variation' => '',
  ),
));

        remove_filter('pre_update_option_widget_gantry_resetsettings', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_iphonemenu', 'filter_token_url', 10, 2);

        update_option('widget_gantry_iphonemenu',array (
  2 => 
  array (
  ),
  3 => 
  array (
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_touch',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'maxdepth' => '10',
    'touchmenu-animation' => 'cube',
    'widgetstyle' => '',
    'variation' => '',
  ),
  4 => 
  array (
    'nav_menu' => 'main-menu',
    'theme' => 'crystalline_touch',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'maxdepth' => '10',
    'touchmenu-animation' => 'cube',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_iphonemenu', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

        update_option('widget_gantry_loginform',array (
  2 => 
  array (
  ),
  10503 => 
  array (
  ),
  20503 => 
  array (
  ),
  20504 => 
  array (
    'title' => 'Login',
    'user_greeting' => 'Hi,',
    'widgetstyle' => '',
    'variation' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

$gantry_menu_items = array();
function rokimport_get_post_from_guid($guid) {
    global $wpdb;
    $guid = replace_token_url($guid);
    $posts = $wpdb->get_results("SELECT ID FROM " . $wpdb->posts . " WHERE guid = '" . $guid . "'");
    return (count($posts) > 0) ? $posts[0]->ID : 0;
}
function rokimport_get_taxonomy($name, $taxonomy) {
    $taxfield = get_term_by( "slug", $name, $taxonomy);
    return $taxfield->term_id;
}
global $wp_version;
if (version_compare($wp_version,"3.0",">=")){
$importing_menu = wp_get_nav_menu_object("main-menu");$menu_item_mapping = array(0=>0);$menu_item_mapping[1297] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Home','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '1','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/'));$gantry_menu_items["main-menu"][$menu_item_mapping[1297]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1298] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Features','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '2','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=214'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1298]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
);$menu_item_mapping[1299] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Gantry Framework','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '3','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=253'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1299]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1300] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Color Chooser','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => 'Disable the Color Chooser and Overlay Check options on Production Sites. They should only be activated for development purposes, and can be enabled/disabled at Admin Dashboard ??? Crystalline Settings ??? Gizmos.


Crystalline has the amazing new Color Chooser feature, an interactive panel were both users and administrators can quickly change all stylistic aspects of the theme in mere seconds.
Select the Color Chooser button in the header area to activate the popup, you will see the following options:

Presets: Load a prebuilt preset from the dropdown menu
Header: Control the background color, text color, link text color, shadow type, overlay style as well as the header graphic for the Header/Logo/Showcase/Top area.
Main: Control the background color, text color, link text color, shadow type, as well as the overlay style for the Main area (adjacent to the main body).
Feature: Control the background color, text color, link text color, shadow type, as well as the overlay style for the Feature/Utility area.
Body: Control the background color, text color, link text color, shadow type, as well as the overlay style for the Mainbody/Sidebar/MainTop/MainBottom/ContentTop/ContentBottom area.
Bottom: Control the background color, text color, link text color, shadow type, as well as the overlay style for the Bottom/Footer/Copyright area.
Palette: Import a color swatch profile (ASE file), such as those available from Adobe Kuler or Colourlovers.

Saving a New Style

You need to be logged into the frontend of your site as Admin for this to work.

The Crystalline Color Chooser is unique, as it links the style controls of both the frontend popup and the backend Gantry panel, providing you with the ability to save a Preset from the Color Chooser without having to change options in the administrator and manually preview.

Login into the frontend of your site as Admin
Select the Color Chooser button to activate the popup
Configure the options to your liking
Select Save New
On the new window that appears, enter the details of the new style ??? Preset Name &#038; Key Name
Hit Save

   
The option will now appear as a new Preset in the administrator of Gantry at Admin Dashboard ??? Crystalline Settings ??? Preset Styles. Select the Preset and Save for it to be loaded as the theme default style.
Importing a Color Swatch Profile
The Color Chooser has the ability to import .ase files, such as those from Adobe Kuler or Colourlovers. Simply download, load and save.

Download a color swatch profile (.ase file) ??? Available from Adobe Kuler or Colourlovers
Activate the Color Chooser in Crystalline
Select Load under the Palette section
Locate and select the downloaded color profile (.ase file)
The color profile will now be loaded into Crystalline


Saving a Color Swatch Profile
The Color Chooser allows also to export .ase files. All the colors in the Color Chooser are draggable so that you can populate the palette with custom colors of your choice and, if needed, save it on your computer for future uses.

Drag &#038; Drop colors from the sections list to the Palette white boxes.
Click ???Save Palette???
Save on your computer at the desired location
The color profile is now saved and can be loaded again whenever needed','menu-item-xfn' => '','menu-item-position' => '4','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1286'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1300]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1301] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Variations','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '5','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=257'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1301]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1302] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Positions','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '6','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=259'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1302]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1303] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Fusion Menu','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '7','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=261'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1303]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1304] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'post_type','menu-item-title' => 'Integrated Plugins','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '8','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=265'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1304]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1305] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'custom','menu-item-title' => 'Menu Icons','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '9','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1305]] = array (
  'gantrymenu_subtext' => 'Preview Icons',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
);$menu_item_mapping[1306] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Add Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '10','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1306]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-add.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1307] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Arrow Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '11','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1307]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-arrow.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1308] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Briefcase Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '12','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1308]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-briefcase.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1309] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Calendar Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '13','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1309]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-calendar.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1310] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Check Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '14','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1310]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-check.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1311] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Crank Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '15','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1311]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-crank.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1312] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Delete Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '16','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1312]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-delete.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1313] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Docs Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '17','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1313]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-docs.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1314] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Email Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '18','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1314]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-email.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1315] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Home Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '19','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1315]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-home.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1316] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Key Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '20','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1316]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-key.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1317] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Lock Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '21','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1317]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-key1.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1318] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Minus Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '22','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1318]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-minus.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1319] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Monitor Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '23','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1319]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-monitor.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1320] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Notes Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '24','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1320]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-notes.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1321] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Post Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '25','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1321]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-post.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1322] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Printer Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '26','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1322]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-printer.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1323] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'RSS Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '27','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1323]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-rss.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1324] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Unlock Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '28','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1324]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-key2.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1325] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Warning Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '29','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1325]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-warning.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1326] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1305],'menu-item-type' => 'custom','menu-item-title' => 'Write Icon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '30','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1326]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => 'icon-write.png',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1327] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1298],'menu-item-type' => 'custom','menu-item-title' => 'Child Items','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '31','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1327]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1328] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1327],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '32','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1328]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1329] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1327],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '33','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1329]] = array (
  'gantrymenu_subtext' => 'Multi-Column Example',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
);$menu_item_mapping[1330] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '34','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1330]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1331] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '35','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1331]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1332] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '36','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1332]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1333] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '37','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1333]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1334] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '38','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1334]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1335] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '39','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1335]] = array (
  'gantrymenu_subtext' => 'Single Column Example',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1336] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1335],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '40','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1336]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1337] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1335],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '41','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1337]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1338] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1335],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '42','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1338]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1339] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1335],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '43','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1339]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1340] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '44','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1340]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1341] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1329],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '45','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1341]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1342] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1327],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '46','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1342]] = array (
  'gantrymenu_subtext' => 'Single Column Example',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1343] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1342],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '47','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1343]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1344] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1342],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '48','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1344]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1345] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1342],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '49','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1345]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1346] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1345],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '50','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1346]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1347] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1345],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '51','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1347]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1348] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1345],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '52','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1348]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1349] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1348],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '53','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1349]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1350] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1348],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '54','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1350]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1351] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1348],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '55','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1351]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1352] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1348],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '56','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1352]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1353] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1345],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '57','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1353]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1354] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1342],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '58','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1354]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1355] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1327],'menu-item-type' => 'custom','menu-item-title' => 'Child Item','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '59','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[1355]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1356] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Typography','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '60','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=216'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1356]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1357] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1356],'menu-item-type' => 'post_type','menu-item-title' => 'Shortcodes Example','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '61','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=326'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1357]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1358] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1356],'menu-item-type' => 'post_type','menu-item-title' => 'HTML Examples','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '62','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=328'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1358]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1359] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1356],'menu-item-type' => 'post_type','menu-item-title' => 'Using Typography','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '63','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=330'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1359]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1360] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Plugins','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '64','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=218'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1360]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1361] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1360],'menu-item-type' => 'post_type','menu-item-title' => 'RokAjaxSearch','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '65','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=338'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1361]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1362] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1360],'menu-item-type' => 'post_type','menu-item-title' => 'RokBox','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '66','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=344'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1362]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1363] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1360],'menu-item-type' => 'post_type','menu-item-title' => 'RokTabs','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '67','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=340'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1363]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1364] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Tutorials','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '68','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=220'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1364]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
);$menu_item_mapping[1365] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Installation','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '69','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=346'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1365]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1366] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'RocketLauncher','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '70','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=348'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1366]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1367] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Style Control','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '71','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=356'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1367]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1368] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Logo Editing','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '72','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=360'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1368]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1369] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Overrides','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => 'The new Gantry Framework, brings parallels of unheard functionality to WordPress. When WordPress was first born, it is primarily used for blogging, but since then it has evolved towards being a content management system, as well as one of the leading blog softwares available today.

With Gantry you are able to specify different preset styles(called overrides), of which you can assign to menu items, tags, categories, and taxonomies.

How to create an override:

In the Reaction Gantry settings panel, click on the Add button to create the new override, and then the Edit button to change the name. Please remember to press Enter button in order to finish editing new name.



Now you are able to set new options for your new override, like for example the preset style that you would like to use:



You will also notice in the gantry tab, a 1 has appeared. This is to show you how many overrides have been invoked on that tab.

Now that a gantry setting has been overridden, lets assign it to one of the many different types of Assignments that Gantry has to offer, a Menu Item.

Click on the Assignments tab, and you will see various types of assignments that you can use. Now check the Menu Item Features, and click the button below to Add to Assigned, and you will see it in the Assigned Overrides list.



Click Save Changes, and then navigate to the frontend of the site, and click Features on the main menu, and you will see that the style has changed, to the style number that you specified in the override.

You can also assign widgets to different positions as well using Gantry, which allows you to have unprecedented control over how your Wordpress blog???s design and functionality.

You can also assign widgets to different positions as well using Gantry, which allows you to have unprecedented control over how your Wordpress blog???s design and functionality.

To use this functionality, make sure that your new override is set in the override drop box, and click the widget button at the top of the gantry theme settings panel.



You will then be taken to the widget settings page, where you will notice a change in the widget positions names.



You can override a widget position by checking the tick box next to the widget position, and then either remove the widget(s) or add a widget to the override position.','menu-item-xfn' => '','menu-item-position' => '73','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1289'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1369]] = array (
  'gantrymenu_subtext' => NULL,
  'gantrymenu_icon' => NULL,
  'gantrymenu_submenu_cols' => NULL,
);$menu_item_mapping[1370] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Divider and Layouts','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => 'Gantry for WordPress sets the new standards of freedom in WordPress themes.
Thanks to the Layouts slider and Gantry Divider Widget you can create stunning theme content without modifying any code.

How to setup layouts ?



If you go to your theme settings ??? Layout Tab you???ll see a slider that lets you to select the desired column distribution (width) used for that particular widget position. Clicking on numbers above slider (from 1 ??? 6) gives you a possibility to set different column distribution depending on how many widget columns (1 ??? 6) you???ll use in that position. After you???ll click Save Button, Gantry will save layout for all possible layouts at the same time. Please don???t be scared by the fact that after saving changes layouts will switch to the 6 widget variant ??? this is a normal thing, and your settings are still saved.

What is Gantry Divider Widget ?



Gantry Divider is a widget that allows you to set where the widget position should break into another column ie. placing 4 dividers between your other widgets will load the layout that you???ve set in theme settings for that widget position with 4 columns set.



Can I place more than 1 widget between dividers ?

Of course you can! Placing more than one widget before any divider will result in displaying these widgets in rows (one above another).

Do you got a place where I can see the different widgets setup ?

Yes we do. You can go to the demo of the theme, Features ??? Widget Variations page. If you???d like to see how they???re setup and you got RocketLauncher installed you can go to the Widgets page and switch the override (using dropdown list) to the Widget Variations. This will load widget setup used for that page.','menu-item-xfn' => '','menu-item-position' => '74','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=1292'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1370]] = array (
  'gantrymenu_subtext' => NULL,
  'gantrymenu_icon' => NULL,
  'gantrymenu_submenu_cols' => NULL,
);$menu_item_mapping[1371] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'RokBox','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '75','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=362'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1371]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1372] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'RokTabs','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '76','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=366'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1372]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1373] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Translating Theme','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '77','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=368'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1373]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1374] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1364],'menu-item-type' => 'post_type','menu-item-title' => 'Translating Plugins','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '78','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=370'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1374]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1375] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'Preset Styles','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => ' ','menu-item-xfn' => '','menu-item-position' => '79','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=255'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[1375]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '2',
);$menu_item_mapping[1376] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Woody','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '80','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=woody'));$gantry_menu_items["main-menu"][$menu_item_mapping[1376]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1377] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Moderna','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '81','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=moderna'));$gantry_menu_items["main-menu"][$menu_item_mapping[1377]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1378] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Elegance','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '82','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=elegance'));$gantry_menu_items["main-menu"][$menu_item_mapping[1378]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1379] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Military','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '83','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=military'));$gantry_menu_items["main-menu"][$menu_item_mapping[1379]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1380] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Bright Day','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '84','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=brightday'));$gantry_menu_items["main-menu"][$menu_item_mapping[1380]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1381] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Hot Pepper','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '85','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=hotpepper'));$gantry_menu_items["main-menu"][$menu_item_mapping[1381]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1382] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Velvetine','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '86','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=velvetine'));$gantry_menu_items["main-menu"][$menu_item_mapping[1382]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1383] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Mild Pepper','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '87','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=mildpepper'));$gantry_menu_items["main-menu"][$menu_item_mapping[1383]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1384] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Crystalline','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '88','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=crystalline'));$gantry_menu_items["main-menu"][$menu_item_mapping[1384]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1385] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Rich Vintage','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '89','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=richvintage'));$gantry_menu_items["main-menu"][$menu_item_mapping[1385]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1386] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Entrapped','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '90','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=entrapped'));$gantry_menu_items["main-menu"][$menu_item_mapping[1386]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);$menu_item_mapping[1387] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[1375],'menu-item-type' => 'custom','menu-item-title' => 'Butterfly','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '91','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=butterfly'));$gantry_menu_items["main-menu"][$menu_item_mapping[1387]] = array (
  'gantrymenu_subtext' => '',
  'gantrymenu_icon' => '',
  'gantrymenu_submenu_cols' => '1',
);update_option("gantry_menu_items",$gantry_menu_items);}