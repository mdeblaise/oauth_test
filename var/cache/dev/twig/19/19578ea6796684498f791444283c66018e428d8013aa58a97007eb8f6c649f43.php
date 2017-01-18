<?php

/* MMCFosUserBundle::layout.html.twig */
class __TwigTemplate_985d78043c15bb44050bcb480cb342d7bf7fb6c0851801e170184464e99cc175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_content' => array($this, 'block_title_content'),
            'favicon' => array($this, 'block_favicon'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9472059456e200469b9aed459556e0fb64788d522a7bc018c350a10a14a84175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9472059456e200469b9aed459556e0fb64788d522a7bc018c350a10a14a84175->enter($__internal_9472059456e200469b9aed459556e0fb64788d522a7bc018c350a10a14a84175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
  ";
        // line 10
        $this->displayBlock('favicon', $context, $blocks);
        // line 12
        echo "
  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
</head>
<body class=\"hold-transition login-page\">
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
</body>
</html>
";
        
        $__internal_9472059456e200469b9aed459556e0fb64788d522a7bc018c350a10a14a84175->leave($__internal_9472059456e200469b9aed459556e0fb64788d522a7bc018c350a10a14a84175_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b81955c49066b52250fdb18e0b18d52d7905d36c858f7649bbe3f41bc1e2257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b81955c49066b52250fdb18e0b18d52d7905d36c858f7649bbe3f41bc1e2257->enter($__internal_9b81955c49066b52250fdb18e0b18d52d7905d36c858f7649bbe3f41bc1e2257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    <title>";
        $this->displayBlock('title_content', $context, $blocks);
        echo "</title>
  ";
        
        $__internal_9b81955c49066b52250fdb18e0b18d52d7905d36c858f7649bbe3f41bc1e2257->leave($__internal_9b81955c49066b52250fdb18e0b18d52d7905d36c858f7649bbe3f41bc1e2257_prof);

    }

    public function block_title_content($context, array $blocks = array())
    {
        $__internal_2e0d16726505452289eb017543528ef3c9515b3f3c35b52539691c9301806b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d16726505452289eb017543528ef3c9515b3f3c35b52539691c9301806b8a->enter($__internal_2e0d16726505452289eb017543528ef3c9515b3f3c35b52539691c9301806b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_content"));

        echo "Admin";
        echo twig_escape_filter($this->env, ((array_key_exists("admin_title_suffix", $context)) ? (_twig_default_filter((isset($context["admin_title_suffix"]) || array_key_exists("admin_title_suffix", $context) ? $context["admin_title_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "admin_title_suffix" does not exist.', 7, $this->getSourceContext()); })()), "MMC")) : ("MMC")), "html", null, true);
        echo " | Log in";
        
        $__internal_2e0d16726505452289eb017543528ef3c9515b3f3c35b52539691c9301806b8a->leave($__internal_2e0d16726505452289eb017543528ef3c9515b3f3c35b52539691c9301806b8a_prof);

    }

    // line 10
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_cb9cd58a6be5d482e5921acf4c5ae09920f75728e21a89555abddb0bc573ac83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9cd58a6be5d482e5921acf4c5ae09920f75728e21a89555abddb0bc573ac83->enter($__internal_cb9cd58a6be5d482e5921acf4c5ae09920f75728e21a89555abddb0bc573ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 11
        echo "  ";
        
        $__internal_cb9cd58a6be5d482e5921acf4c5ae09920f75728e21a89555abddb0bc573ac83->leave($__internal_cb9cd58a6be5d482e5921acf4c5ae09920f75728e21a89555abddb0bc573ac83_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df2e57d41315f189d8e7d37ace6af60f798911cd0d9c678ac91770f8de4db88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2e57d41315f189d8e7d37ace6af60f798911cd0d9c678ac91770f8de4db88c->enter($__internal_df2e57d41315f189d8e7d37ace6af60f798911cd0d9c678ac91770f8de4db88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        
        $__internal_df2e57d41315f189d8e7d37ace6af60f798911cd0d9c678ac91770f8de4db88c->leave($__internal_df2e57d41315f189d8e7d37ace6af60f798911cd0d9c678ac91770f8de4db88c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_a76f6d0b49b0f09bbc8623fadfd91520109ae916f2c14f4465d93e932e34751a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76f6d0b49b0f09bbc8623fadfd91520109ae916f2c14f4465d93e932e34751a->enter($__internal_a76f6d0b49b0f09bbc8623fadfd91520109ae916f2c14f4465d93e932e34751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href=\"/admin\"><b>Admin</b>";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("admin_title_suffix", $context)) ? (_twig_default_filter((isset($context["admin_title_suffix"]) || array_key_exists("admin_title_suffix", $context) ? $context["admin_title_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "admin_title_suffix" does not exist.', 21, $this->getSourceContext()); })()), "MMC")) : ("MMC")), "html", null, true);
        echo "</a>
            </div>
            <div class=\"login-box-body\">
                ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "            </div>
        </div>
    ";
        
        $__internal_a76f6d0b49b0f09bbc8623fadfd91520109ae916f2c14f4465d93e932e34751a->leave($__internal_a76f6d0b49b0f09bbc8623fadfd91520109ae916f2c14f4465d93e932e34751a_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2de94a06a1891bc39ae78003be92551336f0bf2ecbeb182e20a8feec8c2f2ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de94a06a1891bc39ae78003be92551336f0bf2ecbeb182e20a8feec8c2f2ada->enter($__internal_2de94a06a1891bc39ae78003be92551336f0bf2ecbeb182e20a8feec8c2f2ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                ";
        
        $__internal_2de94a06a1891bc39ae78003be92551336f0bf2ecbeb182e20a8feec8c2f2ada->leave($__internal_2de94a06a1891bc39ae78003be92551336f0bf2ecbeb182e20a8feec8c2f2ada_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ce57a06cfa399b618b311c2d26fb80041c1e4c50b533119710aec3f034268de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce57a06cfa399b618b311c2d26fb80041c1e4c50b533119710aec3f034268de->enter($__internal_7ce57a06cfa399b618b311c2d26fb80041c1e4c50b533119710aec3f034268de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        
        $__internal_7ce57a06cfa399b618b311c2d26fb80041c1e4c50b533119710aec3f034268de->leave($__internal_7ce57a06cfa399b618b311c2d26fb80041c1e4c50b533119710aec3f034268de_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 31,  165 => 30,  158 => 25,  152 => 24,  143 => 26,  141 => 24,  135 => 21,  131 => 19,  125 => 18,  118 => 14,  112 => 13,  105 => 11,  99 => 10,  76 => 7,  70 => 6,  60 => 32,  58 => 30,  55 => 29,  53 => 18,  48 => 15,  46 => 13,  43 => 12,  41 => 10,  38 => 9,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  {% block title %}
    <title>{% block title_content %}Admin{{ admin_title_suffix|default('MMC') }} | Log in{% endblock title_content %}</title>
  {% endblock title %}

  {% block favicon %}
  {% endblock favicon %}

  {% block stylesheets %}
  {% endblock stylesheets %}

</head>
<body class=\"hold-transition login-page\">
    {% block body %}
        <div class=\"login-box\">
            <div class=\"login-logo\">
                <a href=\"/admin\"><b>Admin</b>{{ admin_title_suffix|default('MMC') }}</a>
            </div>
            <div class=\"login-box-body\">
                {% block fos_user_content %}
                {% endblock fos_user_content %}
            </div>
        </div>
    {% endblock body %}

    {% block javascripts %}
    {% endblock javascripts %}

</body>
</html>
", "MMCFosUserBundle::layout.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/layout.html.twig");
    }
}
