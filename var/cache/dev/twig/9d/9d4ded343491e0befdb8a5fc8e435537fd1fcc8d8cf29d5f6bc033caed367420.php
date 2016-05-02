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
        $__internal_f13d1d9bcf293bdd4b7acf6fea40d0fb02a602d923567ae070cb6bfbe5434dbe = $this->env->getExtension("native_profiler");
        $__internal_f13d1d9bcf293bdd4b7acf6fea40d0fb02a602d923567ae070cb6bfbe5434dbe->enter($__internal_f13d1d9bcf293bdd4b7acf6fea40d0fb02a602d923567ae070cb6bfbe5434dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_f13d1d9bcf293bdd4b7acf6fea40d0fb02a602d923567ae070cb6bfbe5434dbe->leave($__internal_f13d1d9bcf293bdd4b7acf6fea40d0fb02a602d923567ae070cb6bfbe5434dbe_prof);

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
