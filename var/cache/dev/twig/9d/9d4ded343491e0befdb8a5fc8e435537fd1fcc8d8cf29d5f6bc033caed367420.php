<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_58e163e095b605ee18789c41be66b5b1ee8f0f1e7bf25de512e501c0e09b8166 extends Twig_Template
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
        $__internal_606059c81df71a05b31497ec5151df00c70e6ec19757e7dc15b53c2554479e48 = $this->env->getExtension("native_profiler");
        $__internal_606059c81df71a05b31497ec5151df00c70e6ec19757e7dc15b53c2554479e48->enter($__internal_606059c81df71a05b31497ec5151df00c70e6ec19757e7dc15b53c2554479e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_606059c81df71a05b31497ec5151df00c70e6ec19757e7dc15b53c2554479e48->leave($__internal_606059c81df71a05b31497ec5151df00c70e6ec19757e7dc15b53c2554479e48_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
