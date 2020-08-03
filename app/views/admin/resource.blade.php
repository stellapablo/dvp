<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Autos del NEA :: Administrador</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Iconos -->
        {{ HTML::style('admin/images/icons/apple-touch-icon-144-precomposed.png')}}
        {{ HTML::style('admin/images/icons/apple-touch-icon-114-precomposed.png')}}
        {{ HTML::style('admin/images/icons/apple-touch-icon-72-precomposed.png')}}
        {{ HTML::style('admin/images/icons/apple-touch-icon-57-precomposed.png')}}
        {{ HTML::style('admin/images/icons/favicon.png')}}

        <!-- DVP Admin CSS Core -->
        {{ HTML::style('admin/css/minified/aui-production.min.css')}}

        <!-- Theme UI -->
        {{ HTML::style('admin/themes/minified/fides/color-schemes/dark-blue.min.css')}}

        <!-- Admin Responsive -->
        {{ HTML::style('admin/themes/minified/fides/common.min.css')}}
        {{ HTML::style('admin/themes/minified/fides/responsive.min.css')}}

        <!--  Admin JS -->
        {{ HTML::script('admin/js/minified/aui-production.min.js')}}

        <script>
            jQuery(window).load(
                    function() {

                        var wait_loading = window.setTimeout(function() {
                            $('#loading').slideUp('fast');
                            jQuery('body').css('overflow', 'auto');
                        }, 1000
                                );

                    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body style="overflow: hidden;">


        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="" />
        </div>

        <div id="page-wrapper" class="demo-example">

            <div class="theme-customizer">
                <a href="javascript:;" class="change-theme-btn" title="Change theme">
                    <i class="glyph-icon icon-cog"></i>
                </a>
                <div class="theme-wrapper">

                    <div class="popover-title">Boxed layout options</div>
                    <div class="pad10A clearfix">
                        <a class="fluid-layout-btn hidden bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Full width layout</span></a>
                        <a class="boxed-layout-btn bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Boxed layout</span></a>
                    </div>
                    <div class="popover-title">Boxed layout backgrounds</div>
                    <div class="pad10A clearfix">
                        <a href="javascript:;" class="choose-bg" boxed-bg="#000" style="background: #000;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#333" style="background: #333;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#666" style="background: #666;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#888" style="background: #888;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#383d43" style="background: #383d43;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#fafafa" style="background: #fafafa; border: #ccc solid 1px;" title=""></a>
                        <a href="javascript:;" class="choose-bg" boxed-bg="#fff" style="background: #fff; border: #eee solid 1px;" title=""></a>
                    </div>
                    <div class="popover-title">Color schemes</div>
                    <div class="pad10A clearfix change-layout-theme">
                        <p class="font-gray-dark font-size-11 pad0B">More color schemes will be available soon!</p>
                        <div class="divider mrg10T mrg10B"></div>
                        <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="">
                            <span style="background: #2381E9;"></span>
                        </a>
                        <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-blue" title="">
                            <span style="background: #2381E9;"></span>
                        </a>
                        <a href="javascript:;" class="choose-theme" layout-theme="dark-green" title="D">
                            <span style="background: #78CE12;"></span>
                        </a>
                        <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-green" title="D">
                            <span style="background: #78CE12;"></span>
                        </a>
                        <a href="javascript:;" class="choose-theme" layout-theme="dark-orange" title="">
                            <span style="background: #FF6041;"></span>
                        </a>
                        <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-orange" title="">
                            <span style="background: #FF6041;"></span>
                        </a>
                    </div>

                </div>
            </div>

            <div id="page-header" class="clearfix">
                <div id="header-logo">
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-caret-left"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-caret-right"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    ADN Admin v1.0 <i class="opacity-80">1.1</i>
                </div>
                <div class="hide" id="black-modal-60" title="Modal window example">
                    <div class="pad20A">

                        <div class="infobox notice-bg">
                            <div class="bg-azure large btn info-icon">
                                <i class="glyph-icon icon-bullhorn"></i>
                            </div>
                            <h4 class="infobox-title">Modal windows</h4>
                            <p>Thanks to the solid modular Fides Admin arhitecture, modal windows customizations are very flexible and easy to apply.</p>
                        </div>

                        <h4 class="heading-1 mrg20T clearfix">
                            <div class="heading-content" style="width: auto;">
                                Icons
                                <small>
                                    All icons across the Fides Admin Framework use FontAwesome icons.
                                </small>
                            </div>
                            <div class="clear"></div>
                            <div class="divider"></div>
                        </h4>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-compass" href="../icon/compass"><i class="glyph-icon icon-compass"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse" href="../icon/collapse"><i class="glyph-icon icon-collapse"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-collapse-top" href="../icon/collapse-top"><i class="glyph-icon icon-collapse-top"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-expand" href="../icon/expand"><i class="glyph-icon icon-expand"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-eur" href="../icon/eur"><i class="glyph-icon icon-eur"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-euro" href="../icon/eur"><i class="glyph-icon icon-euro"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-gbp" href="javascript:;"><i class="glyph-icon icon-gbp"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-usd" href="javascript:;"><i class="glyph-icon icon-usd"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-dollar" href="javascript:;"><i class="glyph-icon icon-dollar"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-inr" href="javascript:;"><i class="glyph-icon icon-inr"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-rupee" href="javascript:;"><i class="glyph-icon icon-rupee"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-jpy" href="javascript:;"><i class="glyph-icon icon-jpy"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-yen" href="javascript:;"><i class="glyph-icon icon-yen"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-cny" href="javascript:;"><i class="glyph-icon icon-cny"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-renminbi" href="javascript:;"><i class="glyph-icon icon-renminbi"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-krw" href="javascript:;"><i class="glyph-icon icon-krw"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-won" href="javascript:;"><i class="glyph-icon icon-won"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-btc" href="javascript:;"><i class="glyph-icon icon-btc"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-bitcoin" href="javascript:;"><i class="glyph-icon icon-bitcoin"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file" href="javascript:;"><i class="glyph-icon icon-file"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-file-text" href="javascript:;"><i class="glyph-icon icon-file-text"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-alphabet-al" href="javascript:;"><i class="glyph-icon icon-sort-by-alphabet-alt"></i>t</a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attributes" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-attribu" href="javascript:;"><i class="glyph-icon icon-sort-by-attributes-alt"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order" href="javascript:;"><i class="glyph-icon icon-sort-by-order"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-sort-by-order-alt" href="javascript:;"><i class="glyph-icon icon-sort-by-order-alt"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-up" href="javascript:;"><i class="glyph-icon icon-thumbs-up"></i></a>

                        <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="icon-thumbs-down" href="javascript:;"><i class="glyph-icon icon-thumbs-down"></i></a>

                    </div>
                </div>

                <div class="hide" id="white-modal-80" title="Dialog with tabs">
                    <div class="tabs pad15A remove-border opacity-80">
                        <ul class="opacity-80">
                            <li><a href="#example-tabs-1">First</a></li>
                            <li><a href="#example-tabs-2">Second</a></li>
                            <li><a href="#example-tabs-3">Third</a></li>
                        </ul>
                        <div id="example-tabs-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                        <div id="example-tabs-2">
                            <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                        <div id="example-tabs-3">
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                            <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                            </p>
                        </div>
                    </div>
                    <div class="pad10A">
                        <div class="infobox success-bg radius-all-4">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>
                        </div>
                    </div>
                    <div class="ui-dialog-buttonpane clearfix">

                        <a href="dropdown_menus.html" class="btn medium float-left bg-azure">
                            <span class="button-content text-transform-upr font-size-11">Dropdown menus</span>
                        </a>
                        <div class="button-group float-right">
                            <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">
                                <i class="glyph-icon icon-star"></i>
                            </a>
                            <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">
                                <i class="glyph-icon icon-random"></i>
                            </a>
                            <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">
                                <i class="glyph-icon icon-map-marker"></i>
                            </a>
                        </div>
                        <a href="javascript:;" class="medium btn bg-blue-alt float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">
                            <i class="glyph-icon icon-plus"></i>
                        </a>

                    </div>
                </div>
                <div class="user-profile dropdown">
                    <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                        <img width="36" src="assets/images/gravatar.jpg" alt="" />
                        <span>Usuario 1</span>
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu float-right">
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-user mrg5R"></i>
                                Detalles de cuenta
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-cog mrg5R"></i>
                                Edita Perfil
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-flag mrg5R"></i>
                                Notificaciones
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                                <span class="font-bold">Logout</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu float-left">
                            <a href="javascript:;" data-toggle="dropdown" title="">
                                Dropdown menu
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:;" title="">
                                        Submenu 1
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        Submenu 2
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;" title="">
                                        Submenu 3
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:;" title="">
                                                Submenu 2-1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="">
                                                Submenu 2-2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                Another menu item
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="dropdown dash-menu">
                    <a href="javascript:;" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile tooltip-button" title="Example menu">
                        <i class="glyph-icon icon-th"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="small-box">
                            <div class="pad10A dashboard-buttons clearfix">
                                <p class="font-gray-dark font-size-11 pad0B">This menu type can be used in pages, not just popovers.</p>
                                <div class="divider mrg10T mrg10B"></div>
                                <a href="javascript:;" class="btn vertical-button hover-blue-alt" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Avisos</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-green" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Vehiculos</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Publicaciones</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Medios</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Buttons</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Panels</span>
                                </a>
                            </div>

                            <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Dashboard menu</div>
                            <div class="pad10A dashboard-buttons clearfix">
                                <a href="javascript:;" class="btn vertical-button remove-border bg-blue" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Dashboard</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-red" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">ddd</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Tables</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Charts</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-yellow" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Buttons</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Panels</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-icon-bar">
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-blue">8</span>
                            <i class="glyph-icon icon-lightbulb"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="small-box">
                                <div class="popover-title">Boxed layout options</div>
                                <div class="pad10A clearfix">
                                    <a class="fluid-layout-btn hidden bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Full width layout</span></a>
                                    <a class="boxed-layout-btn bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Boxed layout</span></a>
                                </div>
                                <div class="popover-title">Boxed backgrounds</div>
                                <div class="pad10A clearfix">
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#000" style="background: #000;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#333" style="background: #333;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#666" style="background: #666;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#888" style="background: #888;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#383d43" style="background: #383d43;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#fafafa" style="background: #fafafa; border: #ccc solid 1px;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#fff" style="background: #fff; border: #eee solid 1px;" title=""></a>
                                </div>
                                <div class="popover-title">Color schemes</div>
                                <div class="pad10A clearfix change-layout-theme">
                                    <p class="font-gray-dark font-size-11 pad0B">More color schemes will be available soon!</p>
                                    <div class="divider mrg10T mrg10B"></div>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="">
                                        <span style="background: #2381E9;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-blue" title="">
                                        <span style="background: #2381E9;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-green" title="D">
                                        <span style="background: #78CE12;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-green" title="D">
                                        <span style="background: #78CE12;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-orange" title="">
                                        <span style="background: #FF6041;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-orange" title="">
                                        <span style="background: #FF6041;"></span>
                                    </a>
                                </div>

                                <div class="pad10A button-pane button-pane-alt text-center">
                                    <a href="javascript:;" class="btn medium bg-black">
                                        <span class="button-content text-transform-upr font-bold font-size-11">View all</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-orange">4</span>
                            <i class="glyph-icon icon-envelope-alt"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border messages-box">
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt">
                                <a href="messaging.html" class="btn small float-left bg-white">
                                    <span class="button-content text-transform-upr font-size-11">All messages</span>
                                </a>
                                <div class="button-group float-right">
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-star"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-random"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-map-marker"></i>
                                    </a>
                                </div>
                                <a href="javascript:;" class="small btn bg-red float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-green">9</span>
                            <i class="glyph-icon icon-bell"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="popover-title display-block clearfix form-row pad10A">
                                <div class="form-input">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-search transparent"></i>
                                        <input type="text" placeholder="Search notifications..." class="radius-all-100" name="" id="" />
                                    </div>
                                </div>
                            </div>
                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border notifications-box">
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-green btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-green font-bold">A success message example.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-blue btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-blue">Alternate notification styling.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium primary-bg">
                                    <span class="button-content">View all notifications</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-red">2</span>
                            <i class="glyph-icon icon-tasks"></i>
                        </a>
                        <div class="dropdown-menu" id="progress-dropdown">

                            <div class="scrollable-content small-box scrollable-small">

                                <ul class="no-border progress-box">
                                    <li>
                                        <div class="progress-title">
                                            Finishing uploading files
                                            <b>23%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="23">
                                            <div class="progressbar-value bg-blue">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Roadmap progress
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Images upload
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            WordPress migration
                                            <b>74%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="74">
                                            <div class="progressbar-value bg-purple"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Agile development procedures
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Systems integration
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Code optimizations
                                            <b>97%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="97">
                                            <div class="progressbar-value bg-yellow"></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium font-normal bg-green">
                                    <span class="button-content">View all</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- #page-header -->

            <div id="page-sidebar" class="scrollable-content">

                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Avisos
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Components">
                                <i class="glyph-icon icon-code"></i>
                                Publicaciones
                            </a>
                            <ul>
                                <li>
                                    <a href="dashboard_panels.html" title="Dashboard panels">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Dashboard panels
                                    </a>
                                </li>
                                <li>
                                    <a href="social_boxes.html" title="Social boxes">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Social boxes
                                    </a>
                                </li>
                                <li>
                                    <a href="information_boxes.html" title="Information boxes">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Information boxes
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html" title="Chat">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Chat
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html" title="Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="messaging.html" title="Messaging">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Messaging
                                    </a>
                                </li>
                                <li>
                                    <a href="progress_bars.html" title="Progress">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Progress
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Pages">
                                <i class="glyph-icon icon-folder-open"></i>
                                Publicaciones
                            </a>
                            <ul>
                                <li>
                                    <a href="grid.html" title="Grid Layouts">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Grid Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="helper_classes.html" title="Helpers">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Helpers
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 1
                                    </a>
                                </li>
                                <li>
                                    <a href="login-alt.html" title="Login">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Login example 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Widgets">
                                <i class="glyph-icon icon-tags"></i>
                                Medios
                            </a>
                            <ul>
                                <li>
                                    <a href="tabs.html" title="Tabs">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="accordions.html" title="Accordions">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="datepicker.html" title="Datepicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Datepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="timepicker.html" title="Timepicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Timepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="colorpicker.html" title="Colorpicker">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Colorpicker
                                    </a>
                                </li>
                                <li>
                                    <a href="slider.html" title="Sliders">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="jgrowl_notifications.html" title="JGrowl Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        JGrowl Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="noty_notifications.html" title="Noty Notifications">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Noty Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="modal_windows.html" title="Modal Windows">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Modal Windows
                                    </a>
                                </li>
                                <li>
                                    <a href="tooltips.html" title="Tooltips">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Tooltips
                                    </a>
                                </li>
                                <li>
                                    <a href="popovers.html" title="Popovers">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="sortable.html" title="Sortable Elements">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Sortable Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="dropdown_menus.html" title="Dropdown Menus">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Dropdown Menus
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                                <a href="javascript:;" title="Elements">
                                <i class="glyph-icon icon-laptop"></i>
                                Usuarios
                            </a>
                            <ul>
                                <li>
                                    <a href="content_boxes.html" title="Content Boxes">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Content Boxes
                                    </a>
                                </li>
                                <li>
                                    <a href="response_messages.html" title="Response Messages">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Response Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="badges.html" title="Badges &amp; Labels">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Badges &amp; Labels
                                    </a>
                                </li>
                                <li>
                                    <a href="overlays.html" title="Overlays">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Overlays
                                    </a>
                                </li>
                                <li>
                                    <a href="navigation_menus.html" title="Navigation Menus">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href="icons.html" title="Icons">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html" title="Buttons">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="pagination.html" title="Pagination">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="typography.html" title="Typography">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Typography
                                    </a>
                                </li>
                                <li>
                                    <a href="animations.html" title="Animations">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Animations
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Charts">
                                <i class="glyph-icon icon-bar-chart"></i>
                                Charts
                            </a>
                            <ul>
                                <li>
                                    <a href="charts_piegauges.html" title="Pie Gauges">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Pie Gauges
                                    </a>
                                </li>
                                <li>
                                    <a href="charts_justgage.html" title="JustGage">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        JustGage
                                    </a>
                                </li>
                                <li>
                                    <a href="charts_sparklines.html" title="Sparklines">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Sparklines
                                    </a>
                                </li>
                                <li>
                                    <a href="charts_morris.html" title="Morris Charts">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Morris Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Tables">
                                <i class="glyph-icon icon-table"></i>
                                Tables
                            </a>
                            <ul>
                                <li>
                                    <a href="tables.html" title="Normal tables">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Normal tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables_dynamic.html" title="Dynamic tables">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Dynamic tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Forms">
                                <i class="glyph-icon icon-reorder"></i>
                                Forms
                            </a>
                            <ul>
                                <li>
                                    <a href="forms.html" title="Layouts &amp; Elements">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Layouts &amp; Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="forms_validation.html" title="Forms validation">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Forms validation
                                    </a>
                                </li>
                                <li>
                                    <a href="form_wizard.html" title="Form wizard">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Form wizard
                                    </a>
                                </li>
                                <li>
                                    <a href="forms_inline.html" title="Inline editor">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Inline editor
                                    </a>
                                </li>
                                <li>
                                    <a href="image_editor.html" title="Image crop">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Image crop
                                    </a>
                                </li>
                                <li>
                                    <a href="file_upload.html" title="Files uploader">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Files uploader
                                    </a>
                                </li>
                                <li>
                                    <a href="dropzone_uploader.html" title="Dropzone uploader">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Dropzone uploader
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--                         <li>
                                                    <a href="javascript:;" title="Maps">
                                                        <i class="glyph-icon icon-map-marker"></i>
                                                        Maps
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="google_maps.html" title="Google Maps">
                                                                <i class="glyph-icon icon-chevron-right"></i>
                                                                Google maps
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="vector_maps.html" title="Vector maps">
                                                                <i class="glyph-icon icon-chevron-right"></i>
                                                                Vector maps
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li> -->
                        <li>
                            <a href="javascript:;" title="Help &amp; Support">
                                <i class="glyph-icon icon-book"></i>
                                Ayuda &amp; Soporte
                            </a>
                            <ul>
                                <li>
                                    <a href="docs.html" title="Getting started guide">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Getting started guide
                                    </a>
                                </li>
                                <li>
                                    <a href="http://agileui.com/support-forums" title="Support forums">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Support forums
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
                    <div class="text-center mobile-hidden">
                        <div class="button-group display-inline">
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Messages">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Mailbox">
                                <i class="glyph-icon icon-inbox"></i>
                            </a>
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Content">
                                <i class="glyph-icon icon-hdd"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div><!-- #page-sidebar -->

            <div id="page-content-wrapper">
                <div id="page-title">

                    <h3>
                        Panel de control
                        <small>
                            Some examples to get you started
                        </small>
                    </h3>
                    <div id="breadcrumb-right">
                        <div id="sidebar-search">
                            <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name="" />
                            <i class="glyph-icon icon-search"></i>
                        </div>
                        <div class="float-right">
                            <a href="javascript:;" class="btn medium bg-white tooltip-button black-modal-60 mrg5R" data-placement="bottom" title="Open modal window">
                                <span class="button-content">
                                    <i class="glyph-icon icon-question"></i>
                                </span>
                            </a>

                            <div class="dropdown">
                                <a href="javascript:;" class="btn medium bg-white" title="Example dropdown" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon icon-cog float-left"></i>
                                        <i class="glyph-icon icon-caret-down float-right"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu pad0A float-right">
                                    <div class="medium-box">
                                        <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Form example</div>
                                        <div class="pad10A">
                                            <p class="font-gray-dark pad0B">This <span class="label bg-blue-alt">dropdown box</span> uses the Twitter Bootstrap dropdown plugin.</p>
                                            <div class="divider mrg10T mrg10B"></div>

                                            <form id="demo-form" action="" class="col-md-12" method="" />
                                            <div class="form-row">
                                                <div class="form-label col-md-4">
                                                    <label for="">
                                                        Name:
                                                        <span class="required">*</span>
                                                    </label>
                                                </div>
                                                <div class="form-input col-md-8">
                                                    <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-label col-md-4">
                                                    <label for="">
                                                        Email:
                                                        <span class="required">*</span>
                                                    </label>
                                                </div>
                                                <div class="form-input col-md-8">
                                                    <input type="text" id="email" name="email" data-type="email" data-trigger="change" data-required="true" class="parsley-validated" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-label col-md-4">
                                                    <label for="">
                                                        Website:
                                                    </label>
                                                </div>
                                                <div class="form-input col-md-8">
                                                    <input type="text" id="website" name="website" data-trigger="change" data-type="url" class="parsley-validated" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-label col-md-4">
                                                    <label for="" class="label-description">
                                                        Message:
                                                        <span>20 chars min, 200 max</span>
                                                    </label>
                                                </div>
                                                <div class="form-input col-md-8">
                                                    <textarea id="message" name="message" data-trigger="keyup" data-rangelength="[20,200]" class="parsley-validated"></textarea>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-row">
                                                <input type="hidden" name="superhidden" id="superhidden" />
                                                <div class="form-input col-md-8 col-md-offset-4">
                                                    <a href="javascript:;" class="btn medium primary-bg radius-all-4" id="demo-form-valid" onclick="javascript:$( & apos; #demo - form & apos; ).parsley( & apos; validate & apos; );" title="Validate!">
                                                        <span class="button-content">
                                                            Validate the form above
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            </form>

                                        </div>

                                        <div class="bg-black font-size-12 font-orange pad10A mrg5L mrg5R">Custom header example</div>
                                        <div class="pad15A">
                                            <p class="font-green text-center font-size-14 pad0B">Fides Admin comes with powerful helpers that you can use to create virtually any style you want. Read the documentation about helper classes to find out more!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- #page-title -->
                <div id="page-content">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="dashboard-panel bg-white content-box">
                                <div class="content-box-wrapper">
                                    <div class="header text-left">
                                        Weekly forecast
                                        <span>November 2013 - December 2013</span>
                                    </div>
                                    <div class="center-div sparkline-bar-big-color-2"></div>
                                    <div class="nav-list-horizontal mrg25T">
                                        <ul class="row mrg10T">
                                            <li>
                                                <div class="nav-wrp">
                                                    <h3><i class="glyph-icon icon-caret-up font-green font-size-17 pad5R"></i>$1486</h3>
                                                    <span class="font-gray">Total earnings</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="nav-wrp">
                                                    <h3><i class="glyph-icon icon-minus font-yellow font-size-17 pad5R"></i>$863</h3>
                                                    <span class="font-gray">Weekly revenue</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="nav-wrp">
                                                    <h3><i class="glyph-icon icon-caret-down font-red font-size-17 pad5R"></i>$622</h3>
                                                    <span class="font-gray">New sources</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="nav-wrp">
                                                    <h3><i class="glyph-icon icon-caret-up font-green font-size-17 pad5R"></i>$65</h3>
                                                    <span class="font-gray">Gross margin</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="button-pane">
                                    <div class="medium float-left">
                                        <div class="form-input">
                                            <select data-placeholder="Change statistics area" class="chosen-select">
                                                <option value="" /> 
                                                <option value="United States" />United States 
                                                <option value="United Kingdom" />United Kingdom 
                                                <option value="Afghanistan" />Afghanistan 
                                                <option value="Aland Islands" />Aland Islands 
                                                <option value="Albania" />Albania 
                                                <option value="Algeria" />Algeria 
                                                <option value="American Samoa" />American Samoa 
                                                <option value="Andorra" />Andorra 
                                                <option value="Angola" />Angola 
                                                <option value="Anguilla" />Anguilla 
                                                <option value="Antarctica" />Antarctica 
                                                <option value="Antigua and Barbuda" />Antigua and Barbuda 
                                                <option value="Argentina" />Argentina 
                                                <option value="Armenia" />Armenia 
                                                <option value="Aruba" />Aruba 
                                                <option value="Australia" />Australia 
                                                <option value="Austria" />Austria 
                                                <option value="Azerbaijan" />Azerbaijan 
                                                <option value="Bahamas" />Bahamas 
                                                <option value="Bahrain" />Bahrain 
                                                <option value="Bangladesh" />Bangladesh 
                                                <option value="Barbados" />Barbados 
                                                <option value="Belarus" />Belarus 
                                                <option value="Belgium" />Belgium 
                                                <option value="Belize" />Belize 
                                                <option value="Benin" />Benin 
                                                <option value="Bermuda" />Bermuda 
                                                <option value="Bhutan" />Bhutan
                                            </select>
                                        </div>
                                    </div>

                                    <a href="javascript:;" class="medium btn bg-blue float-right tooltip-button" data-placement="top" title="More statistics">
                                        <i class="glyph-icon icon-plus"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="content-box">
                                <table class="table text-center">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="font-bold text-left">John Clark</td>
                                            <td class="text-left"><a href="javascript:;" title="">Support</a></td>
                                            <td><div class="label bg-orange">+152</div></td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="javascript:;" title="" class="btn medium bg-gray" data-toggle="dropdown">
                                                        <span class="button-content">
                                                            <i class="glyph-icon font-size-11 icon-cog"></i>
                                                            <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="dropdown-menu float-right">

                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-edit mrg5R"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-calendar mrg5R"></i>
                                                                Schedule
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-download mrg5R"></i>
                                                                Download
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="javascript:;" class="font-red" title="">
                                                                <i class="glyph-icon icon-remove mrg5R"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="font-bold text-left">Kenny Davis</td>
                                            <td class="text-left"><a href="javascript:;" title="">Business management</a></td>
                                            <td><div class="label bg-black">+152</div></td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="javascript:;" title="" class="btn medium bg-gray" data-toggle="dropdown">
                                                        <span class="button-content">
                                                            <i class="glyph-icon font-size-11 icon-cog"></i>
                                                            <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="dropdown-menu float-right">

                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-edit mrg5R"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-calendar mrg5R"></i>
                                                                Schedule
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-download mrg5R"></i>
                                                                Download
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="javascript:;" class="font-red" title="">
                                                                <i class="glyph-icon icon-remove mrg5R"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="font-bold text-left">David Robertson</td>
                                            <td class="text-left"><a href="javascript:;" title="">Sales</a></td>
                                            <td><div class="label bg-green">+191</div></td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="javascript:;" title="" class="btn medium bg-gray" data-toggle="dropdown">
                                                        <span class="button-content">
                                                            <i class="glyph-icon font-size-11 icon-cog"></i>
                                                            <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="dropdown-menu float-right">

                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-edit mrg5R"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-calendar mrg5R"></i>
                                                                Schedule
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-download mrg5R"></i>
                                                                Download
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="javascript:;" class="font-red" title="">
                                                                <i class="glyph-icon icon-remove mrg5R"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="font-bold text-left">John Doe</td>
                                            <td class="text-left"><a href="javascript:;" title="">Business</a></td>
                                            <td><div class="label bg-red">+483</div></td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="javascript:;" title="" class="btn medium bg-gray" data-toggle="dropdown">
                                                        <span class="button-content">
                                                            <i class="glyph-icon font-size-11 icon-cog"></i>
                                                            <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="dropdown-menu float-right">

                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-edit mrg5R"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-calendar mrg5R"></i>
                                                                Schedule
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="">
                                                                <i class="glyph-icon icon-download mrg5R"></i>
                                                                Download
                                                            </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="javascript:;" class="font-red" title="">
                                                                <i class="glyph-icon icon-remove mrg5R"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="content-box bg-white post-box">
                                <textarea name="" class="textarea-autoresize" id="" placeholder="What are you doing right now?"></textarea>
                                <div class="button-pane">
                                    <a href="javascript:;" class="btn x-large hover-white" title="">
                                        <i class="glyph-icon icon-volume-down"></i>
                                    </a>
                                    <a href="javascript:;" class="btn x-large hover-white" title="">
                                        <i class="glyph-icon icon-facetime-video"></i>
                                    </a>
                                    <a href="javascript:;" class="btn x-large hover-white" title="">
                                        <i class="glyph-icon icon-microphone"></i>
                                    </a>
                                    <a href="javascript:;" class="btn x-large hover-white" title="">
                                        <i class="glyph-icon icon-picture"></i>
                                    </a>

                                    <a href="javascript:;" class="btn btn-post large bg-green" title="">
                                        <span class="button-content">
                                            Share it!
                                        </span>
                                    </a>

                                </div>
                            </div>

                            <div class="content-box remove-border text-center dashboard-buttons clearfix">
                                <a href="javascript:;" class="btn vertical-button hover-blue-alt" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Dashboard</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-green" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Widgets</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Tables</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Charts</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-yellow" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Buttons</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Panels</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-blue" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-picture opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Themes</span>
                                </a>
                            </div>

                            <div class="content-box box-toggle button-toggle">
                                <h3 class="content-box-header primary-bg">
                                    <span class="float-left">Content Box</span>
                                    <a href="#" class="float-right icon-separator btn toggle-button" title="Toggle Box">
                                        <i class="glyph-icon icon-toggle icon-chevron-up"></i>
                                    </a>
                                    <a href="#" class="float-right icon-separator btn refresh-button" data-style="dark" data-theme="bg-white" data-opacity="60">
                                        <i class="glyph-icon icon-refresh"></i>
                                    </a>
                                    <span class="badge label btn bg-blue-alt font-size-11 mrg10R float-right">Label</span>
                                </h3>
                                <div class="content-box-wrapper">
                                    Content box with hidden header buttons.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="content-box">
                                        <h3 class="content-box-header ui-state-default">
                                            <span class="float-left">Remove box</span>
                                            <a href="#" class="float-right icon-separator btn tooltip-button remove-button" data-animation="flipOutY" data-placement="left" title="flipOutY Animation">
                                                <i class="glyph-icon icon-remove"></i>
                                            </a>
                                        </h3>
                                        <div class="content-box-wrapper">
                                            Click the header remove button above to hide this content box.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="content-box">
                                        <h3 class="content-box-header ui-state-default">
                                            <span class="float-left">Remove box</span>
                                            <a href="#" class="float-right icon-separator btn tooltip-button remove-button" data-animation="fadeOutLeft" data-placement="left" title="fadeOutLeft Animation">
                                                <i class="glyph-icon icon-remove"></i>
                                            </a>
                                        </h3>
                                        <div class="content-box-wrapper">
                                            Click the header remove button above to hide this content box.
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="content-box">
                                        <h3 class="content-box-header ui-state-default">
                                            <span class="float-left">Remove box</span>
                                            <a href="#" class="float-right icon-separator btn tooltip-button remove-button" data-animation="fadeOutRight" data-placement="left" title="fadeOutRight Animation">
                                                <i class="glyph-icon icon-remove"></i>
                                            </a>
                                        </h3>
                                        <div class="content-box-wrapper">
                                            Click the header remove button above to hide this content box.
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="dashboard-panel content-box remove-border bg-blue-alt">
                                        <div class="content-box-wrapper">
                                            <div class="header">
                                                New registrations
                                                <span>August - October 2013</span>
                                            </div>
                                            <div class="sparkline-big">183,579,180,311,405,342,579,405,311,311,450,302,370,510</div>
                                        </div>
                                        <div class="button-pane">
                                            <div class="heading medium">
                                                <b>521</b> active accounts
                                            </div>
                                            <a href="javascript:;" class="medium btn bg-blue float-right tooltip-button" data-placement="top" title="Download now!">
                                                <i class="glyph-icon icon-cloud-download"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dashboard-panel content-box remove-border bg-orange">
                                        <div class="content-box-wrapper">
                                            <div class="header">
                                                Shipped items
                                                <span>January - December 2013</span>
                                            </div>
                                            <div class="sparkline-big">183,579,180,311,405,342,579,405,450,311,180,311,450,302,370,210</div>
                                        </div>
                                        <div class="button-pane">
                                            <div class="heading medium">
                                                <b>5</b> pending shipments
                                            </div>
                                            <a href="javascript:;" class="medium btn bg-black float-right tooltip-button" data-placement="top" title="View details">
                                                <i class="glyph-icon icon-cog"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <div class="dashboard-panel content-box remove-border bg-green">
                                        <div class="content-box-wrapper">
                                            <div class="header">
                                                YoY growth
                                                <span>2013 - 2014</span>
                                            </div>
                                            <div class="sparkline-big">183,579,180,311,240,180,311,450,302,370,210,610</div>
                                        </div>
                                        <div class="button-pane">
                                            <div class="heading medium">
                                                <b>289</b> new visits
                                            </div>
                                            <a href="javascript:;" class="medium btn bg-yellow float-right tooltip-button" data-placement="top" title="Add content">
                                                <i class="glyph-icon icon-plus"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dashboard-panel content-box remove-border bg-yellow">
                                        <div class="content-box-wrapper">
                                            <div class="header">
                                                Monthly evolution
                                                <span>July - December 2013</span>
                                            </div>
                                            <div class="sparkline-big">183,579,180,311,230,311,405,342,230,302,405,230,405,342,579,405</div>
                                        </div>
                                        <div class="button-pane">
                                            <div class="heading medium">
                                                <b>8</b> overdue orders
                                            </div>
                                            <a href="javascript:;" class="medium btn bg-white float-right tooltip-button" data-placement="top" title="View details">
                                                <i class="glyph-icon icon-link"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="content-box nav-list-horizontal">
                                <ul class="row">
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon font-purple icon-dashboard"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon font-blue-alt icon-map-marker"></i>
                                            Location
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon font-green icon-bullhorn"></i>
                                            Announcements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            <i class="glyph-icon font-red icon-camera"></i>
                                            Photo Gallery
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="profile-box profile-box-alt content-box">
                                        <div class="content-box-header clearfix bg-blue">
                                            <div class="user-details">
                                                There have been <b>134</b> sales
                                                <span>January 2013 - December 2014</span>
                                            </div>
                                        </div>

                                        <div class="pie-wrapper">
                                            <div class="pie-sparkline-alt">5,2,3</div>
                                        </div>

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="font-bold text-left">
                                                        <div class="badge badge-small bg-blue"></div>
                                                        New user registrations
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:;" class="btn small hover-yellow tooltip-button" data-placement="top" title="Flag">
                                                            <i class="glyph-icon icon-flag"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                                            <i class="glyph-icon icon-edit"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-red tooltip-button" data-placement="top" title="Remove">
                                                            <i class="glyph-icon icon-remove"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-left">
                                                        <div class="badge badge-small bg-orange"></div>
                                                        Returning visitors
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:;" class="btn small hover-yellow tooltip-button" data-placement="top" title="Flag">
                                                            <i class="glyph-icon icon-flag"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                                            <i class="glyph-icon icon-edit"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-red tooltip-button" data-placement="top" title="Remove">
                                                            <i class="glyph-icon icon-remove"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-bold text-left">
                                                        <div class="badge badge-small bg-gray"></div>
                                                        Page views
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:;" class="btn small hover-yellow tooltip-button" data-placement="top" title="Flag">
                                                            <i class="glyph-icon icon-flag"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                                            <i class="glyph-icon icon-edit"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn small hover-red tooltip-button" data-placement="top" title="Remove">
                                                            <i class="glyph-icon icon-remove"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="profile-box content-box">
                                        <div class="content-box-header clearfix ui-state-default">
                                            <img width="36" src="assets/images/gravatar.jpg" alt="" />
                                            <div class="user-details">
                                                Usuario 1
                                                <span>User Interface Designer</span>
                                            </div>
                                        </div>
                                        <div class="nav-list">
                                            <ul>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <i class="glyph-icon font-purple icon-dashboard"></i>
                                                        Dashboard
                                                        <i class="glyph-icon icon-chevron-right float-right"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <i class="glyph-icon font-orange icon-map-marker"></i>
                                                        Location
                                                        <i class="glyph-icon icon-chevron-right float-right"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <i class="glyph-icon font-green icon-bullhorn"></i>
                                                        Announcements
                                                        <i class="glyph-icon icon-chevron-right float-right"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" title="">
                                                        <i class="glyph-icon font-red icon-camera"></i>
                                                        Photo Gallery
                                                        <i class="glyph-icon icon-chevron-right float-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="profile-box bg-white remove-border content-box">
                                        <div class="content-box-header clearfix">
                                            <img width="36" src="assets/images/gravatar.jpg" alt="" />
                                            <div class="user-details">
                                                Usuario 1
                                                <span>User Interface Designer</span>
                                            </div>
                                            <div class="pad10T">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="javascript:;" class="btn display-block small bg-facebook">
                                                            <span class="glyph-icon icon-separator">
                                                                <i class="glyph-icon icon-facebook"></i>
                                                            </span>
                                                            <span class="button-content">
                                                                Facebook
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a href="javascript:;" class="btn display-block small bg-twitter">
                                                            <span class="glyph-icon icon-separator">
                                                                <i class="glyph-icon icon-twitter"></i>
                                                            </span>
                                                            <span class="button-content">
                                                                Twitter
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

    </body>
</html>

