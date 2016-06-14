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
        $__internal_0bbe25c97bba63e1275f9d2c511903faa441c1fdad253b5af83c751902ca2789 = $this->env->getExtension("native_profiler");
        $__internal_0bbe25c97bba63e1275f9d2c511903faa441c1fdad253b5af83c751902ca2789->enter($__internal_0bbe25c97bba63e1275f9d2c511903faa441c1fdad253b5af83c751902ca2789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0bbe25c97bba63e1275f9d2c511903faa441c1fdad253b5af83c751902ca2789->leave($__internal_0bbe25c97bba63e1275f9d2c511903faa441c1fdad253b5af83c751902ca2789_prof);

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
