<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30ff59f33a0d6224271f048e8e2803e065252e1c88a40e5bc006e179481d6d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_65f25845c45af17481676413ae8bde99392e966ce02443528f72ddb5e8a030aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f25845c45af17481676413ae8bde99392e966ce02443528f72ddb5e8a030aa->enter($__internal_65f25845c45af17481676413ae8bde99392e966ce02443528f72ddb5e8a030aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f25845c45af17481676413ae8bde99392e966ce02443528f72ddb5e8a030aa->leave($__internal_65f25845c45af17481676413ae8bde99392e966ce02443528f72ddb5e8a030aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce95df396d30d7e3aa40401366ad0096d08f50eff102daa0fb1598facdb4c31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce95df396d30d7e3aa40401366ad0096d08f50eff102daa0fb1598facdb4c31f->enter($__internal_ce95df396d30d7e3aa40401366ad0096d08f50eff102daa0fb1598facdb4c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ce95df396d30d7e3aa40401366ad0096d08f50eff102daa0fb1598facdb4c31f->leave($__internal_ce95df396d30d7e3aa40401366ad0096d08f50eff102daa0fb1598facdb4c31f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
