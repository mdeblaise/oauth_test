<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_580329528c694fc8ed529488570356f5c2e518509a581765fa963c8d19163ea7 extends Twig_Template
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
        $__internal_d90dc7fb3b42637f3d8f0cda34b5aa938552f27a672d3b821c9735e0d2bb98e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90dc7fb3b42637f3d8f0cda34b5aa938552f27a672d3b821c9735e0d2bb98e1->enter($__internal_d90dc7fb3b42637f3d8f0cda34b5aa938552f27a672d3b821c9735e0d2bb98e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d90dc7fb3b42637f3d8f0cda34b5aa938552f27a672d3b821c9735e0d2bb98e1->leave($__internal_d90dc7fb3b42637f3d8f0cda34b5aa938552f27a672d3b821c9735e0d2bb98e1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_136050c5365380768c6a959f1a7488c6aef039b2dbd04b2cc58b92f9d132f1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136050c5365380768c6a959f1a7488c6aef039b2dbd04b2cc58b92f9d132f1a8->enter($__internal_136050c5365380768c6a959f1a7488c6aef039b2dbd04b2cc58b92f9d132f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_136050c5365380768c6a959f1a7488c6aef039b2dbd04b2cc58b92f9d132f1a8->leave($__internal_136050c5365380768c6a959f1a7488c6aef039b2dbd04b2cc58b92f9d132f1a8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_657c4e17c895847f8929c0a30364000b2575dda41372a0a137abc4fd6a59e3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657c4e17c895847f8929c0a30364000b2575dda41372a0a137abc4fd6a59e3e9->enter($__internal_657c4e17c895847f8929c0a30364000b2575dda41372a0a137abc4fd6a59e3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_657c4e17c895847f8929c0a30364000b2575dda41372a0a137abc4fd6a59e3e9->leave($__internal_657c4e17c895847f8929c0a30364000b2575dda41372a0a137abc4fd6a59e3e9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_79854f2016d893371edff5dcbc4186c7561c6fa5a5c0697dd4f0b3ed72501068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79854f2016d893371edff5dcbc4186c7561c6fa5a5c0697dd4f0b3ed72501068->enter($__internal_79854f2016d893371edff5dcbc4186c7561c6fa5a5c0697dd4f0b3ed72501068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_79854f2016d893371edff5dcbc4186c7561c6fa5a5c0697dd4f0b3ed72501068->leave($__internal_79854f2016d893371edff5dcbc4186c7561c6fa5a5c0697dd4f0b3ed72501068_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
