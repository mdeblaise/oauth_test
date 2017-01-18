<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c961e585c273e88f050380c17a124c03886e20cd531911a41fbeffd3599f1160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5387d2e4edc75663bb1f7a13e44f3322099c65dd97761c5c3227841a1889448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5387d2e4edc75663bb1f7a13e44f3322099c65dd97761c5c3227841a1889448f->enter($__internal_5387d2e4edc75663bb1f7a13e44f3322099c65dd97761c5c3227841a1889448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5387d2e4edc75663bb1f7a13e44f3322099c65dd97761c5c3227841a1889448f->leave($__internal_5387d2e4edc75663bb1f7a13e44f3322099c65dd97761c5c3227841a1889448f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54165987bd28e9d8010ab31d3bc53c0ed227a65502d1e3490df6a9e7a04d6e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54165987bd28e9d8010ab31d3bc53c0ed227a65502d1e3490df6a9e7a04d6e3a->enter($__internal_54165987bd28e9d8010ab31d3bc53c0ed227a65502d1e3490df6a9e7a04d6e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_54165987bd28e9d8010ab31d3bc53c0ed227a65502d1e3490df6a9e7a04d6e3a->leave($__internal_54165987bd28e9d8010ab31d3bc53c0ed227a65502d1e3490df6a9e7a04d6e3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
