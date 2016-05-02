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
        $__internal_f774dc15633e7b199f6bd7b908afb6f3d86c48ed77381d71ce1fbe0624ce8535 = $this->env->getExtension("native_profiler");
        $__internal_f774dc15633e7b199f6bd7b908afb6f3d86c48ed77381d71ce1fbe0624ce8535->enter($__internal_f774dc15633e7b199f6bd7b908afb6f3d86c48ed77381d71ce1fbe0624ce8535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f774dc15633e7b199f6bd7b908afb6f3d86c48ed77381d71ce1fbe0624ce8535->leave($__internal_f774dc15633e7b199f6bd7b908afb6f3d86c48ed77381d71ce1fbe0624ce8535_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eb213acf07750e0b78e1a9fb09ae200b9491f62bd6dcabed67acc06bb06f3a5 = $this->env->getExtension("native_profiler");
        $__internal_3eb213acf07750e0b78e1a9fb09ae200b9491f62bd6dcabed67acc06bb06f3a5->enter($__internal_3eb213acf07750e0b78e1a9fb09ae200b9491f62bd6dcabed67acc06bb06f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3eb213acf07750e0b78e1a9fb09ae200b9491f62bd6dcabed67acc06bb06f3a5->leave($__internal_3eb213acf07750e0b78e1a9fb09ae200b9491f62bd6dcabed67acc06bb06f3a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_770c5dc0a956a094b6e9a6f3c88550a989a2da5c3171c82c908fc3f2c5a6e69b = $this->env->getExtension("native_profiler");
        $__internal_770c5dc0a956a094b6e9a6f3c88550a989a2da5c3171c82c908fc3f2c5a6e69b->enter($__internal_770c5dc0a956a094b6e9a6f3c88550a989a2da5c3171c82c908fc3f2c5a6e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_770c5dc0a956a094b6e9a6f3c88550a989a2da5c3171c82c908fc3f2c5a6e69b->leave($__internal_770c5dc0a956a094b6e9a6f3c88550a989a2da5c3171c82c908fc3f2c5a6e69b_prof);

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
