<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2f07f5c94e239803941e1618874e8c83dfb7c0e7ac82f45fc2d351c11af2199a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2dab16f4ebcdc1e93e48f6511a7a50a8f385aed44942e1c3910f61a2e6da290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dab16f4ebcdc1e93e48f6511a7a50a8f385aed44942e1c3910f61a2e6da290->enter($__internal_d2dab16f4ebcdc1e93e48f6511a7a50a8f385aed44942e1c3910f61a2e6da290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2dab16f4ebcdc1e93e48f6511a7a50a8f385aed44942e1c3910f61a2e6da290->leave($__internal_d2dab16f4ebcdc1e93e48f6511a7a50a8f385aed44942e1c3910f61a2e6da290_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f42e5885b9ee21eaecc5abd6dd072744f10414840c1715db498910a643e64a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42e5885b9ee21eaecc5abd6dd072744f10414840c1715db498910a643e64a2f->enter($__internal_f42e5885b9ee21eaecc5abd6dd072744f10414840c1715db498910a643e64a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f42e5885b9ee21eaecc5abd6dd072744f10414840c1715db498910a643e64a2f->leave($__internal_f42e5885b9ee21eaecc5abd6dd072744f10414840c1715db498910a643e64a2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
