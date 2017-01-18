<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b62ff85b8710e0defec368ceded8067ac66015f4fc0b033f9ce5679ae5841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9885c354b3245bebe056449de07a90ae58a215246df27d34e5d8a95db9c26287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9885c354b3245bebe056449de07a90ae58a215246df27d34e5d8a95db9c26287->enter($__internal_9885c354b3245bebe056449de07a90ae58a215246df27d34e5d8a95db9c26287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9885c354b3245bebe056449de07a90ae58a215246df27d34e5d8a95db9c26287->leave($__internal_9885c354b3245bebe056449de07a90ae58a215246df27d34e5d8a95db9c26287_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_256df07ae9391e7f9363b461022630e008b2b54cd0c6d67a4e248de5ffa6c2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256df07ae9391e7f9363b461022630e008b2b54cd0c6d67a4e248de5ffa6c2d5->enter($__internal_256df07ae9391e7f9363b461022630e008b2b54cd0c6d67a4e248de5ffa6c2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_256df07ae9391e7f9363b461022630e008b2b54cd0c6d67a4e248de5ffa6c2d5->leave($__internal_256df07ae9391e7f9363b461022630e008b2b54cd0c6d67a4e248de5ffa6c2d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
