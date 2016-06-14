<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0037a730c489b3511565df8d44e65cff396d6ea58c0523661c79f4e2ffcf553f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a386b927cc102b523a644413673048960032127bdc07a47cf908a7f9a8e0d1b = $this->env->getExtension("native_profiler");
        $__internal_2a386b927cc102b523a644413673048960032127bdc07a47cf908a7f9a8e0d1b->enter($__internal_2a386b927cc102b523a644413673048960032127bdc07a47cf908a7f9a8e0d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a386b927cc102b523a644413673048960032127bdc07a47cf908a7f9a8e0d1b->leave($__internal_2a386b927cc102b523a644413673048960032127bdc07a47cf908a7f9a8e0d1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48890d7d6290717f60f574ae477d9476fea28de7d7c5370c329942b8bc5a0167 = $this->env->getExtension("native_profiler");
        $__internal_48890d7d6290717f60f574ae477d9476fea28de7d7c5370c329942b8bc5a0167->enter($__internal_48890d7d6290717f60f574ae477d9476fea28de7d7c5370c329942b8bc5a0167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_48890d7d6290717f60f574ae477d9476fea28de7d7c5370c329942b8bc5a0167->leave($__internal_48890d7d6290717f60f574ae477d9476fea28de7d7c5370c329942b8bc5a0167_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_adefb2581e3c79f7da5fa1d9f0374d6666ab3e5805e803d19bbf779b761a2523 = $this->env->getExtension("native_profiler");
        $__internal_adefb2581e3c79f7da5fa1d9f0374d6666ab3e5805e803d19bbf779b761a2523->enter($__internal_adefb2581e3c79f7da5fa1d9f0374d6666ab3e5805e803d19bbf779b761a2523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_adefb2581e3c79f7da5fa1d9f0374d6666ab3e5805e803d19bbf779b761a2523->leave($__internal_adefb2581e3c79f7da5fa1d9f0374d6666ab3e5805e803d19bbf779b761a2523_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
