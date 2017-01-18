<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4caacf43325ebee2e2a6c25eb157a7db990af760be3449836f6848fb764163c5 extends Twig_Template
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
        $__internal_e84ed4978ee577ce9d1d67a3ffccba8fba5b9de08f568767d835b9222b947ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84ed4978ee577ce9d1d67a3ffccba8fba5b9de08f568767d835b9222b947ba8->enter($__internal_e84ed4978ee577ce9d1d67a3ffccba8fba5b9de08f568767d835b9222b947ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e84ed4978ee577ce9d1d67a3ffccba8fba5b9de08f568767d835b9222b947ba8->leave($__internal_e84ed4978ee577ce9d1d67a3ffccba8fba5b9de08f568767d835b9222b947ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
