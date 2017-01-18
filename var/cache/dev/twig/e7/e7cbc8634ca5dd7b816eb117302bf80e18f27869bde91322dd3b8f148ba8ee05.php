<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_23915e2a0d9b277758bbbc4910bd566573e79d443fb0376c2eeedae111bfe8a1 extends Twig_Template
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
        $__internal_7c37885cfb0194ae78c8fb68574d7d829e30ba8e372d69e78e60d49394ddc0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c37885cfb0194ae78c8fb68574d7d829e30ba8e372d69e78e60d49394ddc0d9->enter($__internal_7c37885cfb0194ae78c8fb68574d7d829e30ba8e372d69e78e60d49394ddc0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7c37885cfb0194ae78c8fb68574d7d829e30ba8e372d69e78e60d49394ddc0d9->leave($__internal_7c37885cfb0194ae78c8fb68574d7d829e30ba8e372d69e78e60d49394ddc0d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
