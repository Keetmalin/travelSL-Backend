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
        $__internal_82d0a693c2b9872ee20229bb3eac2b49e5cb4e9d3314a1a227bf3bad63f86618 = $this->env->getExtension("native_profiler");
        $__internal_82d0a693c2b9872ee20229bb3eac2b49e5cb4e9d3314a1a227bf3bad63f86618->enter($__internal_82d0a693c2b9872ee20229bb3eac2b49e5cb4e9d3314a1a227bf3bad63f86618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_82d0a693c2b9872ee20229bb3eac2b49e5cb4e9d3314a1a227bf3bad63f86618->leave($__internal_82d0a693c2b9872ee20229bb3eac2b49e5cb4e9d3314a1a227bf3bad63f86618_prof);

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
