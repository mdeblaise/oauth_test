<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_08bfde386115dd299aabb6d4f9657fa341293827ad3531d0344ef82ef1b8aa8e extends Twig_Template
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
        $__internal_aeb9342f73e580c4919cc555ca26b5353b1bb7d3df379b6b71a52bfc9c96ef58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb9342f73e580c4919cc555ca26b5353b1bb7d3df379b6b71a52bfc9c96ef58->enter($__internal_aeb9342f73e580c4919cc555ca26b5353b1bb7d3df379b6b71a52bfc9c96ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aeb9342f73e580c4919cc555ca26b5353b1bb7d3df379b6b71a52bfc9c96ef58->leave($__internal_aeb9342f73e580c4919cc555ca26b5353b1bb7d3df379b6b71a52bfc9c96ef58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
