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
        $__internal_f84ea266a650a68065cbf998584b6be67737a3fa25504a8affaedcb600a8e1b3 = $this->env->getExtension("native_profiler");
        $__internal_f84ea266a650a68065cbf998584b6be67737a3fa25504a8affaedcb600a8e1b3->enter($__internal_f84ea266a650a68065cbf998584b6be67737a3fa25504a8affaedcb600a8e1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f84ea266a650a68065cbf998584b6be67737a3fa25504a8affaedcb600a8e1b3->leave($__internal_f84ea266a650a68065cbf998584b6be67737a3fa25504a8affaedcb600a8e1b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1dcdae6435c242cbe9c87412ce7d1e174bf0a469b881ada66a7bfffafa1713c = $this->env->getExtension("native_profiler");
        $__internal_d1dcdae6435c242cbe9c87412ce7d1e174bf0a469b881ada66a7bfffafa1713c->enter($__internal_d1dcdae6435c242cbe9c87412ce7d1e174bf0a469b881ada66a7bfffafa1713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1dcdae6435c242cbe9c87412ce7d1e174bf0a469b881ada66a7bfffafa1713c->leave($__internal_d1dcdae6435c242cbe9c87412ce7d1e174bf0a469b881ada66a7bfffafa1713c_prof);

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
