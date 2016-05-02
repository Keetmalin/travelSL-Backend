<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5045345aaaf17d5cdaa7ed36dde6c9c5446eb504d3e6865cb997a011f8947c26 extends Twig_Template
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
        $__internal_2f8287201d9413a94884c062797000ce956dd5640fa1ff970f258f988e867f59 = $this->env->getExtension("native_profiler");
        $__internal_2f8287201d9413a94884c062797000ce956dd5640fa1ff970f258f988e867f59->enter($__internal_2f8287201d9413a94884c062797000ce956dd5640fa1ff970f258f988e867f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2f8287201d9413a94884c062797000ce956dd5640fa1ff970f258f988e867f59->leave($__internal_2f8287201d9413a94884c062797000ce956dd5640fa1ff970f258f988e867f59_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
