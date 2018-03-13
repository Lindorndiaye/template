<?php

/* ALNLindorBundle:template:index.html.twig */
class __TwigTemplate_2a264634a070ab7845d3949b6c9c9cc4a70c36ad5ccf05db59de0e0d64f4e32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@ALNLindor/layout.html.twig", "ALNLindorBundle:template:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@ALNLindor/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_404dc1bc84641b73c9533be86c51a09bd690a5600a9a7d370bb56ad38e7f04b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404dc1bc84641b73c9533be86c51a09bd690a5600a9a7d370bb56ad38e7f04b8->enter($__internal_404dc1bc84641b73c9533be86c51a09bd690a5600a9a7d370bb56ad38e7f04b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $__internal_aacf8905e0bf429559895481d711688c4a2e4d3015fe18d8d20e6bbfe91ba778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacf8905e0bf429559895481d711688c4a2e4d3015fe18d8d20e6bbfe91ba778->enter($__internal_aacf8905e0bf429559895481d711688c4a2e4d3015fe18d8d20e6bbfe91ba778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ALNLindorBundle:template:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404dc1bc84641b73c9533be86c51a09bd690a5600a9a7d370bb56ad38e7f04b8->leave($__internal_404dc1bc84641b73c9533be86c51a09bd690a5600a9a7d370bb56ad38e7f04b8_prof);

        
        $__internal_aacf8905e0bf429559895481d711688c4a2e4d3015fe18d8d20e6bbfe91ba778->leave($__internal_aacf8905e0bf429559895481d711688c4a2e4d3015fe18d8d20e6bbfe91ba778_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f791045525eae5a56d6a2238ced995709351ed29afcaeeb3c0173420c1923535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f791045525eae5a56d6a2238ced995709351ed29afcaeeb3c0173420c1923535->enter($__internal_f791045525eae5a56d6a2238ced995709351ed29afcaeeb3c0173420c1923535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_156bcd412f7afe69fc3b353cfe805ca58a9ba7b59419d510a0c80c228bed106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156bcd412f7afe69fc3b353cfe805ca58a9ba7b59419d510a0c80c228bed106b->enter($__internal_156bcd412f7afe69fc3b353cfe805ca58a9ba7b59419d510a0c80c228bed106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " <div class=\"content-page \">
                <!-- Start content -->      
                <div class=\"content  \">
                    <div class=\"container \">

                        <!-- Page-Title -->
                        <div class=\"row \" >
                           




                        </div>

                     </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right bg-secondary\" >
                    2018 © Lindor.
                </footer>

            </div>
";
        
        $__internal_156bcd412f7afe69fc3b353cfe805ca58a9ba7b59419d510a0c80c228bed106b->leave($__internal_156bcd412f7afe69fc3b353cfe805ca58a9ba7b59419d510a0c80c228bed106b_prof);

        
        $__internal_f791045525eae5a56d6a2238ced995709351ed29afcaeeb3c0173420c1923535->leave($__internal_f791045525eae5a56d6a2238ced995709351ed29afcaeeb3c0173420c1923535_prof);

    }

    public function getTemplateName()
    {
        return "ALNLindorBundle:template:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
 <div class=\"content-page \">
                <!-- Start content -->      
                <div class=\"content  \">
                    <div class=\"container \">

                        <!-- Page-Title -->
                        <div class=\"row \" >
                           




                        </div>

                     </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class=\"footer text-right bg-secondary\" >
                    2018 © Lindor.
                </footer>

            </div>
{% endblock %}", "ALNLindorBundle:template:index.html.twig", "/var/www/html/symfony/src/ALN/LindorBundle/Resources/views/template/index.html.twig");
    }
}
