<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4189c65ce478f02648c856d42e2cc116789a3f4bf79bff053b3c51c6d303c06 extends Twig_Template
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
        $__internal_ca1c8d03637873af78e16233f1b293dff3771faf53e500276df4442dd10a03d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1c8d03637873af78e16233f1b293dff3771faf53e500276df4442dd10a03d2->enter($__internal_ca1c8d03637873af78e16233f1b293dff3771faf53e500276df4442dd10a03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ca1c8d03637873af78e16233f1b293dff3771faf53e500276df4442dd10a03d2->leave($__internal_ca1c8d03637873af78e16233f1b293dff3771faf53e500276df4442dd10a03d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
