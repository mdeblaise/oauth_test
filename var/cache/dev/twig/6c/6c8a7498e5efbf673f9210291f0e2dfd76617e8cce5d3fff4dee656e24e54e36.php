<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8b58d9a403fd7f1aa50b62cdd58f888adee752d72e966ddfd55f1c661208593 extends Twig_Template
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
        $__internal_4192cdf473a5b653286072137d819d3197203314892ed5a4206628d3087c32d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4192cdf473a5b653286072137d819d3197203314892ed5a4206628d3087c32d0->enter($__internal_4192cdf473a5b653286072137d819d3197203314892ed5a4206628d3087c32d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4192cdf473a5b653286072137d819d3197203314892ed5a4206628d3087c32d0->leave($__internal_4192cdf473a5b653286072137d819d3197203314892ed5a4206628d3087c32d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
