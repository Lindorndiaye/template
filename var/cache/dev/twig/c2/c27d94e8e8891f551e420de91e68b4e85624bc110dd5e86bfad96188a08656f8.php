<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96c9b52b5d098257587987fcfe93777d57d19f7596d9e580753451813cfd464a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c9b52b5d098257587987fcfe93777d57d19f7596d9e580753451813cfd464a->enter($__internal_96c9b52b5d098257587987fcfe93777d57d19f7596d9e580753451813cfd464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d6a08fbce35a79f1fe65298ba4834be161f2848160497dbbb26e211ab2e91412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a08fbce35a79f1fe65298ba4834be161f2848160497dbbb26e211ab2e91412->enter($__internal_d6a08fbce35a79f1fe65298ba4834be161f2848160497dbbb26e211ab2e91412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_96c9b52b5d098257587987fcfe93777d57d19f7596d9e580753451813cfd464a->leave($__internal_96c9b52b5d098257587987fcfe93777d57d19f7596d9e580753451813cfd464a_prof);

        
        $__internal_d6a08fbce35a79f1fe65298ba4834be161f2848160497dbbb26e211ab2e91412->leave($__internal_d6a08fbce35a79f1fe65298ba4834be161f2848160497dbbb26e211ab2e91412_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5df7c3353ba8dad42094b2c78f540c121e84ee3069893f992808d83581694f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df7c3353ba8dad42094b2c78f540c121e84ee3069893f992808d83581694f3e->enter($__internal_5df7c3353ba8dad42094b2c78f540c121e84ee3069893f992808d83581694f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7f2315f9be7552170de8e5477290a82acdd9ca50aace79fbd66f38a2269ecae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f2315f9be7552170de8e5477290a82acdd9ca50aace79fbd66f38a2269ecae->enter($__internal_a7f2315f9be7552170de8e5477290a82acdd9ca50aace79fbd66f38a2269ecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a7f2315f9be7552170de8e5477290a82acdd9ca50aace79fbd66f38a2269ecae->leave($__internal_a7f2315f9be7552170de8e5477290a82acdd9ca50aace79fbd66f38a2269ecae_prof);

        
        $__internal_5df7c3353ba8dad42094b2c78f540c121e84ee3069893f992808d83581694f3e->leave($__internal_5df7c3353ba8dad42094b2c78f540c121e84ee3069893f992808d83581694f3e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dbbf4156fe23175f58c30cd6f7ab9ff6e828eed4a28335112007850e6c5f703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbbf4156fe23175f58c30cd6f7ab9ff6e828eed4a28335112007850e6c5f703->enter($__internal_1dbbf4156fe23175f58c30cd6f7ab9ff6e828eed4a28335112007850e6c5f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1f2445bd97fc14bcaf93adaec976913eb2a9166ef0ad051a52a773b33e31831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f2445bd97fc14bcaf93adaec976913eb2a9166ef0ad051a52a773b33e31831->enter($__internal_e1f2445bd97fc14bcaf93adaec976913eb2a9166ef0ad051a52a773b33e31831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1f2445bd97fc14bcaf93adaec976913eb2a9166ef0ad051a52a773b33e31831->leave($__internal_e1f2445bd97fc14bcaf93adaec976913eb2a9166ef0ad051a52a773b33e31831_prof);

        
        $__internal_1dbbf4156fe23175f58c30cd6f7ab9ff6e828eed4a28335112007850e6c5f703->leave($__internal_1dbbf4156fe23175f58c30cd6f7ab9ff6e828eed4a28335112007850e6c5f703_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6348b07ca768af1c24f3bfddccaabf69c8bae101e5499440d1aea6f5d84006a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6348b07ca768af1c24f3bfddccaabf69c8bae101e5499440d1aea6f5d84006a3->enter($__internal_6348b07ca768af1c24f3bfddccaabf69c8bae101e5499440d1aea6f5d84006a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31e4e677d7a6c794a585d34ce77c1a626af2b0e08547967bc7bcbdfac891018b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e4e677d7a6c794a585d34ce77c1a626af2b0e08547967bc7bcbdfac891018b->enter($__internal_31e4e677d7a6c794a585d34ce77c1a626af2b0e08547967bc7bcbdfac891018b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31e4e677d7a6c794a585d34ce77c1a626af2b0e08547967bc7bcbdfac891018b->leave($__internal_31e4e677d7a6c794a585d34ce77c1a626af2b0e08547967bc7bcbdfac891018b_prof);

        
        $__internal_6348b07ca768af1c24f3bfddccaabf69c8bae101e5499440d1aea6f5d84006a3->leave($__internal_6348b07ca768af1c24f3bfddccaabf69c8bae101e5499440d1aea6f5d84006a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
