<?php

/* base.html.twig */
class __TwigTemplate_6529893593af1e71ea103b33721ce554e83d841cfe884088e23ffb37dbdda3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f6f4d3694b6c5f9c4356700ccc87d7ad03e1c3bd1a20b4a07e9ada2cd91c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f6f4d3694b6c5f9c4356700ccc87d7ad03e1c3bd1a20b4a07e9ada2cd91c41->enter($__internal_d8f6f4d3694b6c5f9c4356700ccc87d7ad03e1c3bd1a20b4a07e9ada2cd91c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d8f6f4d3694b6c5f9c4356700ccc87d7ad03e1c3bd1a20b4a07e9ada2cd91c41->leave($__internal_d8f6f4d3694b6c5f9c4356700ccc87d7ad03e1c3bd1a20b4a07e9ada2cd91c41_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c215e6b1fbcc80bd20a148cda50181df14ff68ec302f693112593b9de1819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c215e6b1fbcc80bd20a148cda50181df14ff68ec302f693112593b9de1819f->enter($__internal_e3c215e6b1fbcc80bd20a148cda50181df14ff68ec302f693112593b9de1819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3c215e6b1fbcc80bd20a148cda50181df14ff68ec302f693112593b9de1819f->leave($__internal_e3c215e6b1fbcc80bd20a148cda50181df14ff68ec302f693112593b9de1819f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6064ba3e34c0d44470c76de49c43b1ab65edd4d24506e4b0532e5bbf8b614966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6064ba3e34c0d44470c76de49c43b1ab65edd4d24506e4b0532e5bbf8b614966->enter($__internal_6064ba3e34c0d44470c76de49c43b1ab65edd4d24506e4b0532e5bbf8b614966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6064ba3e34c0d44470c76de49c43b1ab65edd4d24506e4b0532e5bbf8b614966->leave($__internal_6064ba3e34c0d44470c76de49c43b1ab65edd4d24506e4b0532e5bbf8b614966_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_429e7ca8667326be00be83009a21a5f5fc6eb021fd646adcd5b8e7badbd9f672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429e7ca8667326be00be83009a21a5f5fc6eb021fd646adcd5b8e7badbd9f672->enter($__internal_429e7ca8667326be00be83009a21a5f5fc6eb021fd646adcd5b8e7badbd9f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_429e7ca8667326be00be83009a21a5f5fc6eb021fd646adcd5b8e7badbd9f672->leave($__internal_429e7ca8667326be00be83009a21a5f5fc6eb021fd646adcd5b8e7badbd9f672_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88ccca5aad30f1fb13d5e75057ce0134be98df5b4cb76a35cab0fb82ea163358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ccca5aad30f1fb13d5e75057ce0134be98df5b4cb76a35cab0fb82ea163358->enter($__internal_88ccca5aad30f1fb13d5e75057ce0134be98df5b4cb76a35cab0fb82ea163358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88ccca5aad30f1fb13d5e75057ce0134be98df5b4cb76a35cab0fb82ea163358->leave($__internal_88ccca5aad30f1fb13d5e75057ce0134be98df5b4cb76a35cab0fb82ea163358_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/srv/app/Resources/views/base.html.twig");
    }
}
