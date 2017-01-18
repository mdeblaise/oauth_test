<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e99c2fb98c8125cbcac303ea75336751519988ac2b8c6b38b8f8476dec1d8001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_12662ab105aa22711d7c900e80db74ffbcca78908e96b445f95d5397e2eeb1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12662ab105aa22711d7c900e80db74ffbcca78908e96b445f95d5397e2eeb1ff->enter($__internal_12662ab105aa22711d7c900e80db74ffbcca78908e96b445f95d5397e2eeb1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12662ab105aa22711d7c900e80db74ffbcca78908e96b445f95d5397e2eeb1ff->leave($__internal_12662ab105aa22711d7c900e80db74ffbcca78908e96b445f95d5397e2eeb1ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f0ab9dfa858fc72f7aa32af664687c16f862a1f268c2cbeb84d4a5468d17dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0ab9dfa858fc72f7aa32af664687c16f862a1f268c2cbeb84d4a5468d17dde->enter($__internal_2f0ab9dfa858fc72f7aa32af664687c16f862a1f268c2cbeb84d4a5468d17dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2f0ab9dfa858fc72f7aa32af664687c16f862a1f268c2cbeb84d4a5468d17dde->leave($__internal_2f0ab9dfa858fc72f7aa32af664687c16f862a1f268c2cbeb84d4a5468d17dde_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
