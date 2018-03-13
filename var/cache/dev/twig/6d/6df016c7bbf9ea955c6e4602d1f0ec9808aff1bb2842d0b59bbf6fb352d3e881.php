<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c69e62df5478faa436e9ce40935e7716bc9c07e1e9a53fae7a47a68a076e9044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69e62df5478faa436e9ce40935e7716bc9c07e1e9a53fae7a47a68a076e9044->enter($__internal_c69e62df5478faa436e9ce40935e7716bc9c07e1e9a53fae7a47a68a076e9044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_05a4aab660e7cb2b46f4296ae3c91df1795b36e381ba13ef5c045a3bddae3ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a4aab660e7cb2b46f4296ae3c91df1795b36e381ba13ef5c045a3bddae3ad9->enter($__internal_05a4aab660e7cb2b46f4296ae3c91df1795b36e381ba13ef5c045a3bddae3ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69e62df5478faa436e9ce40935e7716bc9c07e1e9a53fae7a47a68a076e9044->leave($__internal_c69e62df5478faa436e9ce40935e7716bc9c07e1e9a53fae7a47a68a076e9044_prof);

        
        $__internal_05a4aab660e7cb2b46f4296ae3c91df1795b36e381ba13ef5c045a3bddae3ad9->leave($__internal_05a4aab660e7cb2b46f4296ae3c91df1795b36e381ba13ef5c045a3bddae3ad9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b0e9ff0c98380afe789773799912482ccb59fd81a5f0d3140b1b3e25d4e5461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0e9ff0c98380afe789773799912482ccb59fd81a5f0d3140b1b3e25d4e5461->enter($__internal_6b0e9ff0c98380afe789773799912482ccb59fd81a5f0d3140b1b3e25d4e5461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6be93a45484560d3052cde1dce71384dd01cb1f4a1b35e8104a1e6c15c18be7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be93a45484560d3052cde1dce71384dd01cb1f4a1b35e8104a1e6c15c18be7b->enter($__internal_6be93a45484560d3052cde1dce71384dd01cb1f4a1b35e8104a1e6c15c18be7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6be93a45484560d3052cde1dce71384dd01cb1f4a1b35e8104a1e6c15c18be7b->leave($__internal_6be93a45484560d3052cde1dce71384dd01cb1f4a1b35e8104a1e6c15c18be7b_prof);

        
        $__internal_6b0e9ff0c98380afe789773799912482ccb59fd81a5f0d3140b1b3e25d4e5461->leave($__internal_6b0e9ff0c98380afe789773799912482ccb59fd81a5f0d3140b1b3e25d4e5461_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0ed8d6fde0e5c5be434a09b6a378f8a0023332c0ab784204ea407418d595e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ed8d6fde0e5c5be434a09b6a378f8a0023332c0ab784204ea407418d595e24->enter($__internal_a0ed8d6fde0e5c5be434a09b6a378f8a0023332c0ab784204ea407418d595e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8626551d474dc4a2452a17dbf81e0b198ebefa19b1ee0f7da70a7a5c722cfe56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8626551d474dc4a2452a17dbf81e0b198ebefa19b1ee0f7da70a7a5c722cfe56->enter($__internal_8626551d474dc4a2452a17dbf81e0b198ebefa19b1ee0f7da70a7a5c722cfe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8626551d474dc4a2452a17dbf81e0b198ebefa19b1ee0f7da70a7a5c722cfe56->leave($__internal_8626551d474dc4a2452a17dbf81e0b198ebefa19b1ee0f7da70a7a5c722cfe56_prof);

        
        $__internal_a0ed8d6fde0e5c5be434a09b6a378f8a0023332c0ab784204ea407418d595e24->leave($__internal_a0ed8d6fde0e5c5be434a09b6a378f8a0023332c0ab784204ea407418d595e24_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49abaf132fb7aa50529d064beb95db62153edef0e13e4031c3c21da5ef05134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49abaf132fb7aa50529d064beb95db62153edef0e13e4031c3c21da5ef05134f->enter($__internal_49abaf132fb7aa50529d064beb95db62153edef0e13e4031c3c21da5ef05134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f7b451035973253e462a47869335f353a19bbcb887ed55a7564cbac89d84c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7b451035973253e462a47869335f353a19bbcb887ed55a7564cbac89d84c39->enter($__internal_1f7b451035973253e462a47869335f353a19bbcb887ed55a7564cbac89d84c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1f7b451035973253e462a47869335f353a19bbcb887ed55a7564cbac89d84c39->leave($__internal_1f7b451035973253e462a47869335f353a19bbcb887ed55a7564cbac89d84c39_prof);

        
        $__internal_49abaf132fb7aa50529d064beb95db62153edef0e13e4031c3c21da5ef05134f->leave($__internal_49abaf132fb7aa50529d064beb95db62153edef0e13e4031c3c21da5ef05134f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
