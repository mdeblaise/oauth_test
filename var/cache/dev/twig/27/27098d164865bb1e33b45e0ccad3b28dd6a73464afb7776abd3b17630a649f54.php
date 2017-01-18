<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2db75cf25ac7182766e1a57b602b15d10436864f673eab4460045f98025aed83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a4fae082c8b507286c3fb56d68ef69d9b0c93a65516016ca583af1e330608108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fae082c8b507286c3fb56d68ef69d9b0c93a65516016ca583af1e330608108->enter($__internal_a4fae082c8b507286c3fb56d68ef69d9b0c93a65516016ca583af1e330608108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4fae082c8b507286c3fb56d68ef69d9b0c93a65516016ca583af1e330608108->leave($__internal_a4fae082c8b507286c3fb56d68ef69d9b0c93a65516016ca583af1e330608108_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0d000c9446aff5a557edb2c069e8016144b1bfafccd449743fa74eed0bce428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d000c9446aff5a557edb2c069e8016144b1bfafccd449743fa74eed0bce428->enter($__internal_d0d000c9446aff5a557edb2c069e8016144b1bfafccd449743fa74eed0bce428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d0d000c9446aff5a557edb2c069e8016144b1bfafccd449743fa74eed0bce428->leave($__internal_d0d000c9446aff5a557edb2c069e8016144b1bfafccd449743fa74eed0bce428_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
