<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_43cfbaa5840e852d54646fc6cff184afb8acbdd3416e37f194d4fa0723c056eb extends Twig_Template
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
        $__internal_1757fde78a3eb349fcf8c49860a5e495b79efa69751ccb6561ba851b929d7102 = $this->env->getExtension("native_profiler");
        $__internal_1757fde78a3eb349fcf8c49860a5e495b79efa69751ccb6561ba851b929d7102->enter($__internal_1757fde78a3eb349fcf8c49860a5e495b79efa69751ccb6561ba851b929d7102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1757fde78a3eb349fcf8c49860a5e495b79efa69751ccb6561ba851b929d7102->leave($__internal_1757fde78a3eb349fcf8c49860a5e495b79efa69751ccb6561ba851b929d7102_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
