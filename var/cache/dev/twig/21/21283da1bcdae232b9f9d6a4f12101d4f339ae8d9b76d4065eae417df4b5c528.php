<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6ae024c41279d8423aae664a0b86bfcfe567c2110059207f73d44b01d72f73e0 extends Twig_Template
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
        $__internal_50701d2e1d9d9d033327c0dda11b3676be1956761220b12dc73574844c5f9b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50701d2e1d9d9d033327c0dda11b3676be1956761220b12dc73574844c5f9b1b->enter($__internal_50701d2e1d9d9d033327c0dda11b3676be1956761220b12dc73574844c5f9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_50701d2e1d9d9d033327c0dda11b3676be1956761220b12dc73574844c5f9b1b->leave($__internal_50701d2e1d9d9d033327c0dda11b3676be1956761220b12dc73574844c5f9b1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
