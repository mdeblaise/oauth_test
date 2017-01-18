<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0df2babeab86c70fe513f539f60e4fcccf6b8453a8fc36215f2065922b825e70 extends Twig_Template
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
        $__internal_aaf13ec8fc5e0ada84d53bfc1545fa5bea31e22561ab2e5dda6df666b2893d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf13ec8fc5e0ada84d53bfc1545fa5bea31e22561ab2e5dda6df666b2893d2b->enter($__internal_aaf13ec8fc5e0ada84d53bfc1545fa5bea31e22561ab2e5dda6df666b2893d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aaf13ec8fc5e0ada84d53bfc1545fa5bea31e22561ab2e5dda6df666b2893d2b->leave($__internal_aaf13ec8fc5e0ada84d53bfc1545fa5bea31e22561ab2e5dda6df666b2893d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
