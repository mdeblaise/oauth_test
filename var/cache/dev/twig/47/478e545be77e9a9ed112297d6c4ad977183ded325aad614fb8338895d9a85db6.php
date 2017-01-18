<?php

/* MMCFosUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e31e7fdce322f1b0337784f0e873ab6b7f3b079d557fdd95a05190b14e446174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["mmc_fos_user_layout"]) || array_key_exists("mmc_fos_user_layout", $context) ? $context["mmc_fos_user_layout"] : (function () { throw new Twig_Error_Runtime('Variable "mmc_fos_user_layout" does not exist.', 1, $this->getSourceContext()); })()), "MMCFosUserBundle:Resetting:request_content.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc4d168ac9889200b8de4377d18183e74c63cd16109babe49734e895694af9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc4d168ac9889200b8de4377d18183e74c63cd16109babe49734e895694af9a->enter($__internal_dcc4d168ac9889200b8de4377d18183e74c63cd16109babe49734e895694af9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle:Resetting:request_content.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc4d168ac9889200b8de4377d18183e74c63cd16109babe49734e895694af9a->leave($__internal_dcc4d168ac9889200b8de4377d18183e74c63cd16109babe49734e895694af9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77329efc59fee02bf2a5ce09a0c774fafdd73bd32b1689dc219e3fbd7d75c535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77329efc59fee02bf2a5ce09a0c774fafdd73bd32b1689dc219e3fbd7d75c535->enter($__internal_77329efc59fee02bf2a5ce09a0c774fafdd73bd32b1689dc219e3fbd7d75c535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            ";
        // line 8
        if (array_key_exists("invalid_username", $context)) {
            // line 9
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) || array_key_exists("invalid_username", $context) ? $context["invalid_username"] : (function () { throw new Twig_Error_Runtime('Variable "invalid_username" does not exist.', 9, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 11
        echo "            <div class=\"form-group has-feedback\">
                <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"\" required=\"required\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div>
                  <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </form>
";
        
        $__internal_77329efc59fee02bf2a5ce09a0c774fafdd73bd32b1689dc219e3fbd7d75c535->leave($__internal_77329efc59fee02bf2a5ce09a0c774fafdd73bd32b1689dc219e3fbd7d75c535_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  56 => 12,  53 => 11,  47 => 9,  45 => 8,  39 => 6,  33 => 5,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends mmc_fos_user_layout %}

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            {% if invalid_username is defined %}
                <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
            {% endif %}
            <div class=\"form-group has-feedback\">
                <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" placeholder=\"\" required=\"required\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div>
                  <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans }}</button>
            </div>
        </div>
    </form>
{% endblock body %}", "MMCFosUserBundle:Resetting:request_content.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Resetting/request_content.html.twig");
    }
}
