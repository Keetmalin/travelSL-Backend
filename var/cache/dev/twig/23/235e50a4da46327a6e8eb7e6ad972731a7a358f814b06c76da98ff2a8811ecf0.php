<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d53556dd633fa5490270040f7420c93096ed48e3bd19cc3a0694a09075bf5121 extends Twig_Template
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
        $__internal_feb91c6d170d71ca2e746929e895fdbcb8e831f1512418fe8cbc7a6e3f7ed725 = $this->env->getExtension("native_profiler");
        $__internal_feb91c6d170d71ca2e746929e895fdbcb8e831f1512418fe8cbc7a6e3f7ed725->enter($__internal_feb91c6d170d71ca2e746929e895fdbcb8e831f1512418fe8cbc7a6e3f7ed725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_feb91c6d170d71ca2e746929e895fdbcb8e831f1512418fe8cbc7a6e3f7ed725->leave($__internal_feb91c6d170d71ca2e746929e895fdbcb8e831f1512418fe8cbc7a6e3f7ed725_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
