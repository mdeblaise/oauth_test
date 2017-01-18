<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6b205ee4f4ff513b5f9d8796e2cba518e39d3946ca70bc939f03968d90f44a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e0c55248b13c3494fcbfbcdc02f6775776310fc766dad3cba8704796da5521e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c55248b13c3494fcbfbcdc02f6775776310fc766dad3cba8704796da5521e8->enter($__internal_e0c55248b13c3494fcbfbcdc02f6775776310fc766dad3cba8704796da5521e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c55248b13c3494fcbfbcdc02f6775776310fc766dad3cba8704796da5521e8->leave($__internal_e0c55248b13c3494fcbfbcdc02f6775776310fc766dad3cba8704796da5521e8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa993cd1541c26b9e53048f77f9b9cd54460ec37f56527fc7e18815a62f3e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa993cd1541c26b9e53048f77f9b9cd54460ec37f56527fc7e18815a62f3e8ab->enter($__internal_fa993cd1541c26b9e53048f77f9b9cd54460ec37f56527fc7e18815a62f3e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa993cd1541c26b9e53048f77f9b9cd54460ec37f56527fc7e18815a62f3e8ab->leave($__internal_fa993cd1541c26b9e53048f77f9b9cd54460ec37f56527fc7e18815a62f3e8ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
