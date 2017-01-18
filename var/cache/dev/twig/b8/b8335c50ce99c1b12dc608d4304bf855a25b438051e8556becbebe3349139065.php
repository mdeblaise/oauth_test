<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_de6efc14ab1a62deaf06eede932e75e835399205f93629e4ec3c93bf4d1a8410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be6dd10fbe4b4d02bde86c882e83b8a811be815834a3aa7ede94610a97f9b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be6dd10fbe4b4d02bde86c882e83b8a811be815834a3aa7ede94610a97f9b89->enter($__internal_9be6dd10fbe4b4d02bde86c882e83b8a811be815834a3aa7ede94610a97f9b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be6dd10fbe4b4d02bde86c882e83b8a811be815834a3aa7ede94610a97f9b89->leave($__internal_9be6dd10fbe4b4d02bde86c882e83b8a811be815834a3aa7ede94610a97f9b89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f46c515ed89fc1e88e25e98ac845d9eb36a80979d894656b09ca8fa1efc4ac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46c515ed89fc1e88e25e98ac845d9eb36a80979d894656b09ca8fa1efc4ac49->enter($__internal_f46c515ed89fc1e88e25e98ac845d9eb36a80979d894656b09ca8fa1efc4ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f46c515ed89fc1e88e25e98ac845d9eb36a80979d894656b09ca8fa1efc4ac49->leave($__internal_f46c515ed89fc1e88e25e98ac845d9eb36a80979d894656b09ca8fa1efc4ac49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5013de43367e368e7fbe208e130da97c147757122737868dfd6c7aa4e067d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5013de43367e368e7fbe208e130da97c147757122737868dfd6c7aa4e067d9->enter($__internal_2e5013de43367e368e7fbe208e130da97c147757122737868dfd6c7aa4e067d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2e5013de43367e368e7fbe208e130da97c147757122737868dfd6c7aa4e067d9->leave($__internal_2e5013de43367e368e7fbe208e130da97c147757122737868dfd6c7aa4e067d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0228f57ae3d5fc0338b67baa3ae3255e302521fbf08454ee80804777331ef1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0228f57ae3d5fc0338b67baa3ae3255e302521fbf08454ee80804777331ef1a3->enter($__internal_0228f57ae3d5fc0338b67baa3ae3255e302521fbf08454ee80804777331ef1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0228f57ae3d5fc0338b67baa3ae3255e302521fbf08454ee80804777331ef1a3->leave($__internal_0228f57ae3d5fc0338b67baa3ae3255e302521fbf08454ee80804777331ef1a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
