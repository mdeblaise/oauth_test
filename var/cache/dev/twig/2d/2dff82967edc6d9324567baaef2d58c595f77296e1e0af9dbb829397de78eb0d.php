<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9160d5897a04577e00d75e58950f21bac7f3008b6ef433d86d65b23d8aa749a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5f0cc5e6ccbb79c45b0b9b76092c64a68a32445145ea398c550352435d82688f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0cc5e6ccbb79c45b0b9b76092c64a68a32445145ea398c550352435d82688f->enter($__internal_5f0cc5e6ccbb79c45b0b9b76092c64a68a32445145ea398c550352435d82688f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0cc5e6ccbb79c45b0b9b76092c64a68a32445145ea398c550352435d82688f->leave($__internal_5f0cc5e6ccbb79c45b0b9b76092c64a68a32445145ea398c550352435d82688f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_596edc7a42145b7e59b441289d21bea75d8d3e5f01a7e18567d6b4c076713056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596edc7a42145b7e59b441289d21bea75d8d3e5f01a7e18567d6b4c076713056->enter($__internal_596edc7a42145b7e59b441289d21bea75d8d3e5f01a7e18567d6b4c076713056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_596edc7a42145b7e59b441289d21bea75d8d3e5f01a7e18567d6b4c076713056->leave($__internal_596edc7a42145b7e59b441289d21bea75d8d3e5f01a7e18567d6b4c076713056_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
