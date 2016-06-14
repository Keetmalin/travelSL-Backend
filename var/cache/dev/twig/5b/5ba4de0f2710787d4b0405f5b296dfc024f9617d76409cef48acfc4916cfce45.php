<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4aa21414c6f1581bfbcdefb18ab7579ca0ff1ee469342553fcfb5ef98e9a77b8 extends Twig_Template
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
        $__internal_f9f146733ecf3a2ec7df81764c7c8ec47a2869e16f8cd0f82f06b5b75e26a6ea = $this->env->getExtension("native_profiler");
        $__internal_f9f146733ecf3a2ec7df81764c7c8ec47a2869e16f8cd0f82f06b5b75e26a6ea->enter($__internal_f9f146733ecf3a2ec7df81764c7c8ec47a2869e16f8cd0f82f06b5b75e26a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f9f146733ecf3a2ec7df81764c7c8ec47a2869e16f8cd0f82f06b5b75e26a6ea->leave($__internal_f9f146733ecf3a2ec7df81764c7c8ec47a2869e16f8cd0f82f06b5b75e26a6ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
