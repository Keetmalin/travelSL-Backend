<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_aaea8a118bdea50f4d62b96ab0edfa21887cde5a3d8af76dea1880e510e057af extends Twig_Template
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
        $__internal_738868d442164ed8f4a24c59641df1ba703fd164f75f10223f5fefb3d147c4ae = $this->env->getExtension("native_profiler");
        $__internal_738868d442164ed8f4a24c59641df1ba703fd164f75f10223f5fefb3d147c4ae->enter($__internal_738868d442164ed8f4a24c59641df1ba703fd164f75f10223f5fefb3d147c4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_738868d442164ed8f4a24c59641df1ba703fd164f75f10223f5fefb3d147c4ae->leave($__internal_738868d442164ed8f4a24c59641df1ba703fd164f75f10223f5fefb3d147c4ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
