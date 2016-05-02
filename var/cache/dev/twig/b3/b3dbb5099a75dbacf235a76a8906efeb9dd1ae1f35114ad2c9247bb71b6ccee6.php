<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_022f82c5cb79f9599bd284092f2ef58270bd90865dff68bfe820edc4078f269b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cffb5ddce7fc65d93ffa0a5b88507c100429f44ad83a0b41b11475d1724a52ae = $this->env->getExtension("native_profiler");
        $__internal_cffb5ddce7fc65d93ffa0a5b88507c100429f44ad83a0b41b11475d1724a52ae->enter($__internal_cffb5ddce7fc65d93ffa0a5b88507c100429f44ad83a0b41b11475d1724a52ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cffb5ddce7fc65d93ffa0a5b88507c100429f44ad83a0b41b11475d1724a52ae->leave($__internal_cffb5ddce7fc65d93ffa0a5b88507c100429f44ad83a0b41b11475d1724a52ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef87c71c42a99f2255dcbcc60a6ccd3663293a18807b31d7a29bb8b2a750d33b = $this->env->getExtension("native_profiler");
        $__internal_ef87c71c42a99f2255dcbcc60a6ccd3663293a18807b31d7a29bb8b2a750d33b->enter($__internal_ef87c71c42a99f2255dcbcc60a6ccd3663293a18807b31d7a29bb8b2a750d33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef87c71c42a99f2255dcbcc60a6ccd3663293a18807b31d7a29bb8b2a750d33b->leave($__internal_ef87c71c42a99f2255dcbcc60a6ccd3663293a18807b31d7a29bb8b2a750d33b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
