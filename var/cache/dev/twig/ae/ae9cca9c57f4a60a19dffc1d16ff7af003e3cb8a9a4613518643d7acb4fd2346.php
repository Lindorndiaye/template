<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_345fda4962f307da3a7883a535817df1388cf5a7f1ec9c06b4b7ba999960a5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345fda4962f307da3a7883a535817df1388cf5a7f1ec9c06b4b7ba999960a5b4->enter($__internal_345fda4962f307da3a7883a535817df1388cf5a7f1ec9c06b4b7ba999960a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f3a8bcda823db06a780172541a838b78d27374339e6ce443c1bcef8fb955fde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a8bcda823db06a780172541a838b78d27374339e6ce443c1bcef8fb955fde1->enter($__internal_f3a8bcda823db06a780172541a838b78d27374339e6ce443c1bcef8fb955fde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345fda4962f307da3a7883a535817df1388cf5a7f1ec9c06b4b7ba999960a5b4->leave($__internal_345fda4962f307da3a7883a535817df1388cf5a7f1ec9c06b4b7ba999960a5b4_prof);

        
        $__internal_f3a8bcda823db06a780172541a838b78d27374339e6ce443c1bcef8fb955fde1->leave($__internal_f3a8bcda823db06a780172541a838b78d27374339e6ce443c1bcef8fb955fde1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95fed3530c6919d973120c087905f0c10def84191e491965a562d17434e656c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fed3530c6919d973120c087905f0c10def84191e491965a562d17434e656c3->enter($__internal_95fed3530c6919d973120c087905f0c10def84191e491965a562d17434e656c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be28a79c81944d67dd0299621ce217a801a2c1d7b21cf84176856db0df0e15da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be28a79c81944d67dd0299621ce217a801a2c1d7b21cf84176856db0df0e15da->enter($__internal_be28a79c81944d67dd0299621ce217a801a2c1d7b21cf84176856db0df0e15da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_be28a79c81944d67dd0299621ce217a801a2c1d7b21cf84176856db0df0e15da->leave($__internal_be28a79c81944d67dd0299621ce217a801a2c1d7b21cf84176856db0df0e15da_prof);

        
        $__internal_95fed3530c6919d973120c087905f0c10def84191e491965a562d17434e656c3->leave($__internal_95fed3530c6919d973120c087905f0c10def84191e491965a562d17434e656c3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_494194f65cee38971439dac285732545ac532d58051aad6aed84b97738752909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494194f65cee38971439dac285732545ac532d58051aad6aed84b97738752909->enter($__internal_494194f65cee38971439dac285732545ac532d58051aad6aed84b97738752909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_230baa29b5d0930a049052ddafe9da2c1ccba42f5a5d53758e2fdafdcba8074f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230baa29b5d0930a049052ddafe9da2c1ccba42f5a5d53758e2fdafdcba8074f->enter($__internal_230baa29b5d0930a049052ddafe9da2c1ccba42f5a5d53758e2fdafdcba8074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_230baa29b5d0930a049052ddafe9da2c1ccba42f5a5d53758e2fdafdcba8074f->leave($__internal_230baa29b5d0930a049052ddafe9da2c1ccba42f5a5d53758e2fdafdcba8074f_prof);

        
        $__internal_494194f65cee38971439dac285732545ac532d58051aad6aed84b97738752909->leave($__internal_494194f65cee38971439dac285732545ac532d58051aad6aed84b97738752909_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eee9bd0540a04881ed9f39f927b49ec945b72ac5eba2895a7ca88ba7f43d7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eee9bd0540a04881ed9f39f927b49ec945b72ac5eba2895a7ca88ba7f43d7d3->enter($__internal_0eee9bd0540a04881ed9f39f927b49ec945b72ac5eba2895a7ca88ba7f43d7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a74164b3d2b93878f16c08f46aba56fe6e8e1a10bc5588e77424ad55e615caea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74164b3d2b93878f16c08f46aba56fe6e8e1a10bc5588e77424ad55e615caea->enter($__internal_a74164b3d2b93878f16c08f46aba56fe6e8e1a10bc5588e77424ad55e615caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a74164b3d2b93878f16c08f46aba56fe6e8e1a10bc5588e77424ad55e615caea->leave($__internal_a74164b3d2b93878f16c08f46aba56fe6e8e1a10bc5588e77424ad55e615caea_prof);

        
        $__internal_0eee9bd0540a04881ed9f39f927b49ec945b72ac5eba2895a7ca88ba7f43d7d3->leave($__internal_0eee9bd0540a04881ed9f39f927b49ec945b72ac5eba2895a7ca88ba7f43d7d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
