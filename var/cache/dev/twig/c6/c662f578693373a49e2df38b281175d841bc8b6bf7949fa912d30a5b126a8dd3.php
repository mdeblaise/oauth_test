<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e93e244241aa74f7b1bb9c64640364470f0d5fc5547f4c97ee98c8ef2fa5906b extends Twig_Template
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
        $__internal_6d5136cd323b89daf03b90170d130b44d7b8d50f0ff9abc3b47b6fcb37b3154d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5136cd323b89daf03b90170d130b44d7b8d50f0ff9abc3b47b6fcb37b3154d->enter($__internal_6d5136cd323b89daf03b90170d130b44d7b8d50f0ff9abc3b47b6fcb37b3154d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6d5136cd323b89daf03b90170d130b44d7b8d50f0ff9abc3b47b6fcb37b3154d->leave($__internal_6d5136cd323b89daf03b90170d130b44d7b8d50f0ff9abc3b47b6fcb37b3154d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
