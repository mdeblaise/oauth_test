<?php

/* MMCFosUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c2273536da7b1c3ccac01e0c0bb8531291e0cd03a3d2bb4e4b219423ac7a9c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["mmc_fos_user_layout"]) || array_key_exists("mmc_fos_user_layout", $context) ? $context["mmc_fos_user_layout"] : (function () { throw new Twig_Error_Runtime('Variable "mmc_fos_user_layout" does not exist.', 1, $this->getSourceContext()); })()), "MMCFosUserBundle:Resetting:check_email.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9000d0949fe8927f7d6452bd33541849c915eba46e08bb875dfda12dfa3613c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000d0949fe8927f7d6452bd33541849c915eba46e08bb875dfda12dfa3613c8->enter($__internal_9000d0949fe8927f7d6452bd33541849c915eba46e08bb875dfda12dfa3613c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle:Resetting:check_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9000d0949fe8927f7d6452bd33541849c915eba46e08bb875dfda12dfa3613c8->leave($__internal_9000d0949fe8927f7d6452bd33541849c915eba46e08bb875dfda12dfa3613c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b36c1cc7b69dabdea5717f17c25969eab86db6669568a83b1b1091f2566b3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b36c1cc7b69dabdea5717f17c25969eab86db6669568a83b1b1091f2566b3c7->enter($__internal_6b36c1cc7b69dabdea5717f17c25969eab86db6669568a83b1b1091f2566b3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6b36c1cc7b69dabdea5717f17c25969eab86db6669568a83b1b1091f2566b3c7->leave($__internal_6b36c1cc7b69dabdea5717f17c25969eab86db6669568a83b1b1091f2566b3c7_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  33 => 5,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends mmc_fos_user_layout %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "MMCFosUserBundle:Resetting:check_email.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Resetting/check_email.html.twig");
    }
}
