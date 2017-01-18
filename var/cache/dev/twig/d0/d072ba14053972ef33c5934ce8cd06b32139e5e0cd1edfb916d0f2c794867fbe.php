<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_418da8ec1f5f09b28e9239323ecefb5aa983e50863b48b48439c69ca1cfc569d extends Twig_Template
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
        $__internal_5b5a172da145e159cdda1bbf47fba81b642c6f8cd0cb57c3db2963e7e280e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5a172da145e159cdda1bbf47fba81b642c6f8cd0cb57c3db2963e7e280e53d->enter($__internal_5b5a172da145e159cdda1bbf47fba81b642c6f8cd0cb57c3db2963e7e280e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5a172da145e159cdda1bbf47fba81b642c6f8cd0cb57c3db2963e7e280e53d->leave($__internal_5b5a172da145e159cdda1bbf47fba81b642c6f8cd0cb57c3db2963e7e280e53d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d106cb43b7b546950069c4c030e8545660641f78cac41b040fcea72c475beec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d106cb43b7b546950069c4c030e8545660641f78cac41b040fcea72c475beec->enter($__internal_0d106cb43b7b546950069c4c030e8545660641f78cac41b040fcea72c475beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d106cb43b7b546950069c4c030e8545660641f78cac41b040fcea72c475beec->leave($__internal_0d106cb43b7b546950069c4c030e8545660641f78cac41b040fcea72c475beec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20ed9785ff003fc918e88c79bc43f077cde5b57de326442b64d4b169894e19d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ed9785ff003fc918e88c79bc43f077cde5b57de326442b64d4b169894e19d2->enter($__internal_20ed9785ff003fc918e88c79bc43f077cde5b57de326442b64d4b169894e19d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20ed9785ff003fc918e88c79bc43f077cde5b57de326442b64d4b169894e19d2->leave($__internal_20ed9785ff003fc918e88c79bc43f077cde5b57de326442b64d4b169894e19d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cc7e30f89117c5bdfa792e57298d2bea98e07755b1bf1d4a450ba63bc2c8dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc7e30f89117c5bdfa792e57298d2bea98e07755b1bf1d4a450ba63bc2c8dbe->enter($__internal_6cc7e30f89117c5bdfa792e57298d2bea98e07755b1bf1d4a450ba63bc2c8dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6cc7e30f89117c5bdfa792e57298d2bea98e07755b1bf1d4a450ba63bc2c8dbe->leave($__internal_6cc7e30f89117c5bdfa792e57298d2bea98e07755b1bf1d4a450ba63bc2c8dbe_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
