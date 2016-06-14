<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_49481551c2b97366b92b19b46402080bd70757f68a679095c504669fe7a08737 extends Twig_Template
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
        $__internal_81404e8787a4db4096712c2054be687a82515f7069eef908db1c4a24f6e1a22b = $this->env->getExtension("native_profiler");
        $__internal_81404e8787a4db4096712c2054be687a82515f7069eef908db1c4a24f6e1a22b->enter($__internal_81404e8787a4db4096712c2054be687a82515f7069eef908db1c4a24f6e1a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_81404e8787a4db4096712c2054be687a82515f7069eef908db1c4a24f6e1a22b->leave($__internal_81404e8787a4db4096712c2054be687a82515f7069eef908db1c4a24f6e1a22b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
