<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f635037a7dc605176e52c14a826c142617ef02461f3279615891890f495b3ac6 extends Twig_Template
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
        $__internal_d298cf8c84f0cabbb2078aebca9f65f5cc8267ef55c6516b49b6189c517f239c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d298cf8c84f0cabbb2078aebca9f65f5cc8267ef55c6516b49b6189c517f239c->enter($__internal_d298cf8c84f0cabbb2078aebca9f65f5cc8267ef55c6516b49b6189c517f239c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d298cf8c84f0cabbb2078aebca9f65f5cc8267ef55c6516b49b6189c517f239c->leave($__internal_d298cf8c84f0cabbb2078aebca9f65f5cc8267ef55c6516b49b6189c517f239c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
