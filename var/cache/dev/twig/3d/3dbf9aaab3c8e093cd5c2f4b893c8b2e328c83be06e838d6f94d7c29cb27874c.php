<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22f3a65ee96c06e042ec1cd4ab29c8c36d728429225e3dcada3ecda10a89d83e extends Twig_Template
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
        $__internal_23505fe97e961705b2bcc61114d86297884d8532467620babc0672fba1545bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23505fe97e961705b2bcc61114d86297884d8532467620babc0672fba1545bd0->enter($__internal_23505fe97e961705b2bcc61114d86297884d8532467620babc0672fba1545bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_23505fe97e961705b2bcc61114d86297884d8532467620babc0672fba1545bd0->leave($__internal_23505fe97e961705b2bcc61114d86297884d8532467620babc0672fba1545bd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
