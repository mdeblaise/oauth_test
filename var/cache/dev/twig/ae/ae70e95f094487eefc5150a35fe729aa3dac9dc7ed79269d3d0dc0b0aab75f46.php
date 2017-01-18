<?php

/* MMCFosUserBundle:Admin:admin-user-layout.html.twig */
class __TwigTemplate_19b354435b0f0c457a20589cda7f0c8fcd5befac956bc6778de1d626b116ed8b extends Twig_Template
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
        $__internal_412d52bfc927d04c90b1c5ba1b56ef7a689a324067caa9f85e1de3cf37a345b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412d52bfc927d04c90b1c5ba1b56ef7a689a324067caa9f85e1de3cf37a345b3->enter($__internal_412d52bfc927d04c90b1c5ba1b56ef7a689a324067caa9f85e1de3cf37a345b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle:Admin:admin-user-layout.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></a>
    <ul class=\"dropdown-menu\">
        <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mmc_sonata_admin_user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My account", array(), "UserAdmin"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("mmc_fos_user_bundle_logout_path", $context)) ? (_twig_default_filter((isset($context["mmc_fos_user_bundle_logout_path"]) || array_key_exists("mmc_fos_user_bundle_logout_path", $context) ? $context["mmc_fos_user_bundle_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "mmc_fos_user_bundle_logout_path" does not exist.', 5, $this->getSourceContext()); })()), "/logout")) : ("/logout")), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</li>
";
        
        $__internal_412d52bfc927d04c90b1c5ba1b56ef7a689a324067caa9f85e1de3cf37a345b3->leave($__internal_412d52bfc927d04c90b1c5ba1b56ef7a689a324067caa9f85e1de3cf37a345b3_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle:Admin:admin-user-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></a>
    <ul class=\"dropdown-menu\">
        <li><a href=\"{{ path('mmc_sonata_admin_user_show', {id: app.user.id}) }}\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>{{ 'My account'|trans([], 'UserAdmin') }}</a></li>
        <li><a href=\"{{ mmc_fos_user_bundle_logout_path|default('/logout') }}\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>{{ 'layout.logout'|trans([], 'FOSUserBundle') }}</a></li>
    </ul>
</li>
", "MMCFosUserBundle:Admin:admin-user-layout.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Admin/admin-user-layout.html.twig");
    }
}
