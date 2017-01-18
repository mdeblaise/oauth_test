<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fa7fabdb69108bc72d6a70aeee0b778c1744cf4321cbf100f22cfbcbbeb21225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_566c2e8647e337630f146cf6263e86d752f2848b7ab922af5d8095740181f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566c2e8647e337630f146cf6263e86d752f2848b7ab922af5d8095740181f892->enter($__internal_566c2e8647e337630f146cf6263e86d752f2848b7ab922af5d8095740181f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566c2e8647e337630f146cf6263e86d752f2848b7ab922af5d8095740181f892->leave($__internal_566c2e8647e337630f146cf6263e86d752f2848b7ab922af5d8095740181f892_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d525657d9baea501fcbcff3d1d4778974e6a2305315252ffe36328359a536e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d525657d9baea501fcbcff3d1d4778974e6a2305315252ffe36328359a536e6b->enter($__internal_d525657d9baea501fcbcff3d1d4778974e6a2305315252ffe36328359a536e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d525657d9baea501fcbcff3d1d4778974e6a2305315252ffe36328359a536e6b->leave($__internal_d525657d9baea501fcbcff3d1d4778974e6a2305315252ffe36328359a536e6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
