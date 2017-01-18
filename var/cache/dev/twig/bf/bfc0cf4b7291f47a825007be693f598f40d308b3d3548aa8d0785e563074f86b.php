<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc83685e045a336ea97f2c09ad8699ad415350f223a691e05768eaf26ff272e0 extends Twig_Template
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
        $__internal_543b3197c5b24cf7c0dd851089eba458c4f6faf8d7ca5d2076be88d2012f7a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543b3197c5b24cf7c0dd851089eba458c4f6faf8d7ca5d2076be88d2012f7a85->enter($__internal_543b3197c5b24cf7c0dd851089eba458c4f6faf8d7ca5d2076be88d2012f7a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_543b3197c5b24cf7c0dd851089eba458c4f6faf8d7ca5d2076be88d2012f7a85->leave($__internal_543b3197c5b24cf7c0dd851089eba458c4f6faf8d7ca5d2076be88d2012f7a85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
