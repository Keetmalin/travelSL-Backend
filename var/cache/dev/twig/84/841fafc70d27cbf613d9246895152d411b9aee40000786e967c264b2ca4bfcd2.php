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
        $__internal_db3d8cd847af14bae82ea54cdb27480ff498c4248ab97f0ae81df0120470a8d2 = $this->env->getExtension("native_profiler");
        $__internal_db3d8cd847af14bae82ea54cdb27480ff498c4248ab97f0ae81df0120470a8d2->enter($__internal_db3d8cd847af14bae82ea54cdb27480ff498c4248ab97f0ae81df0120470a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_db3d8cd847af14bae82ea54cdb27480ff498c4248ab97f0ae81df0120470a8d2->leave($__internal_db3d8cd847af14bae82ea54cdb27480ff498c4248ab97f0ae81df0120470a8d2_prof);

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
