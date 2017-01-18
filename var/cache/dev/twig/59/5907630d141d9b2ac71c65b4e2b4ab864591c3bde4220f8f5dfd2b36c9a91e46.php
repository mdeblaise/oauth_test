<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d819ad1ea57074ff2f41162cb635825c28603dd30bda87fb7484cab791a14bb5 extends Twig_Template
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
        $__internal_d4fb82b988e9802c3860c39f0cefba2279e7974d7fa497659667051ad2b31332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fb82b988e9802c3860c39f0cefba2279e7974d7fa497659667051ad2b31332->enter($__internal_d4fb82b988e9802c3860c39f0cefba2279e7974d7fa497659667051ad2b31332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_d4fb82b988e9802c3860c39f0cefba2279e7974d7fa497659667051ad2b31332->leave($__internal_d4fb82b988e9802c3860c39f0cefba2279e7974d7fa497659667051ad2b31332_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
