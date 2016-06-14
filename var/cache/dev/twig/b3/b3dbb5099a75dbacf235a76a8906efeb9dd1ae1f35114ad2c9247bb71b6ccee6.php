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
        $__internal_15e5ed5218a77eaf4e3cf786e91192adf43f9ee06579ad73a738390ceda500a3 = $this->env->getExtension("native_profiler");
        $__internal_15e5ed5218a77eaf4e3cf786e91192adf43f9ee06579ad73a738390ceda500a3->enter($__internal_15e5ed5218a77eaf4e3cf786e91192adf43f9ee06579ad73a738390ceda500a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_15e5ed5218a77eaf4e3cf786e91192adf43f9ee06579ad73a738390ceda500a3->leave($__internal_15e5ed5218a77eaf4e3cf786e91192adf43f9ee06579ad73a738390ceda500a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_97283e9a1730757bf0ee642bbc40478ea4ae2bb7ee359cf99f1710247eafb574 = $this->env->getExtension("native_profiler");
        $__internal_97283e9a1730757bf0ee642bbc40478ea4ae2bb7ee359cf99f1710247eafb574->enter($__internal_97283e9a1730757bf0ee642bbc40478ea4ae2bb7ee359cf99f1710247eafb574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_97283e9a1730757bf0ee642bbc40478ea4ae2bb7ee359cf99f1710247eafb574->leave($__internal_97283e9a1730757bf0ee642bbc40478ea4ae2bb7ee359cf99f1710247eafb574_prof);

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
