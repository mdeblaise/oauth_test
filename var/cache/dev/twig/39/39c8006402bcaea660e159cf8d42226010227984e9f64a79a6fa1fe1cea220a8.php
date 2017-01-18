<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_43c88f2387885de758eb9736a172f8e2ba5c2acf90722011df0f2c4eb911130c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910b16e9107e27b289c274520ff07a9881ee3428670955356653f3673bed1707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910b16e9107e27b289c274520ff07a9881ee3428670955356653f3673bed1707->enter($__internal_910b16e9107e27b289c274520ff07a9881ee3428670955356653f3673bed1707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910b16e9107e27b289c274520ff07a9881ee3428670955356653f3673bed1707->leave($__internal_910b16e9107e27b289c274520ff07a9881ee3428670955356653f3673bed1707_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c12bd52a1b54e975ca5995da463f9c62158c854f52c76d1529fc09b6495b521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c12bd52a1b54e975ca5995da463f9c62158c854f52c76d1529fc09b6495b521->enter($__internal_5c12bd52a1b54e975ca5995da463f9c62158c854f52c76d1529fc09b6495b521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c12bd52a1b54e975ca5995da463f9c62158c854f52c76d1529fc09b6495b521->leave($__internal_5c12bd52a1b54e975ca5995da463f9c62158c854f52c76d1529fc09b6495b521_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb7224abcbc765452268556c6423c518dad5a5e876768b961343ddee3995e8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7224abcbc765452268556c6423c518dad5a5e876768b961343ddee3995e8a2->enter($__internal_bb7224abcbc765452268556c6423c518dad5a5e876768b961343ddee3995e8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb7224abcbc765452268556c6423c518dad5a5e876768b961343ddee3995e8a2->leave($__internal_bb7224abcbc765452268556c6423c518dad5a5e876768b961343ddee3995e8a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea29d8514c728b95bdcc41f5b6a44c537b108f9d9020a9bd0c30732313bcffea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea29d8514c728b95bdcc41f5b6a44c537b108f9d9020a9bd0c30732313bcffea->enter($__internal_ea29d8514c728b95bdcc41f5b6a44c537b108f9d9020a9bd0c30732313bcffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ea29d8514c728b95bdcc41f5b6a44c537b108f9d9020a9bd0c30732313bcffea->leave($__internal_ea29d8514c728b95bdcc41f5b6a44c537b108f9d9020a9bd0c30732313bcffea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
