<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_cde757f49436335b04558927e9ff179fc1b7283500e8717567f1f253e1cc6ebd extends Twig_Template
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
        $__internal_88b6e1848bd908ae2a89042fa7ebe4c935bd7c04ab6548367f6d76eae3c21a69 = $this->env->getExtension("native_profiler");
        $__internal_88b6e1848bd908ae2a89042fa7ebe4c935bd7c04ab6548367f6d76eae3c21a69->enter($__internal_88b6e1848bd908ae2a89042fa7ebe4c935bd7c04ab6548367f6d76eae3c21a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_88b6e1848bd908ae2a89042fa7ebe4c935bd7c04ab6548367f6d76eae3c21a69->leave($__internal_88b6e1848bd908ae2a89042fa7ebe4c935bd7c04ab6548367f6d76eae3c21a69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
