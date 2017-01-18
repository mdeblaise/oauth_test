<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfdbf3d78654b9e1c07ae8f1cbe6d324ea887356de82e98004ac68a0442ec56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f50b139fb4fa47e3db1c25a446992da1e1cc26c4c605e23c553417b0a19d288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f50b139fb4fa47e3db1c25a446992da1e1cc26c4c605e23c553417b0a19d288->enter($__internal_5f50b139fb4fa47e3db1c25a446992da1e1cc26c4c605e23c553417b0a19d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5f50b139fb4fa47e3db1c25a446992da1e1cc26c4c605e23c553417b0a19d288->leave($__internal_5f50b139fb4fa47e3db1c25a446992da1e1cc26c4c605e23c553417b0a19d288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
