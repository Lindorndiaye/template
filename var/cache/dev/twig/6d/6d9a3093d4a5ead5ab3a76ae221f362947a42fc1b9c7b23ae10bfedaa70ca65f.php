<?php

/* ALNLindorBundle:template:calendar.html.twig */
class __TwigTemplate_8ea91121000a371a69d875af2c20dbe4bba69dfcff383ed2c8eb1afe5769028b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ALNLindor/layout.html.twig", "ALNLindorBundle:template:calendar.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ALNLindor/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2073ac690b593b95137d46195f904fe544a74c428ee5e5053bade9ebe8826577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2073ac690b593b95137d46195f904fe544a74c428ee5e5053bade9ebe8826577->enter($__internal_2073ac690b593b95137d46195f904fe544a74c428ee5e5053bade9ebe8826577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:calendar.html.twig"));

        $__internal_a61c83b6d3cb960d223344e67b20d12ae3626b061e756b0f114779d3b233a183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61c83b6d3cb960d223344e67b20d12ae3626b061e756b0f114779d3b233a183->enter($__internal_a61c83b6d3cb960d223344e67b20d12ae3626b061e756b0f114779d3b233a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:calendar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2073ac690b593b95137d46195f904fe544a74c428ee5e5053bade9ebe8826577->leave($__internal_2073ac690b593b95137d46195f904fe544a74c428ee5e5053bade9ebe8826577_prof);

        
        $__internal_a61c83b6d3cb960d223344e67b20d12ae3626b061e756b0f114779d3b233a183->leave($__internal_a61c83b6d3cb960d223344e67b20d12ae3626b061e756b0f114779d3b233a183_prof);

    }

    public function getTemplateName()
    {
        return "ALNLindorBundle:template:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@ALNLindor/layout.html.twig\" %}
{# {% block stylesheet %}
{{parent()}}
<link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon_1.ico')}}\">

    <!--calendar css-->
    <link href=\"{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/plugins/select2/dist/css/select2.css')}}\" rel=\"stylesheet\" type=\"text/css\">

   
{% endblock %}


{% block body %}



    
   
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <h4 class=\"pull-left page-title\">Calendar</h4>
                            <ol class=\"breadcrumb pull-right\">
                                <li><a href=\"#\">Lindor</a></li>
                                <li class=\"active\">Calendar</li>
                            </ol>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">

                            <div class=\"row\">

                                <div class=\"col-md-9\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <div id=\"calendar\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-md-3\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-primary btn-block waves-effect waves-light\">
                                                        <i class=\"fa fa-plus\"></i> Create New
                                                    </a>
                                                    <div id=\"external-events\" class=\"m-t-20\">
                                                        <br>
                                                        <p>Drag and drop your event or click in the calendar</p>
                                                        <div class=\"external-event bg-inverse\" data-class=\"bg-inverse\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event One
                                                        </div>
                                                        <div class=\"external-event bg-danger\" data-class=\"bg-danger\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Two
                                                        </div>
                                                        <div class=\"external-event bg-primary\" data-class=\"bg-primary\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Three
                                                        </div>
                                                        <div class=\"external-event bg-purple\" data-class=\"bg-purple\" style=\"position: relative\">
                                                            <i class=\"fa fa-move\"></i>My Event Four
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class=\"checkbox checkbox-primary m-t-40\">
                                                        <input id=\"drop-remove\" type=\"checkbox\">
                                                        <label for=\"drop-remove\">
                                                                Remove after drop
                                                            </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-->
                            </div>
                            <!-- end row -->

                            <!-- BEGIN MODAL -->
                            <div class=\"modal fade none-border\" id=\"event-modal\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add Event</strong></h4>
                                        </div>
                                        <div class=\"modal-body\"></div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                            <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Add Category -->
                            <div class=\"modal fade none-border\" id=\"add-category\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <h4 class=\"modal-title\"><strong>Add</strong> a category</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form role=\"form\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Category Name</label>
                                                        <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\">
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <label class=\"control-label\">Choose Category Color</label>
                                                        <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                                <option value=\"success\">Success</option>
                                                                <option value=\"danger\">Danger</option>
                                                                <option value=\"primary\">Primary</option>
                                                                <option value=\"warning\">Warning</option>
                                                                <option value=\"inverse\">Inverse</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Close</button>
                                            <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
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

  


{% endblock %}
 {% block scripts %}
{{parent()}}
  

   

    <script src=\"{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/select2/dist/js/select2.min.js')}}\" type=\"text/javascript\"></script>

    <!-- BEGIN PAGE SCRIPTS -->
    <script src=\"{{ asset('assets/plugins/moment/moment.js')}}\"></script>
    <script src=\"{{ asset('assets/plugins/fullcalendar/dist/fullcalendar.min.js')}}\"></script>
    <script src=\"{{ asset('assets/pages/jquery.fullcalendar.js')}}\"></script>

{% endblock %} #}", "ALNLindorBundle:template:calendar.html.twig", "/var/www/html/symfony/src/ALN/LindorBundle/Resources/views/template/calendar.html.twig");
    }
}
