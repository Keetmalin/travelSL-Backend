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
        $__internal_5559a5ad2686226e21503338339d9465c9abcbc80ead81b0a88431e52f5fbe7b = $this->env->getExtension("native_profiler");
        $__internal_5559a5ad2686226e21503338339d9465c9abcbc80ead81b0a88431e52f5fbe7b->enter($__internal_5559a5ad2686226e21503338339d9465c9abcbc80ead81b0a88431e52f5fbe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_5559a5ad2686226e21503338339d9465c9abcbc80ead81b0a88431e52f5fbe7b->leave($__internal_5559a5ad2686226e21503338339d9465c9abcbc80ead81b0a88431e52f5fbe7b_prof);

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
