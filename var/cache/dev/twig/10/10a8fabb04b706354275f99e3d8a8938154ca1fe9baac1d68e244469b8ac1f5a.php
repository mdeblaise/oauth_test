<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f696b73d31cfee365e3dfb14b3f2fbf17163b3ccfd3147e89dcc1c20fd5df3d extends Twig_Template
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
        $__internal_b9665b98b1cf089a5e520e216de9cf489615ee4b418eea33cdc8f238684aeb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9665b98b1cf089a5e520e216de9cf489615ee4b418eea33cdc8f238684aeb85->enter($__internal_b9665b98b1cf089a5e520e216de9cf489615ee4b418eea33cdc8f238684aeb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b9665b98b1cf089a5e520e216de9cf489615ee4b418eea33cdc8f238684aeb85->leave($__internal_b9665b98b1cf089a5e520e216de9cf489615ee4b418eea33cdc8f238684aeb85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
