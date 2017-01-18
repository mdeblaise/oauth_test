<?php

/* FOSUserBundle:Default:layout.html.twig */
class __TwigTemplate_4327eb3c1a7e3a392e67eae28de9e3ece6aac31002b11214e30aa83e1eb324ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MMCFosUserBundle::layout.html.twig", "FOSUserBundle:Default:layout.html.twig", 1);
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
        $__internal_f70bae841fca11ee79d0205cba39e5f83f8a65539985abbe63e4414f3ddef7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70bae841fca11ee79d0205cba39e5f83f8a65539985abbe63e4414f3ddef7da->enter($__internal_f70bae841fca11ee79d0205cba39e5f83f8a65539985abbe63e4414f3ddef7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70bae841fca11ee79d0205cba39e5f83f8a65539985abbe63e4414f3ddef7da->leave($__internal_f70bae841fca11ee79d0205cba39e5f83f8a65539985abbe63e4414f3ddef7da_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_b99baed93b0eedfc16b6175343bd88396ecbc3a7ca529292032e430cb9b009f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99baed93b0eedfc16b6175343bd88396ecbc3a7ca529292032e430cb9b009f9->enter($__internal_b99baed93b0eedfc16b6175343bd88396ecbc3a7ca529292032e430cb9b009f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
";
        
        $__internal_b99baed93b0eedfc16b6175343bd88396ecbc3a7ca529292032e430cb9b009f9->leave($__internal_b99baed93b0eedfc16b6175343bd88396ecbc3a7ca529292032e430cb9b009f9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_092f84a6e2b9c342cefbe2a9e0f08341d44193136e08f89538547717444189d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f84a6e2b9c342cefbe2a9e0f08341d44193136e08f89538547717444189d0->enter($__internal_092f84a6e2b9c342cefbe2a9e0f08341d44193136e08f89538547717444189d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_092f84a6e2b9c342cefbe2a9e0f08341d44193136e08f89538547717444189d0->leave($__internal_092f84a6e2b9c342cefbe2a9e0f08341d44193136e08f89538547717444189d0_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb1574c487be15c30cb8ee4b62403f8c8d76d76c7de9292d3ef54c49b7402421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1574c487be15c30cb8ee4b62403f8c8d76d76c7de9292d3ef54c49b7402421->enter($__internal_eb1574c487be15c30cb8ee4b62403f8c8d76d76c7de9292d3ef54c49b7402421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_eb1574c487be15c30cb8ee4b62403f8c8d76d76c7de9292d3ef54c49b7402421->leave($__internal_eb1574c487be15c30cb8ee4b62403f8c8d76d76c7de9292d3ef54c49b7402421_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Default:layout.html.twig";
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

", "FOSUserBundle:Default:layout.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Default/layout.html.twig");
    }
}
