<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_77fefb2bb07ceee3617b6d4f3d56a02ea5fcae90ff4fa4db9ae017ebbbd1f6de extends Twig_Template
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
        $__internal_2a3d7cef9d3aa986cb6ecd3d6ccc96ab77f43fdb5cac9c82cbc369a3453c4a3e = $this->env->getExtension("native_profiler");
        $__internal_2a3d7cef9d3aa986cb6ecd3d6ccc96ab77f43fdb5cac9c82cbc369a3453c4a3e->enter($__internal_2a3d7cef9d3aa986cb6ecd3d6ccc96ab77f43fdb5cac9c82cbc369a3453c4a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2a3d7cef9d3aa986cb6ecd3d6ccc96ab77f43fdb5cac9c82cbc369a3453c4a3e->leave($__internal_2a3d7cef9d3aa986cb6ecd3d6ccc96ab77f43fdb5cac9c82cbc369a3453c4a3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
