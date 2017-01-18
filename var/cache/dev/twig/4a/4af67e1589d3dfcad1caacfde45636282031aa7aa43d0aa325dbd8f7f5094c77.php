<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb1f99f49ab51ce71b0a458621775534a3fa0a386148fcaeb41657da028551c6 extends Twig_Template
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
        $__internal_691d8fb2b3acc699821fe739a0c435959ce40b9b89b08b4aad6d2c5d685fdee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691d8fb2b3acc699821fe739a0c435959ce40b9b89b08b4aad6d2c5d685fdee0->enter($__internal_691d8fb2b3acc699821fe739a0c435959ce40b9b89b08b4aad6d2c5d685fdee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_691d8fb2b3acc699821fe739a0c435959ce40b9b89b08b4aad6d2c5d685fdee0->leave($__internal_691d8fb2b3acc699821fe739a0c435959ce40b9b89b08b4aad6d2c5d685fdee0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
