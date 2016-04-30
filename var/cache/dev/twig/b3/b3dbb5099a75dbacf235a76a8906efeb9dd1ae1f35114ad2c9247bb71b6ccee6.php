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
        $__internal_6f6f2e449f71fb389909811b6282df77c4053416187cb949f25a29516e71d073 = $this->env->getExtension("native_profiler");
        $__internal_6f6f2e449f71fb389909811b6282df77c4053416187cb949f25a29516e71d073->enter($__internal_6f6f2e449f71fb389909811b6282df77c4053416187cb949f25a29516e71d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f6f2e449f71fb389909811b6282df77c4053416187cb949f25a29516e71d073->leave($__internal_6f6f2e449f71fb389909811b6282df77c4053416187cb949f25a29516e71d073_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b562752c55400bc332e6614d134395169caaf60ac6b4754187571da287a702e = $this->env->getExtension("native_profiler");
        $__internal_1b562752c55400bc332e6614d134395169caaf60ac6b4754187571da287a702e->enter($__internal_1b562752c55400bc332e6614d134395169caaf60ac6b4754187571da287a702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1b562752c55400bc332e6614d134395169caaf60ac6b4754187571da287a702e->leave($__internal_1b562752c55400bc332e6614d134395169caaf60ac6b4754187571da287a702e_prof);

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
