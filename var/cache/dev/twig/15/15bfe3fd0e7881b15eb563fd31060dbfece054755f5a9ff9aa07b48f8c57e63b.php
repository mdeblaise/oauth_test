<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5bf8d28d8517d5ab10f2f4a61e972d5cb09ce1cecff06a51576d101bc3aeeaa7 extends Twig_Template
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
        $__internal_4d858327663d56edcdd03d050c91b94d36fbf83c5d8599b169b747d41f4f5b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d858327663d56edcdd03d050c91b94d36fbf83c5d8599b169b747d41f4f5b18->enter($__internal_4d858327663d56edcdd03d050c91b94d36fbf83c5d8599b169b747d41f4f5b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4d858327663d56edcdd03d050c91b94d36fbf83c5d8599b169b747d41f4f5b18->leave($__internal_4d858327663d56edcdd03d050c91b94d36fbf83c5d8599b169b747d41f4f5b18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
