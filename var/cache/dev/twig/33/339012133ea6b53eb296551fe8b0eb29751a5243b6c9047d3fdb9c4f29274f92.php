<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9eb60d1d4ab10b5fd3cf6887c2bde4fc6ffeb2ee7ea81b8ff9989ae03af49594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ab35024b03676b50c073d66a61097e83ab81e1a3ba329f34b12b5e23489f4619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab35024b03676b50c073d66a61097e83ab81e1a3ba329f34b12b5e23489f4619->enter($__internal_ab35024b03676b50c073d66a61097e83ab81e1a3ba329f34b12b5e23489f4619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab35024b03676b50c073d66a61097e83ab81e1a3ba329f34b12b5e23489f4619->leave($__internal_ab35024b03676b50c073d66a61097e83ab81e1a3ba329f34b12b5e23489f4619_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_005396536415d7ce89853ff9cd2f57ad48db008ebbb93147bda9d4335f172c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005396536415d7ce89853ff9cd2f57ad48db008ebbb93147bda9d4335f172c76->enter($__internal_005396536415d7ce89853ff9cd2f57ad48db008ebbb93147bda9d4335f172c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_005396536415d7ce89853ff9cd2f57ad48db008ebbb93147bda9d4335f172c76->leave($__internal_005396536415d7ce89853ff9cd2f57ad48db008ebbb93147bda9d4335f172c76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/srv/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
