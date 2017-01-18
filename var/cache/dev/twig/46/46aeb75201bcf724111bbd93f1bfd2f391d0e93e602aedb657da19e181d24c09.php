<?php

/* MMCFosUserBundle::layout.html.twig */
class __TwigTemplate_48038679f6a7c7a66af30e3fc37373dbfc13b3849d0af52cd5ad03bb886b79d3 extends Twig_Template
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
        $__internal_d82eea4e831d340fee163d4ad521eb1035fe74c89a10ca35840e9ec2c8a5e9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82eea4e831d340fee163d4ad521eb1035fe74c89a10ca35840e9ec2c8a5e9ad->enter($__internal_d82eea4e831d340fee163d4ad521eb1035fe74c89a10ca35840e9ec2c8a5e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle::layout.html.twig"));

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
        
        $__internal_d82eea4e831d340fee163d4ad521eb1035fe74c89a10ca35840e9ec2c8a5e9ad->leave($__internal_d82eea4e831d340fee163d4ad521eb1035fe74c89a10ca35840e9ec2c8a5e9ad_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4fc66f6c78cbcee90988ff88e21d6513c13f60abc9667f36ae3bc13391ad40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fc66f6c78cbcee90988ff88e21d6513c13f60abc9667f36ae3bc13391ad40d->enter($__internal_c4fc66f6c78cbcee90988ff88e21d6513c13f60abc9667f36ae3bc13391ad40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    <title>";
        $this->displayBlock('title_content', $context, $blocks);
        echo "</title>
  ";
        
        $__internal_c4fc66f6c78cbcee90988ff88e21d6513c13f60abc9667f36ae3bc13391ad40d->leave($__internal_c4fc66f6c78cbcee90988ff88e21d6513c13f60abc9667f36ae3bc13391ad40d_prof);

    }

    public function block_title_content($context, array $blocks = array())
    {
        $__internal_945669b28d0b093f62813465475335475fa90a93feba772965f4926137b08c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945669b28d0b093f62813465475335475fa90a93feba772965f4926137b08c05->enter($__internal_945669b28d0b093f62813465475335475fa90a93feba772965f4926137b08c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_content"));

        echo "Admin";
        echo twig_escape_filter($this->env, ((array_key_exists("admin_title_suffix", $context)) ? (_twig_default_filter((isset($context["admin_title_suffix"]) || array_key_exists("admin_title_suffix", $context) ? $context["admin_title_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "admin_title_suffix" does not exist.', 7, $this->getSourceContext()); })()), "MMC")) : ("MMC")), "html", null, true);
        echo " | Log in";
        
        $__internal_945669b28d0b093f62813465475335475fa90a93feba772965f4926137b08c05->leave($__internal_945669b28d0b093f62813465475335475fa90a93feba772965f4926137b08c05_prof);

    }

    // line 10
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_df8bb5951cbfb5d2219792446cc8210b97fbac3222d6ef2760123ccb613cc89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8bb5951cbfb5d2219792446cc8210b97fbac3222d6ef2760123ccb613cc89f->enter($__internal_df8bb5951cbfb5d2219792446cc8210b97fbac3222d6ef2760123ccb613cc89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 11
        echo "  ";
        
        $__internal_df8bb5951cbfb5d2219792446cc8210b97fbac3222d6ef2760123ccb613cc89f->leave($__internal_df8bb5951cbfb5d2219792446cc8210b97fbac3222d6ef2760123ccb613cc89f_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0df60d79581d3b2b103ffd7f469b8ad594e49563af3e314f647b384796942462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df60d79581d3b2b103ffd7f469b8ad594e49563af3e314f647b384796942462->enter($__internal_0df60d79581d3b2b103ffd7f469b8ad594e49563af3e314f647b384796942462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        
        $__internal_0df60d79581d3b2b103ffd7f469b8ad594e49563af3e314f647b384796942462->leave($__internal_0df60d79581d3b2b103ffd7f469b8ad594e49563af3e314f647b384796942462_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a124de2e61ea8146bee6e6f7980f588fc5db8e43fb537ab0607b66b8d84dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a124de2e61ea8146bee6e6f7980f588fc5db8e43fb537ab0607b66b8d84dc8->enter($__internal_09a124de2e61ea8146bee6e6f7980f588fc5db8e43fb537ab0607b66b8d84dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09a124de2e61ea8146bee6e6f7980f588fc5db8e43fb537ab0607b66b8d84dc8->leave($__internal_09a124de2e61ea8146bee6e6f7980f588fc5db8e43fb537ab0607b66b8d84dc8_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4dd577a3ae2bddf7819dc1af28bd3c5e116120c9072c21157b982f8e5426204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dd577a3ae2bddf7819dc1af28bd3c5e116120c9072c21157b982f8e5426204->enter($__internal_c4dd577a3ae2bddf7819dc1af28bd3c5e116120c9072c21157b982f8e5426204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "                ";
        
        $__internal_c4dd577a3ae2bddf7819dc1af28bd3c5e116120c9072c21157b982f8e5426204->leave($__internal_c4dd577a3ae2bddf7819dc1af28bd3c5e116120c9072c21157b982f8e5426204_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4c2a78c0f4bb4834c1a62a61db8bec218cc8fd51ff2e6225cc41fa787a48543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c2a78c0f4bb4834c1a62a61db8bec218cc8fd51ff2e6225cc41fa787a48543->enter($__internal_b4c2a78c0f4bb4834c1a62a61db8bec218cc8fd51ff2e6225cc41fa787a48543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "    ";
        
        $__internal_b4c2a78c0f4bb4834c1a62a61db8bec218cc8fd51ff2e6225cc41fa787a48543->leave($__internal_b4c2a78c0f4bb4834c1a62a61db8bec218cc8fd51ff2e6225cc41fa787a48543_prof);

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
