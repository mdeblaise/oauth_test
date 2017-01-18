<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_23bd7b5a32686d02c57ce5008eefc28293dd1dc1c2a1b7319b0807a46ac9af3c extends Twig_Template
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
        $__internal_1c74a263eb8b1b8eec6956d80b3d9146a89b2723468dba9f7e03557c6b4a0d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c74a263eb8b1b8eec6956d80b3d9146a89b2723468dba9f7e03557c6b4a0d05->enter($__internal_1c74a263eb8b1b8eec6956d80b3d9146a89b2723468dba9f7e03557c6b4a0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1c74a263eb8b1b8eec6956d80b3d9146a89b2723468dba9f7e03557c6b4a0d05->leave($__internal_1c74a263eb8b1b8eec6956d80b3d9146a89b2723468dba9f7e03557c6b4a0d05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
