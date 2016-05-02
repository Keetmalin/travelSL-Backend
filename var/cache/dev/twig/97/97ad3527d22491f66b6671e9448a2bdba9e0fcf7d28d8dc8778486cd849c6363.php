<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4bf558b4c4f71622f8c1668bdaef77ba968ae72e35a3218b238ffc9da5c01464 extends Twig_Template
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
        $__internal_d5d7c1692aadca113d4980c63b57c169772242085df13cb0101ea3d17b0ed434 = $this->env->getExtension("native_profiler");
        $__internal_d5d7c1692aadca113d4980c63b57c169772242085df13cb0101ea3d17b0ed434->enter($__internal_d5d7c1692aadca113d4980c63b57c169772242085df13cb0101ea3d17b0ed434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d5d7c1692aadca113d4980c63b57c169772242085df13cb0101ea3d17b0ed434->leave($__internal_d5d7c1692aadca113d4980c63b57c169772242085df13cb0101ea3d17b0ed434_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
