<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0e151b49b8778d3367b8602101f716284685fa9a0aeed9d0af9024a42f5ef013 extends Twig_Template
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
        $__internal_e9a1ac85eb70181c7f30d2b9e97ac41eb94d1b74fb3ff5e0d6de1f1c40b34adf = $this->env->getExtension("native_profiler");
        $__internal_e9a1ac85eb70181c7f30d2b9e97ac41eb94d1b74fb3ff5e0d6de1f1c40b34adf->enter($__internal_e9a1ac85eb70181c7f30d2b9e97ac41eb94d1b74fb3ff5e0d6de1f1c40b34adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9a1ac85eb70181c7f30d2b9e97ac41eb94d1b74fb3ff5e0d6de1f1c40b34adf->leave($__internal_e9a1ac85eb70181c7f30d2b9e97ac41eb94d1b74fb3ff5e0d6de1f1c40b34adf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
