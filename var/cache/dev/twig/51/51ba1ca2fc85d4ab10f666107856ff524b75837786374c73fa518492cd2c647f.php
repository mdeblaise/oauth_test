<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c9e473a0518340c5feb68f2005420e8992a530659a581b33b60e804859f410c1 extends Twig_Template
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
        $__internal_d1a40373d3e48968d3c7cdbd536fb6c95e22f103adae1d3bbb8d410271793d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a40373d3e48968d3c7cdbd536fb6c95e22f103adae1d3bbb8d410271793d92->enter($__internal_d1a40373d3e48968d3c7cdbd536fb6c95e22f103adae1d3bbb8d410271793d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d1a40373d3e48968d3c7cdbd536fb6c95e22f103adae1d3bbb8d410271793d92->leave($__internal_d1a40373d3e48968d3c7cdbd536fb6c95e22f103adae1d3bbb8d410271793d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
