<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74a5c5af01cddba92a0ac19d21c290d224776a01b14d02cd817a997e909fd70e extends Twig_Template
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
        $__internal_4e0e4e503f41f64bee0ad008ffba645e7f66fed74c1024331af40c1aeb9bbce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0e4e503f41f64bee0ad008ffba645e7f66fed74c1024331af40c1aeb9bbce5->enter($__internal_4e0e4e503f41f64bee0ad008ffba645e7f66fed74c1024331af40c1aeb9bbce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e0e4e503f41f64bee0ad008ffba645e7f66fed74c1024331af40c1aeb9bbce5->leave($__internal_4e0e4e503f41f64bee0ad008ffba645e7f66fed74c1024331af40c1aeb9bbce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/srv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
