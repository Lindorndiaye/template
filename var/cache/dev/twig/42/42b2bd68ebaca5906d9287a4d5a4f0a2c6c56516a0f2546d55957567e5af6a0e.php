<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'side' => array($this, 'block_side'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f4c4ddb7054d5cfda9728067ea3c7898b0115dec6b5166addb08169a413ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f4c4ddb7054d5cfda9728067ea3c7898b0115dec6b5166addb08169a413ab4->enter($__internal_73f4c4ddb7054d5cfda9728067ea3c7898b0115dec6b5166addb08169a413ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_509a0163c8aad9c97ed3ad49d99f5bbaf0d4722c7315129d82e8169053fafa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509a0163c8aad9c97ed3ad49d99f5bbaf0d4722c7315129d82e8169053fafa47->enter($__internal_509a0163c8aad9c97ed3ad49d99f5bbaf0d4722c7315129d82e8169053fafa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 27
        echo "
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>


    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>LINDOR</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/lindor.png"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

";
        // line 148
        $this->displayBlock('side', $context, $blocks);
        // line 321
        echo "            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
           ";
        // line 324
        $this->displayBlock('body', $context, $blocks);
        // line 327
        echo "            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

";
        // line 445
        $this->displayBlock('scripts', $context, $blocks);
        // line 509
        echo "    </body>
</html>


";
        
        $__internal_73f4c4ddb7054d5cfda9728067ea3c7898b0115dec6b5166addb08169a413ab4->leave($__internal_73f4c4ddb7054d5cfda9728067ea3c7898b0115dec6b5166addb08169a413ab4_prof);

        
        $__internal_509a0163c8aad9c97ed3ad49d99f5bbaf0d4722c7315129d82e8169053fafa47->leave($__internal_509a0163c8aad9c97ed3ad49d99f5bbaf0d4722c7315129d82e8169053fafa47_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d1e129d7c9d6c981e12c7748f434259d038c446118fbc4fee956dcb990f41cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e129d7c9d6c981e12c7748f434259d038c446118fbc4fee956dcb990f41cab->enter($__internal_d1e129d7c9d6c981e12c7748f434259d038c446118fbc4fee956dcb990f41cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3cad59778367dd0b706fdb484249aa35644c5cdf17abe54f47a6d38758b6f887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cad59778367dd0b706fdb484249aa35644c5cdf17abe54f47a6d38758b6f887->enter($__internal_3cad59778367dd0b706fdb484249aa35644c5cdf17abe54f47a6d38758b6f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "
        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>
        ";
        
        $__internal_3cad59778367dd0b706fdb484249aa35644c5cdf17abe54f47a6d38758b6f887->leave($__internal_3cad59778367dd0b706fdb484249aa35644c5cdf17abe54f47a6d38758b6f887_prof);

        
        $__internal_d1e129d7c9d6c981e12c7748f434259d038c446118fbc4fee956dcb990f41cab->leave($__internal_d1e129d7c9d6c981e12c7748f434259d038c446118fbc4fee956dcb990f41cab_prof);

    }

    // line 148
    public function block_side($context, array $blocks = array())
    {
        $__internal_c784e5480fc2cffae3bd22d5d74ed156f3ea38162a30de09e411fce6406c06f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c784e5480fc2cffae3bd22d5d74ed156f3ea38162a30de09e411fce6406c06f0->enter($__internal_c784e5480fc2cffae3bd22d5d74ed156f3ea38162a30de09e411fce6406c06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        $__internal_f150967107ae800c0d7d89b385dd89dac1d9ed6da559c9a65614524471bc1d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f150967107ae800c0d7d89b385dd89dac1d9ed6da559c9a65614524471bc1d8f->enter($__internal_f150967107ae800c0d7d89b385dd89dac1d9ed6da559c9a65614524471bc1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 149
        echo "            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu bg-primary\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/lindor.png"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" style=\"color:white;\">Lindor NDIAYE <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" >
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\" style=\"color:white;\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul class=\"bg-primary\">
                            <li>
                                <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                    <li><a href=\"mail-inbox.html\" style=\"color:white;\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\"  style=\"color:white;\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\"  style=\"color:white;\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendar");
        echo "\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 


";
        
        $__internal_f150967107ae800c0d7d89b385dd89dac1d9ed6da559c9a65614524471bc1d8f->leave($__internal_f150967107ae800c0d7d89b385dd89dac1d9ed6da559c9a65614524471bc1d8f_prof);

        
        $__internal_c784e5480fc2cffae3bd22d5d74ed156f3ea38162a30de09e411fce6406c06f0->leave($__internal_c784e5480fc2cffae3bd22d5d74ed156f3ea38162a30de09e411fce6406c06f0_prof);

    }

    // line 324
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ab8a27065271912289600e24baf8a84d592a908055f54a007eb30c499bb0801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab8a27065271912289600e24baf8a84d592a908055f54a007eb30c499bb0801->enter($__internal_7ab8a27065271912289600e24baf8a84d592a908055f54a007eb30c499bb0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a775cb7ddb7fc2f07b538b67498e2fdc8b11ccb64ecc57f0ee86671c0f2c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a775cb7ddb7fc2f07b538b67498e2fdc8b11ccb64ecc57f0ee86671c0f2c3ba->enter($__internal_6a775cb7ddb7fc2f07b538b67498e2fdc8b11ccb64ecc57f0ee86671c0f2c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 325
        echo "           
           ";
        
        $__internal_6a775cb7ddb7fc2f07b538b67498e2fdc8b11ccb64ecc57f0ee86671c0f2c3ba->leave($__internal_6a775cb7ddb7fc2f07b538b67498e2fdc8b11ccb64ecc57f0ee86671c0f2c3ba_prof);

        
        $__internal_7ab8a27065271912289600e24baf8a84d592a908055f54a007eb30c499bb0801->leave($__internal_7ab8a27065271912289600e24baf8a84d592a908055f54a007eb30c499bb0801_prof);

    }

    // line 445
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c1b21edb1af3eb8f19c3e9e7c3b41d18a3e631efb9faf4d1c45729805d1f2655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b21edb1af3eb8f19c3e9e7c3b41d18a3e631efb9faf4d1c45729805d1f2655->enter($__internal_c1b21edb1af3eb8f19c3e9e7c3b41d18a3e631efb9faf4d1c45729805d1f2655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_cea0e7eaa6e6dae232ad5e448aca649cd1e83d6785209f6a3fa4cf92879d1b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea0e7eaa6e6dae232ad5e448aca649cd1e83d6785209f6a3fa4cf92879d1b51->enter($__internal_cea0e7eaa6e6dae232ad5e448aca649cd1e83d6785209f6a3fa4cf92879d1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 446
        echo "    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jQuery  -->
        <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    ";
        
        $__internal_cea0e7eaa6e6dae232ad5e448aca649cd1e83d6785209f6a3fa4cf92879d1b51->leave($__internal_cea0e7eaa6e6dae232ad5e448aca649cd1e83d6785209f6a3fa4cf92879d1b51_prof);

        
        $__internal_c1b21edb1af3eb8f19c3e9e7c3b41d18a3e631efb9faf4d1c45729805d1f2655->leave($__internal_c1b21edb1af3eb8f19c3e9e7c3b41d18a3e631efb9faf4d1c45729805d1f2655_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 493,  717 => 490,  711 => 487,  705 => 484,  701 => 483,  697 => 482,  693 => 481,  689 => 480,  685 => 479,  681 => 478,  677 => 477,  670 => 473,  664 => 470,  660 => 469,  654 => 466,  648 => 463,  643 => 461,  639 => 460,  635 => 459,  631 => 458,  627 => 457,  623 => 456,  619 => 455,  615 => 454,  611 => 453,  607 => 452,  599 => 446,  590 => 445,  579 => 325,  570 => 324,  427 => 188,  411 => 175,  388 => 155,  380 => 149,  371 => 148,  357 => 23,  353 => 22,  349 => 21,  345 => 20,  341 => 19,  337 => 18,  333 => 17,  328 => 15,  323 => 12,  314 => 11,  300 => 509,  298 => 445,  178 => 327,  176 => 324,  171 => 321,  169 => 148,  150 => 132,  43 => 27,  41 => 11,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\" />
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        {% block stylesheet %}

        <link rel=\"shortcut icon\" href=\"assets/images/favicon_1.ico\">

        <link href=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>
        {% endblock %}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>


    <body class=\"fixed-left\">
        
        <!-- Begin page -->
        <div id=\"wrapper\">
        
            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>LINDOR</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"\">
                            <div class=\"pull-left\">
                                <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <span class=\"clearfix\"></span>
                            </div>
                            <form class=\"navbar-form pull-left\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                            </form>

                            <ul class=\"nav navbar-nav navbar-right pull-right\">
                                <li class=\"dropdown hidden-xs\">
                                    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                        <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-lg\">
                                        <li class=\"text-center notifi-title\">Notification</li>
                                        <li class=\"list-group\">
                                           <!-- list item-->
                                           <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <div class=\"media\">
                                                 <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                 </div>
                                                 <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                       <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"hidden-xs\">
                                    <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                                </li>
                                
                                <li class=\"dropdown\">
                                    <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{ asset('assets/images/users/lindor.png')}}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

{% block side %}
            <!-- ========== Left Sidebar Start ========== -->

            <div class=\"left side-menu bg-primary\">
                <div class=\"sidebar-inner slimscrollleft\">
                    <div class=\"user-details\">
                        <div class=\"pull-left\">
                            <img src=\"{{ asset('assets/images/users/lindor.png')}}\" alt=\"\" class=\"thumb-md img-circle\">
                        </div>
                        <div class=\"user-info\">
                            <div class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" style=\"color:white;\">Lindor NDIAYE <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" >
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class=\"text-muted m-0\" style=\"color:white;\">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id=\"sidebar-menu\">
                        <ul class=\"bg-primary\">
                            <li>
                                <a href=\"{{ path('index')}}\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\" style=\"color:white;\">
                                    <li><a href=\"mail-inbox.html\" style=\"color:white;\">Inbox</a></li>
                                    <li><a href=\"mail-compose.html\"  style=\"color:white;\">Compose Mail</a></li>
                                    <li><a href=\"mail-read.html\"  style=\"color:white;\">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"{{ path('calendar') }}\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-panels.html\">Panels</a></li>
                                    <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-notification.html\">Notification</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"components-grid.html\">Grid</a></li>
                                    <li><a href=\"components-portlets.html\">Portlets</a></li>
                                    <li><a href=\"components-widgets.html\">Widgets</a></li>
                                    <li><a href=\"components-nestable-list.html\">Nesteble</a></li>
                                    <li><a href=\"components-rangeslider.html\">Sliders </a></li>
                                    <li><a href=\"components-gallery.html\">Gallery </a></li>
                                    <li><a href=\"components-pricing.html\">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-elements.html\">General Elements</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>
                                    <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                    <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                    <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                    <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                    <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                    <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                    <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                    <li><a href=\"charts-other.html\">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"#\" class=\"waves-effect\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-profile.html\">Profile</a></li>
                                    <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                    <li><a href=\"pages-email-template.html\">Email template</a></li>
                                    <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                    <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                    <li><a href=\"pages-404.html\">404 Error</a></li>
                                    <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                    <li><a href=\"pages-500.html\">500 Error</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                <ul>
                                    <li class=\"has_sub\">
                                        <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                        <ul style=\"\">
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                            <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 


{% endblock %}
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
           {% block body %}
           
           {% endblock %}
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class=\"side-bar right-bar nicescroll\">
                <h4 class=\"text-center\">Chat</h4>
                <div class=\"contact-list nicescroll\">
                    <ul class=\"list-group contacts-list\">
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Chadengle</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Tomaslau</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Stillnotdavid</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Kurafire</span>
                                <i class=\"fa fa-circle online\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Shahedk</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Adhamdannaway</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Ok</span>
                                <i class=\"fa fa-circle away\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-8.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Arashasghari</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-9.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Joshaustin</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                        <li class=\"list-group-item\">
                            <a href=\"#\">
                                <div class=\"avatar\">
                                    <img src=\"assets/images/users/avatar-10.jpg\" alt=\"\">
                                </div>
                                <span class=\"name\">Sortino</span>
                                <i class=\"fa fa-circle offline\"></i>
                            </a>
                            <span class=\"clearfix\"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

{% block scripts %}
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{ asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{ asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{ asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{ asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{ asset('assets/js/jquery.app.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>
        
        
        <!-- flot Chart -->
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.todo.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.chat.js')}}\"></script>
        
        <!-- jQuery  -->
        <script src=\"{{ asset('assets/pages/jquery.dashboard.js')}}\"></script>
        
        <script type=\"text/javascript\">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    {% endblock %}
    </body>
</html>


", "::base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
