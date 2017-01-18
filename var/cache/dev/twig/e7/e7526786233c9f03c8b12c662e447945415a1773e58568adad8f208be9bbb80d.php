<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5731fc7f8ca10977092da69b6159f1486764323bb4c18140bbe0e08fcdafc7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5d1cdca88e259406b134f1d3e6a762a9a5f02fe6d6e5a9736cf10c5fd77df8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1cdca88e259406b134f1d3e6a762a9a5f02fe6d6e5a9736cf10c5fd77df8df->enter($__internal_5d1cdca88e259406b134f1d3e6a762a9a5f02fe6d6e5a9736cf10c5fd77df8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1cdca88e259406b134f1d3e6a762a9a5f02fe6d6e5a9736cf10c5fd77df8df->leave($__internal_5d1cdca88e259406b134f1d3e6a762a9a5f02fe6d6e5a9736cf10c5fd77df8df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_395931d3a9ea5ccc4cf7c1dbf56355cd73faeb79abde824fe4f141b20aa4e6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395931d3a9ea5ccc4cf7c1dbf56355cd73faeb79abde824fe4f141b20aa4e6b8->enter($__internal_395931d3a9ea5ccc4cf7c1dbf56355cd73faeb79abde824fe4f141b20aa4e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_395931d3a9ea5ccc4cf7c1dbf56355cd73faeb79abde824fe4f141b20aa4e6b8->leave($__internal_395931d3a9ea5ccc4cf7c1dbf56355cd73faeb79abde824fe4f141b20aa4e6b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
