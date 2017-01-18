<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_63a39efcfbab460dbf7aafa4deb0bdf21633a4b16029e82e2e5a864d4dad3237 extends Twig_Template
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
        $__internal_901827b5f6d95663fc21706c6648a14989bb87811f6bf96daed992ce8185bd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901827b5f6d95663fc21706c6648a14989bb87811f6bf96daed992ce8185bd4c->enter($__internal_901827b5f6d95663fc21706c6648a14989bb87811f6bf96daed992ce8185bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_901827b5f6d95663fc21706c6648a14989bb87811f6bf96daed992ce8185bd4c->leave($__internal_901827b5f6d95663fc21706c6648a14989bb87811f6bf96daed992ce8185bd4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
