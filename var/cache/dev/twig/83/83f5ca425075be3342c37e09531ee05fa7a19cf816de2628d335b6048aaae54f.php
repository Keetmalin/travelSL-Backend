<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_77b8d3345119920d04f3d71bf2d12a2ddb511dcdba29546b811ab2549f74a28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_1f8a731782d6f1529d62106f70990c5ad0e0b7dc5717169e108125db3b9ba765 = $this->env->getExtension("native_profiler");
        $__internal_1f8a731782d6f1529d62106f70990c5ad0e0b7dc5717169e108125db3b9ba765->enter($__internal_1f8a731782d6f1529d62106f70990c5ad0e0b7dc5717169e108125db3b9ba765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8a731782d6f1529d62106f70990c5ad0e0b7dc5717169e108125db3b9ba765->leave($__internal_1f8a731782d6f1529d62106f70990c5ad0e0b7dc5717169e108125db3b9ba765_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d013b7b52485f31938db44f08588a45a6cd843b2136b53a32ae20b184cf22d96 = $this->env->getExtension("native_profiler");
        $__internal_d013b7b52485f31938db44f08588a45a6cd843b2136b53a32ae20b184cf22d96->enter($__internal_d013b7b52485f31938db44f08588a45a6cd843b2136b53a32ae20b184cf22d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d013b7b52485f31938db44f08588a45a6cd843b2136b53a32ae20b184cf22d96->leave($__internal_d013b7b52485f31938db44f08588a45a6cd843b2136b53a32ae20b184cf22d96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f0b545da5074c6f762df6fef2222d69bf6c2f1e1d7b3ebbc6f40798f4bf9d7 = $this->env->getExtension("native_profiler");
        $__internal_65f0b545da5074c6f762df6fef2222d69bf6c2f1e1d7b3ebbc6f40798f4bf9d7->enter($__internal_65f0b545da5074c6f762df6fef2222d69bf6c2f1e1d7b3ebbc6f40798f4bf9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65f0b545da5074c6f762df6fef2222d69bf6c2f1e1d7b3ebbc6f40798f4bf9d7->leave($__internal_65f0b545da5074c6f762df6fef2222d69bf6c2f1e1d7b3ebbc6f40798f4bf9d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
