<?php

/* MMCFosUserBundle:Default:layout.html.twig */
class __TwigTemplate_ed94e36cd6fbcd12fb5c9836f382147f70f90c99345470848b23883b727858b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMCFosUserBundle::layout.html.twig", "MMCFosUserBundle:Default:layout.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MMCFosUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2f324d01b0414ba0238ae843468d624e54823c30949e30c9870fc9ef674c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2f324d01b0414ba0238ae843468d624e54823c30949e30c9870fc9ef674c85->enter($__internal_ea2f324d01b0414ba0238ae843468d624e54823c30949e30c9870fc9ef674c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2f324d01b0414ba0238ae843468d624e54823c30949e30c9870fc9ef674c85->leave($__internal_ea2f324d01b0414ba0238ae843468d624e54823c30949e30c9870fc9ef674c85_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2406a12cefaf235bf4af5b497bc9d6ebd7a395c9d4e5f3fa7e24bd349e25dc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2406a12cefaf235bf4af5b497bc9d6ebd7a395c9d4e5f3fa7e24bd349e25dc7b->enter($__internal_2406a12cefaf235bf4af5b497bc9d6ebd7a395c9d4e5f3fa7e24bd349e25dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
";
        
        $__internal_2406a12cefaf235bf4af5b497bc9d6ebd7a395c9d4e5f3fa7e24bd349e25dc7b->leave($__internal_2406a12cefaf235bf4af5b497bc9d6ebd7a395c9d4e5f3fa7e24bd349e25dc7b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46ffbfc7eb2dfec6eeaeae2239522194f2f5fad2bca1f2569560b55df585a8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ffbfc7eb2dfec6eeaeae2239522194f2f5fad2bca1f2569560b55df585a8de->enter($__internal_46ffbfc7eb2dfec6eeaeae2239522194f2f5fad2bca1f2569560b55df585a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.8/css/AdminLTE.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css\">
";
        
        $__internal_46ffbfc7eb2dfec6eeaeae2239522194f2f5fad2bca1f2569560b55df585a8de->leave($__internal_46ffbfc7eb2dfec6eeaeae2239522194f2f5fad2bca1f2569560b55df585a8de_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84b57df58a58c7fbf6aa5875bc2ca09d90a2ebb3de03ceb9bc10118a1bb728ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b57df58a58c7fbf6aa5875bc2ca09d90a2ebb3de03ceb9bc10118a1bb728ab->enter($__internal_84b57df58a58c7fbf6aa5875bc2ca09d90a2ebb3de03ceb9bc10118a1bb728ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <!-- jQuery 2.2.0 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- iCheck -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/icheck.min.js\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
";
        
        $__internal_84b57df58a58c7fbf6aa5875bc2ca09d90a2ebb3de03ceb9bc10118a1bb728ab->leave($__internal_84b57df58a58c7fbf6aa5875bc2ca09d90a2ebb3de03ceb9bc10118a1bb728ab_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 21,  57 => 9,  51 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MMCFosUserBundle::layout.html.twig\" %}

{% block meta %}
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
{% endblock meta %}

{% block stylesheets %}
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.8/css/AdminLTE.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css\">
{% endblock stylesheets %}

{% block javascripts %}
    <!-- jQuery 2.2.0 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- iCheck -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/icheck.min.js\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
{% endblock javascripts %}

", "MMCFosUserBundle:Default:layout.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Default/layout.html.twig");
    }
}
