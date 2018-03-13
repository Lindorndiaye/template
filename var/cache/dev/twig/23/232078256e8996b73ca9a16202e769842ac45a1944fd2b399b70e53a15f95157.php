<?php

/* @ALNLindor/layout.html.twig */
class __TwigTemplate_c2cd4434a96dcbd500c73b1a8537e9835befc073a77f2d2cce3458e7cf0f3328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@ALNLindor/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e5348d0b094639c9f79235d6d3459e2ee04de9212d570867441b5dc1acc3929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5348d0b094639c9f79235d6d3459e2ee04de9212d570867441b5dc1acc3929->enter($__internal_0e5348d0b094639c9f79235d6d3459e2ee04de9212d570867441b5dc1acc3929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $__internal_8c4b584021064a1f19b58ad5a9dd40923065845d0605153f656983c0c83622d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4b584021064a1f19b58ad5a9dd40923065845d0605153f656983c0c83622d9->enter($__internal_8c4b584021064a1f19b58ad5a9dd40923065845d0605153f656983c0c83622d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ALNLindor/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5348d0b094639c9f79235d6d3459e2ee04de9212d570867441b5dc1acc3929->leave($__internal_0e5348d0b094639c9f79235d6d3459e2ee04de9212d570867441b5dc1acc3929_prof);

        
        $__internal_8c4b584021064a1f19b58ad5a9dd40923065845d0605153f656983c0c83622d9->leave($__internal_8c4b584021064a1f19b58ad5a9dd40923065845d0605153f656983c0c83622d9_prof);

    }

    public function getTemplateName()
    {
        return "@ALNLindor/layout.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}
  

  ", "@ALNLindor/layout.html.twig", "/var/www/html/symfony/src/ALN/LindorBundle/Resources/views/layout.html.twig");
    }
}
