<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_47da10ef6d250fa774b05e53912038d0ea137160a8c1aa2a30f29030a3647d8e extends Twig_Template
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
        $__internal_085fd1ae0f4ad93c03009d22ee116559d05ca18b51a51d79fdca4d6218d9c5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085fd1ae0f4ad93c03009d22ee116559d05ca18b51a51d79fdca4d6218d9c5e1->enter($__internal_085fd1ae0f4ad93c03009d22ee116559d05ca18b51a51d79fdca4d6218d9c5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_085fd1ae0f4ad93c03009d22ee116559d05ca18b51a51d79fdca4d6218d9c5e1->leave($__internal_085fd1ae0f4ad93c03009d22ee116559d05ca18b51a51d79fdca4d6218d9c5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
