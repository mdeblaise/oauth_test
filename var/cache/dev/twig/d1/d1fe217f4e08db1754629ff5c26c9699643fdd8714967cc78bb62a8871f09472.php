<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_beff339c502e54f26dbdb1a82cd68d5fc0fab2e9f72450a9c660d65ca809fcfa extends Twig_Template
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
        $__internal_9e901b33b812f863d7bcaf87bfe3fa7a7ad46b0af5216a0de7660ba7f91133b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e901b33b812f863d7bcaf87bfe3fa7a7ad46b0af5216a0de7660ba7f91133b6->enter($__internal_9e901b33b812f863d7bcaf87bfe3fa7a7ad46b0af5216a0de7660ba7f91133b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_9e901b33b812f863d7bcaf87bfe3fa7a7ad46b0af5216a0de7660ba7f91133b6->leave($__internal_9e901b33b812f863d7bcaf87bfe3fa7a7ad46b0af5216a0de7660ba7f91133b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
