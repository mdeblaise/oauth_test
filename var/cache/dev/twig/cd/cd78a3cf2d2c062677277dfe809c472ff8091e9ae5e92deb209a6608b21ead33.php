<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8162e324f6e8bfb137908f5729c55ae47fa8ba8615eb63d29456769a793a52d4 extends Twig_Template
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
        $__internal_d2fb7a713a8d74b6fb1b80958af576e0d980e4526f6bdd0a73f98a40d110ae58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fb7a713a8d74b6fb1b80958af576e0d980e4526f6bdd0a73f98a40d110ae58->enter($__internal_d2fb7a713a8d74b6fb1b80958af576e0d980e4526f6bdd0a73f98a40d110ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2fb7a713a8d74b6fb1b80958af576e0d980e4526f6bdd0a73f98a40d110ae58->leave($__internal_d2fb7a713a8d74b6fb1b80958af576e0d980e4526f6bdd0a73f98a40d110ae58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
