<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_487981bf662ed4082231ba7d604437b178e370e6681feecfa1be186f27716e5f extends Twig_Template
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
        $__internal_a1fc3b3315fb1ab6150acaeab40bb496d21cc4c916c6a20e3e10e263dfcddf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fc3b3315fb1ab6150acaeab40bb496d21cc4c916c6a20e3e10e263dfcddf60->enter($__internal_a1fc3b3315fb1ab6150acaeab40bb496d21cc4c916c6a20e3e10e263dfcddf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_a1fc3b3315fb1ab6150acaeab40bb496d21cc4c916c6a20e3e10e263dfcddf60->leave($__internal_a1fc3b3315fb1ab6150acaeab40bb496d21cc4c916c6a20e3e10e263dfcddf60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
