<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41f3f0bf54798b0ac4c02771c1157e0caa486e5648468f313cf631adcf7b2c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f3f0bf54798b0ac4c02771c1157e0caa486e5648468f313cf631adcf7b2c31->enter($__internal_41f3f0bf54798b0ac4c02771c1157e0caa486e5648468f313cf631adcf7b2c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_63959058432f2f2b66e90761aa0df1dce3adb1324a98c3166b3055d86af45d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63959058432f2f2b66e90761aa0df1dce3adb1324a98c3166b3055d86af45d1c->enter($__internal_63959058432f2f2b66e90761aa0df1dce3adb1324a98c3166b3055d86af45d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f3f0bf54798b0ac4c02771c1157e0caa486e5648468f313cf631adcf7b2c31->leave($__internal_41f3f0bf54798b0ac4c02771c1157e0caa486e5648468f313cf631adcf7b2c31_prof);

        
        $__internal_63959058432f2f2b66e90761aa0df1dce3adb1324a98c3166b3055d86af45d1c->leave($__internal_63959058432f2f2b66e90761aa0df1dce3adb1324a98c3166b3055d86af45d1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b377d08c73f95bf48788586ce08ee00bd49bc79f4b322735528e3deb0ea801ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b377d08c73f95bf48788586ce08ee00bd49bc79f4b322735528e3deb0ea801ce->enter($__internal_b377d08c73f95bf48788586ce08ee00bd49bc79f4b322735528e3deb0ea801ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97c2b45a493e1e8f58e363fff5b2d92319f0e1bb3fd4eb1d00b6301924e7dddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c2b45a493e1e8f58e363fff5b2d92319f0e1bb3fd4eb1d00b6301924e7dddc->enter($__internal_97c2b45a493e1e8f58e363fff5b2d92319f0e1bb3fd4eb1d00b6301924e7dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97c2b45a493e1e8f58e363fff5b2d92319f0e1bb3fd4eb1d00b6301924e7dddc->leave($__internal_97c2b45a493e1e8f58e363fff5b2d92319f0e1bb3fd4eb1d00b6301924e7dddc_prof);

        
        $__internal_b377d08c73f95bf48788586ce08ee00bd49bc79f4b322735528e3deb0ea801ce->leave($__internal_b377d08c73f95bf48788586ce08ee00bd49bc79f4b322735528e3deb0ea801ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fc613038ff7bb7242d2e229da7ccfd688b81aaf442ce980f26da9389dc622a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc613038ff7bb7242d2e229da7ccfd688b81aaf442ce980f26da9389dc622a6->enter($__internal_0fc613038ff7bb7242d2e229da7ccfd688b81aaf442ce980f26da9389dc622a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d98fd8e05fe13e41047cc84f57e8a415098b3ede95220cb54f1929b8a14d658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d98fd8e05fe13e41047cc84f57e8a415098b3ede95220cb54f1929b8a14d658->enter($__internal_3d98fd8e05fe13e41047cc84f57e8a415098b3ede95220cb54f1929b8a14d658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d98fd8e05fe13e41047cc84f57e8a415098b3ede95220cb54f1929b8a14d658->leave($__internal_3d98fd8e05fe13e41047cc84f57e8a415098b3ede95220cb54f1929b8a14d658_prof);

        
        $__internal_0fc613038ff7bb7242d2e229da7ccfd688b81aaf442ce980f26da9389dc622a6->leave($__internal_0fc613038ff7bb7242d2e229da7ccfd688b81aaf442ce980f26da9389dc622a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_536bbcca81ef0d8fb6b122063437df5cea4012df1f8906c2bc13ee1db60395d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536bbcca81ef0d8fb6b122063437df5cea4012df1f8906c2bc13ee1db60395d8->enter($__internal_536bbcca81ef0d8fb6b122063437df5cea4012df1f8906c2bc13ee1db60395d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddf1ae5d246ca6ba7e28f9968b36f080dbc3efb194d2fab23c5fad10da680032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf1ae5d246ca6ba7e28f9968b36f080dbc3efb194d2fab23c5fad10da680032->enter($__internal_ddf1ae5d246ca6ba7e28f9968b36f080dbc3efb194d2fab23c5fad10da680032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ddf1ae5d246ca6ba7e28f9968b36f080dbc3efb194d2fab23c5fad10da680032->leave($__internal_ddf1ae5d246ca6ba7e28f9968b36f080dbc3efb194d2fab23c5fad10da680032_prof);

        
        $__internal_536bbcca81ef0d8fb6b122063437df5cea4012df1f8906c2bc13ee1db60395d8->leave($__internal_536bbcca81ef0d8fb6b122063437df5cea4012df1f8906c2bc13ee1db60395d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
