<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eefc3d76e3eb04f468379b924cdea843c432b16a07c01916c255b985bb4e2d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0e5df1d845381a884423a54726a290ff0f6c72bc7eb3cfd0f8e06102dcb011b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5df1d845381a884423a54726a290ff0f6c72bc7eb3cfd0f8e06102dcb011b2->enter($__internal_0e5df1d845381a884423a54726a290ff0f6c72bc7eb3cfd0f8e06102dcb011b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5df1d845381a884423a54726a290ff0f6c72bc7eb3cfd0f8e06102dcb011b2->leave($__internal_0e5df1d845381a884423a54726a290ff0f6c72bc7eb3cfd0f8e06102dcb011b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c893581307878c2605e7291989b819d9ae648da84e2f81e0110d93639386156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c893581307878c2605e7291989b819d9ae648da84e2f81e0110d93639386156->enter($__internal_1c893581307878c2605e7291989b819d9ae648da84e2f81e0110d93639386156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1c893581307878c2605e7291989b819d9ae648da84e2f81e0110d93639386156->leave($__internal_1c893581307878c2605e7291989b819d9ae648da84e2f81e0110d93639386156_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad758c138088e890e15d2b9107b1d7d3daceb013e885a843e08c297c238cca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad758c138088e890e15d2b9107b1d7d3daceb013e885a843e08c297c238cca94->enter($__internal_ad758c138088e890e15d2b9107b1d7d3daceb013e885a843e08c297c238cca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ad758c138088e890e15d2b9107b1d7d3daceb013e885a843e08c297c238cca94->leave($__internal_ad758c138088e890e15d2b9107b1d7d3daceb013e885a843e08c297c238cca94_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
