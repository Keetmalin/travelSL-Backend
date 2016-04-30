<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_834b7b8495865ed10feab6f14f2225275bce4837e00e483c87715714546f1d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc5c52d9e9297f49438dd09d26686002ad0d7f873779dce89961173079b511a = $this->env->getExtension("native_profiler");
        $__internal_5fc5c52d9e9297f49438dd09d26686002ad0d7f873779dce89961173079b511a->enter($__internal_5fc5c52d9e9297f49438dd09d26686002ad0d7f873779dce89961173079b511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc5c52d9e9297f49438dd09d26686002ad0d7f873779dce89961173079b511a->leave($__internal_5fc5c52d9e9297f49438dd09d26686002ad0d7f873779dce89961173079b511a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c1dcec141ec3dbb71b7a6865145203888a752c61556e37bca7a33d181eb0800 = $this->env->getExtension("native_profiler");
        $__internal_4c1dcec141ec3dbb71b7a6865145203888a752c61556e37bca7a33d181eb0800->enter($__internal_4c1dcec141ec3dbb71b7a6865145203888a752c61556e37bca7a33d181eb0800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c1dcec141ec3dbb71b7a6865145203888a752c61556e37bca7a33d181eb0800->leave($__internal_4c1dcec141ec3dbb71b7a6865145203888a752c61556e37bca7a33d181eb0800_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ee3be0da3e7dd7fc6d92f37f8e27a8be21018d7f5707e7362b51b8e67198b75 = $this->env->getExtension("native_profiler");
        $__internal_0ee3be0da3e7dd7fc6d92f37f8e27a8be21018d7f5707e7362b51b8e67198b75->enter($__internal_0ee3be0da3e7dd7fc6d92f37f8e27a8be21018d7f5707e7362b51b8e67198b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ee3be0da3e7dd7fc6d92f37f8e27a8be21018d7f5707e7362b51b8e67198b75->leave($__internal_0ee3be0da3e7dd7fc6d92f37f8e27a8be21018d7f5707e7362b51b8e67198b75_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9429dbe0e3d3bbe69e182c24ee15d79e8d8c87ba63810f63599cd98083145785 = $this->env->getExtension("native_profiler");
        $__internal_9429dbe0e3d3bbe69e182c24ee15d79e8d8c87ba63810f63599cd98083145785->enter($__internal_9429dbe0e3d3bbe69e182c24ee15d79e8d8c87ba63810f63599cd98083145785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9429dbe0e3d3bbe69e182c24ee15d79e8d8c87ba63810f63599cd98083145785->leave($__internal_9429dbe0e3d3bbe69e182c24ee15d79e8d8c87ba63810f63599cd98083145785_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
