<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f3abbda0de9a70345a68c3a2bd0dec41a5f844491635e4f8cc4c45b9b515e627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fef0d75bb7e2875f5766d05a329d7e8f6eda16588a89720690aff2d7efbc337c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef0d75bb7e2875f5766d05a329d7e8f6eda16588a89720690aff2d7efbc337c->enter($__internal_fef0d75bb7e2875f5766d05a329d7e8f6eda16588a89720690aff2d7efbc337c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fef0d75bb7e2875f5766d05a329d7e8f6eda16588a89720690aff2d7efbc337c->leave($__internal_fef0d75bb7e2875f5766d05a329d7e8f6eda16588a89720690aff2d7efbc337c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ffe08a4a12e5055a37ae11b9ae36bffdfc585005d5274f2fad78de04811b397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffe08a4a12e5055a37ae11b9ae36bffdfc585005d5274f2fad78de04811b397->enter($__internal_5ffe08a4a12e5055a37ae11b9ae36bffdfc585005d5274f2fad78de04811b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_5ffe08a4a12e5055a37ae11b9ae36bffdfc585005d5274f2fad78de04811b397->leave($__internal_5ffe08a4a12e5055a37ae11b9ae36bffdfc585005d5274f2fad78de04811b397_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2815f4a22c87233b568195e49fed7c9eacf8788e8cec83a555cc010819f88eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2815f4a22c87233b568195e49fed7c9eacf8788e8cec83a555cc010819f88eb1->enter($__internal_2815f4a22c87233b568195e49fed7c9eacf8788e8cec83a555cc010819f88eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_2815f4a22c87233b568195e49fed7c9eacf8788e8cec83a555cc010819f88eb1->leave($__internal_2815f4a22c87233b568195e49fed7c9eacf8788e8cec83a555cc010819f88eb1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4695f9d48b766e604abfe4ec73c5d023cdb551b115cbe001a04775fb38c61857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4695f9d48b766e604abfe4ec73c5d023cdb551b115cbe001a04775fb38c61857->enter($__internal_4695f9d48b766e604abfe4ec73c5d023cdb551b115cbe001a04775fb38c61857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4695f9d48b766e604abfe4ec73c5d023cdb551b115cbe001a04775fb38c61857->leave($__internal_4695f9d48b766e604abfe4ec73c5d023cdb551b115cbe001a04775fb38c61857_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
