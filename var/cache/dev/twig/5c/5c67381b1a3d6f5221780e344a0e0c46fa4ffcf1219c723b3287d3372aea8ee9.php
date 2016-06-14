<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_41370b1c5418323642fe94022b28772b1239493965eebd8db28221b1792787e8 extends Twig_Template
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
        $__internal_49dd52614bbe0f0a8082a8fdd0b7fa7a96f3d6dd82c8402a787bdf1e8d92c9e6 = $this->env->getExtension("native_profiler");
        $__internal_49dd52614bbe0f0a8082a8fdd0b7fa7a96f3d6dd82c8402a787bdf1e8d92c9e6->enter($__internal_49dd52614bbe0f0a8082a8fdd0b7fa7a96f3d6dd82c8402a787bdf1e8d92c9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_49dd52614bbe0f0a8082a8fdd0b7fa7a96f3d6dd82c8402a787bdf1e8d92c9e6->leave($__internal_49dd52614bbe0f0a8082a8fdd0b7fa7a96f3d6dd82c8402a787bdf1e8d92c9e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
