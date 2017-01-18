<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_db6c49c7e684d3795167bab6b85f4a520808eca180af1db871de4130956ee6b3 extends Twig_Template
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
        $__internal_88930c86cbdf942bc859c802372d9b7bafe1cb50890ec47416026b8d5417cf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88930c86cbdf942bc859c802372d9b7bafe1cb50890ec47416026b8d5417cf68->enter($__internal_88930c86cbdf942bc859c802372d9b7bafe1cb50890ec47416026b8d5417cf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_88930c86cbdf942bc859c802372d9b7bafe1cb50890ec47416026b8d5417cf68->leave($__internal_88930c86cbdf942bc859c802372d9b7bafe1cb50890ec47416026b8d5417cf68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
