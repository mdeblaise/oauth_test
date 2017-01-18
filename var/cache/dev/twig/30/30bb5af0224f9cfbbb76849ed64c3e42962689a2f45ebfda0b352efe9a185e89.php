<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a4f2da5f744c5663fc8543d32972960715fda0f5493c340b2e178d5ebb72ccb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_485c4aa69735fca213e3a4eafaceb1cee2cc00ae62b148d63e5306d15f68fa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485c4aa69735fca213e3a4eafaceb1cee2cc00ae62b148d63e5306d15f68fa1a->enter($__internal_485c4aa69735fca213e3a4eafaceb1cee2cc00ae62b148d63e5306d15f68fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485c4aa69735fca213e3a4eafaceb1cee2cc00ae62b148d63e5306d15f68fa1a->leave($__internal_485c4aa69735fca213e3a4eafaceb1cee2cc00ae62b148d63e5306d15f68fa1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_817b857b71744b0608319a8b35306f28a125975412e66b62b7aa840a4ec4fc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817b857b71744b0608319a8b35306f28a125975412e66b62b7aa840a4ec4fc22->enter($__internal_817b857b71744b0608319a8b35306f28a125975412e66b62b7aa840a4ec4fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_817b857b71744b0608319a8b35306f28a125975412e66b62b7aa840a4ec4fc22->leave($__internal_817b857b71744b0608319a8b35306f28a125975412e66b62b7aa840a4ec4fc22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
