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
        $__internal_3530e500dab017c00a07ea3fd11ba4f7383ba6a93c4fc46a5ba4da9c1fabb4ca = $this->env->getExtension("native_profiler");
        $__internal_3530e500dab017c00a07ea3fd11ba4f7383ba6a93c4fc46a5ba4da9c1fabb4ca->enter($__internal_3530e500dab017c00a07ea3fd11ba4f7383ba6a93c4fc46a5ba4da9c1fabb4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3530e500dab017c00a07ea3fd11ba4f7383ba6a93c4fc46a5ba4da9c1fabb4ca->leave($__internal_3530e500dab017c00a07ea3fd11ba4f7383ba6a93c4fc46a5ba4da9c1fabb4ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1da0af02b626e6a52ac4a36cccf0dfbe4278a559cb023a126744a3d8ecb06127 = $this->env->getExtension("native_profiler");
        $__internal_1da0af02b626e6a52ac4a36cccf0dfbe4278a559cb023a126744a3d8ecb06127->enter($__internal_1da0af02b626e6a52ac4a36cccf0dfbe4278a559cb023a126744a3d8ecb06127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1da0af02b626e6a52ac4a36cccf0dfbe4278a559cb023a126744a3d8ecb06127->leave($__internal_1da0af02b626e6a52ac4a36cccf0dfbe4278a559cb023a126744a3d8ecb06127_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e08ef9878152f63583a11e2e2513875d98132544e32b3112a67e8c16ff1621f = $this->env->getExtension("native_profiler");
        $__internal_1e08ef9878152f63583a11e2e2513875d98132544e32b3112a67e8c16ff1621f->enter($__internal_1e08ef9878152f63583a11e2e2513875d98132544e32b3112a67e8c16ff1621f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e08ef9878152f63583a11e2e2513875d98132544e32b3112a67e8c16ff1621f->leave($__internal_1e08ef9878152f63583a11e2e2513875d98132544e32b3112a67e8c16ff1621f_prof);

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
