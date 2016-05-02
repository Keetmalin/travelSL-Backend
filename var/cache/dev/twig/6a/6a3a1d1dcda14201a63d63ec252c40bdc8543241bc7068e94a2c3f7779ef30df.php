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
        $__internal_9c5a344826c6a0503d1cfc596b94d687fcfa38c20598175ebc06db1ac79b7866 = $this->env->getExtension("native_profiler");
        $__internal_9c5a344826c6a0503d1cfc596b94d687fcfa38c20598175ebc06db1ac79b7866->enter($__internal_9c5a344826c6a0503d1cfc596b94d687fcfa38c20598175ebc06db1ac79b7866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5a344826c6a0503d1cfc596b94d687fcfa38c20598175ebc06db1ac79b7866->leave($__internal_9c5a344826c6a0503d1cfc596b94d687fcfa38c20598175ebc06db1ac79b7866_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48273851886358d41b0e995f48cc45a56fdf83bf1ec3730de39bb9d9c822f25e = $this->env->getExtension("native_profiler");
        $__internal_48273851886358d41b0e995f48cc45a56fdf83bf1ec3730de39bb9d9c822f25e->enter($__internal_48273851886358d41b0e995f48cc45a56fdf83bf1ec3730de39bb9d9c822f25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48273851886358d41b0e995f48cc45a56fdf83bf1ec3730de39bb9d9c822f25e->leave($__internal_48273851886358d41b0e995f48cc45a56fdf83bf1ec3730de39bb9d9c822f25e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfdb9e66934980c47d973f01a8561ee23a633083f3b6a79ccac53a6cef95e8ce = $this->env->getExtension("native_profiler");
        $__internal_bfdb9e66934980c47d973f01a8561ee23a633083f3b6a79ccac53a6cef95e8ce->enter($__internal_bfdb9e66934980c47d973f01a8561ee23a633083f3b6a79ccac53a6cef95e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bfdb9e66934980c47d973f01a8561ee23a633083f3b6a79ccac53a6cef95e8ce->leave($__internal_bfdb9e66934980c47d973f01a8561ee23a633083f3b6a79ccac53a6cef95e8ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f9983ec2aff15e77b1d688c07d54b5e8f6fd0f682d76032ad537d575d4bc5d0 = $this->env->getExtension("native_profiler");
        $__internal_5f9983ec2aff15e77b1d688c07d54b5e8f6fd0f682d76032ad537d575d4bc5d0->enter($__internal_5f9983ec2aff15e77b1d688c07d54b5e8f6fd0f682d76032ad537d575d4bc5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f9983ec2aff15e77b1d688c07d54b5e8f6fd0f682d76032ad537d575d4bc5d0->leave($__internal_5f9983ec2aff15e77b1d688c07d54b5e8f6fd0f682d76032ad537d575d4bc5d0_prof);

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
