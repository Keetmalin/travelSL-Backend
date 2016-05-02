<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_86dd3b71e2757afda1d9ae2987c8da8d1583937006a4b952144b899d71323ded extends Twig_Template
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
        $__internal_edbfc787af1f86a23fbc1e95b4bf679b69a59a5e7139aeeb34c68768a8e9192d = $this->env->getExtension("native_profiler");
        $__internal_edbfc787af1f86a23fbc1e95b4bf679b69a59a5e7139aeeb34c68768a8e9192d->enter($__internal_edbfc787af1f86a23fbc1e95b4bf679b69a59a5e7139aeeb34c68768a8e9192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_edbfc787af1f86a23fbc1e95b4bf679b69a59a5e7139aeeb34c68768a8e9192d->leave($__internal_edbfc787af1f86a23fbc1e95b4bf679b69a59a5e7139aeeb34c68768a8e9192d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
