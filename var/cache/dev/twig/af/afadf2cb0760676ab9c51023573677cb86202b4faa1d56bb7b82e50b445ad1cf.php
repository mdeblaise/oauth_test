<?php

/* base.html.twig */
class __TwigTemplate_8baf11e6d155e90ad15b7e51e38749e24fabb6f24ecf9ffe962cfd5321c936fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c1cce1b01976c6e2288c54cecc2357629b7d67e1ad978fe6b0bc3cd05763db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1cce1b01976c6e2288c54cecc2357629b7d67e1ad978fe6b0bc3cd05763db8->enter($__internal_6c1cce1b01976c6e2288c54cecc2357629b7d67e1ad978fe6b0bc3cd05763db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c1cce1b01976c6e2288c54cecc2357629b7d67e1ad978fe6b0bc3cd05763db8->leave($__internal_6c1cce1b01976c6e2288c54cecc2357629b7d67e1ad978fe6b0bc3cd05763db8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4eed4b41fbee4a58135978e036b873c3380f6ce0bae2c8ce794cd47047c8cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eed4b41fbee4a58135978e036b873c3380f6ce0bae2c8ce794cd47047c8cb3->enter($__internal_c4eed4b41fbee4a58135978e036b873c3380f6ce0bae2c8ce794cd47047c8cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4eed4b41fbee4a58135978e036b873c3380f6ce0bae2c8ce794cd47047c8cb3->leave($__internal_c4eed4b41fbee4a58135978e036b873c3380f6ce0bae2c8ce794cd47047c8cb3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1e36e2b9853fcb007475ca3f6d007438bfde69824b36106b8aa9bbfb755657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e36e2b9853fcb007475ca3f6d007438bfde69824b36106b8aa9bbfb755657f->enter($__internal_b1e36e2b9853fcb007475ca3f6d007438bfde69824b36106b8aa9bbfb755657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b1e36e2b9853fcb007475ca3f6d007438bfde69824b36106b8aa9bbfb755657f->leave($__internal_b1e36e2b9853fcb007475ca3f6d007438bfde69824b36106b8aa9bbfb755657f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10a3283071797e035f752c269f6bbc5149db40e2c92b51050585c3b5714e020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10a3283071797e035f752c269f6bbc5149db40e2c92b51050585c3b5714e020->enter($__internal_b10a3283071797e035f752c269f6bbc5149db40e2c92b51050585c3b5714e020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b10a3283071797e035f752c269f6bbc5149db40e2c92b51050585c3b5714e020->leave($__internal_b10a3283071797e035f752c269f6bbc5149db40e2c92b51050585c3b5714e020_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eab5ae49cba8eab18133202cfafb1d6588056831782d94a139183941350ee48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab5ae49cba8eab18133202cfafb1d6588056831782d94a139183941350ee48d->enter($__internal_eab5ae49cba8eab18133202cfafb1d6588056831782d94a139183941350ee48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eab5ae49cba8eab18133202cfafb1d6588056831782d94a139183941350ee48d->leave($__internal_eab5ae49cba8eab18133202cfafb1d6588056831782d94a139183941350ee48d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/srv/app/Resources/views/base.html.twig");
    }
}
