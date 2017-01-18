<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62bbb8bbcdae280c08b7ec519012024119886eb42a34066e68dba2aead4fb7d1 extends Twig_Template
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
        $__internal_d07ee2344ba106d6b4d1f2ff0d6966b110856a97b1b2244df3451bb67c8c5fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07ee2344ba106d6b4d1f2ff0d6966b110856a97b1b2244df3451bb67c8c5fcc->enter($__internal_d07ee2344ba106d6b4d1f2ff0d6966b110856a97b1b2244df3451bb67c8c5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d07ee2344ba106d6b4d1f2ff0d6966b110856a97b1b2244df3451bb67c8c5fcc->leave($__internal_d07ee2344ba106d6b4d1f2ff0d6966b110856a97b1b2244df3451bb67c8c5fcc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
