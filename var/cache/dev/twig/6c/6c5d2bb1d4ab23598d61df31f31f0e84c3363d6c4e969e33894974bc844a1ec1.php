<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e0f3e3be2128302b925d4306add91e77b8d16d0c01009df87254ab3b4ee540f8 extends Twig_Template
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
        $__internal_cf171976301c6d675f397f72f7adb6a8a3938ea9903c377c1dfcfdb06bdaa386 = $this->env->getExtension("native_profiler");
        $__internal_cf171976301c6d675f397f72f7adb6a8a3938ea9903c377c1dfcfdb06bdaa386->enter($__internal_cf171976301c6d675f397f72f7adb6a8a3938ea9903c377c1dfcfdb06bdaa386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cf171976301c6d675f397f72f7adb6a8a3938ea9903c377c1dfcfdb06bdaa386->leave($__internal_cf171976301c6d675f397f72f7adb6a8a3938ea9903c377c1dfcfdb06bdaa386_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
