<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_26eada4a8ea7a9608342beebdf7bb239062be96dae4ac006a01f02b0664c0eda extends Twig_Template
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
        $__internal_8c9d5ecac49e7e3efa88bf8b0826e04eff304fd5bd4b09b13f6aedeba85c62f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9d5ecac49e7e3efa88bf8b0826e04eff304fd5bd4b09b13f6aedeba85c62f7->enter($__internal_8c9d5ecac49e7e3efa88bf8b0826e04eff304fd5bd4b09b13f6aedeba85c62f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c9d5ecac49e7e3efa88bf8b0826e04eff304fd5bd4b09b13f6aedeba85c62f7->leave($__internal_8c9d5ecac49e7e3efa88bf8b0826e04eff304fd5bd4b09b13f6aedeba85c62f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
