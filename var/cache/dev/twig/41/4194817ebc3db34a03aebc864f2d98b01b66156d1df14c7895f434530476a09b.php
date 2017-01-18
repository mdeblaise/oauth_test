<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2442ed95783a6c3319950a333fe8199e7482042a44f618f3f3cc3fd1fb126eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_45c6173c0e224a315a9044e6c061462e98900bacf9b4fa8e6be81b97cb79c74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c6173c0e224a315a9044e6c061462e98900bacf9b4fa8e6be81b97cb79c74d->enter($__internal_45c6173c0e224a315a9044e6c061462e98900bacf9b4fa8e6be81b97cb79c74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45c6173c0e224a315a9044e6c061462e98900bacf9b4fa8e6be81b97cb79c74d->leave($__internal_45c6173c0e224a315a9044e6c061462e98900bacf9b4fa8e6be81b97cb79c74d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c58f50dbdba21bfacb7894b9c036aeeaca5bb9a5982c16e0f9878b16da7d68f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58f50dbdba21bfacb7894b9c036aeeaca5bb9a5982c16e0f9878b16da7d68f7->enter($__internal_c58f50dbdba21bfacb7894b9c036aeeaca5bb9a5982c16e0f9878b16da7d68f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c58f50dbdba21bfacb7894b9c036aeeaca5bb9a5982c16e0f9878b16da7d68f7->leave($__internal_c58f50dbdba21bfacb7894b9c036aeeaca5bb9a5982c16e0f9878b16da7d68f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
