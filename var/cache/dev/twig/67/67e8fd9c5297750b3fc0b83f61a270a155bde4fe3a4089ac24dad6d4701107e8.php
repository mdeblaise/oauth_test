<?php

/* MMCFosUserBundle:Security:login.html.twig */
class __TwigTemplate_ea19f8f7723b72ce4e798e71b1dedbb1f52a5e813fb0a0c3b7dce87511f25b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["mmc_fos_user_layout"]) || array_key_exists("mmc_fos_user_layout", $context) ? $context["mmc_fos_user_layout"] : (function () { throw new Twig_Error_Runtime('Variable "mmc_fos_user_layout" does not exist.', 1, $this->getSourceContext()); })()), "MMCFosUserBundle:Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_591096bc4c2d85028e7778afa81db8e2ad5ca132fac2fffdecff871019a57869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591096bc4c2d85028e7778afa81db8e2ad5ca132fac2fffdecff871019a57869->enter($__internal_591096bc4c2d85028e7778afa81db8e2ad5ca132fac2fffdecff871019a57869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MMCFosUserBundle:Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591096bc4c2d85028e7778afa81db8e2ad5ca132fac2fffdecff871019a57869->leave($__internal_591096bc4c2d85028e7778afa81db8e2ad5ca132fac2fffdecff871019a57869_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0f63e8eb9f19362bfb85c8f6e94c73b0765933985a36b7549bcff5d9587fa72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f63e8eb9f19362bfb85c8f6e94c73b0765933985a36b7549bcff5d9587fa72->enter($__internal_b0f63e8eb9f19362bfb85c8f6e94c73b0765933985a36b7549bcff5d9587fa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "    <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.sign_in_title", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>

    <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
      <div class=\"form-group has-feedback\">
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username_email", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required=\"required\" />
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required=\"required\" />
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.forgot_pwd", array(), "FOSUserBundle"), "html", null, true);
        echo "</a><br>
<!-- /.login-box -->
";
        
        $__internal_b0f63e8eb9f19362bfb85c8f6e94c73b0765933985a36b7549bcff5d9587fa72->leave($__internal_b0f63e8eb9f19362bfb85c8f6e94c73b0765933985a36b7549bcff5d9587fa72_prof);

    }

    public function getTemplateName()
    {
        return "MMCFosUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  90 => 31,  81 => 25,  71 => 18,  62 => 14,  57 => 12,  53 => 11,  47 => 9,  41 => 7,  39 => 6,  33 => 5,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends mmc_fos_user_layout %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
    <p class=\"login-box-msg\">{{ 'security.login.sign_in_title'|trans }}</p>

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
      <div class=\"form-group has-feedback\">
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" placeholder=\"{{ 'security.login.username_email'|trans }}\" required=\"required\" />
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" required=\"required\" />
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'security.login.forgot_pwd'|trans }}</a><br>
<!-- /.login-box -->
{% endblock fos_user_content %}



", "MMCFosUserBundle:Security:login.html.twig", "/srv/vendor/meuhmeuhconcept/fos-user-bundle/src/Resources/views/Security/login.html.twig");
    }
}
