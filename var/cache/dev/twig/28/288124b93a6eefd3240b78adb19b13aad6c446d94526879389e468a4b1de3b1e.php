<?php

/* ::base.html.twig */
class __TwigTemplate_e0d68b1018fbdee74e24f7ecaa2c3e9ce22a7b8648462e80fbd2049cb2f61e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fbdf87a89245cada8aa2462cbfc6ceacd1d22cc1d6a3ccf0daf470b62d55b83 = $this->env->getExtension("native_profiler");
        $__internal_0fbdf87a89245cada8aa2462cbfc6ceacd1d22cc1d6a3ccf0daf470b62d55b83->enter($__internal_0fbdf87a89245cada8aa2462cbfc6ceacd1d22cc1d6a3ccf0daf470b62d55b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0fbdf87a89245cada8aa2462cbfc6ceacd1d22cc1d6a3ccf0daf470b62d55b83->leave($__internal_0fbdf87a89245cada8aa2462cbfc6ceacd1d22cc1d6a3ccf0daf470b62d55b83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45562aeede655f53794b068988a0cca64b294232d62492de19a0ad41a16d9a97 = $this->env->getExtension("native_profiler");
        $__internal_45562aeede655f53794b068988a0cca64b294232d62492de19a0ad41a16d9a97->enter($__internal_45562aeede655f53794b068988a0cca64b294232d62492de19a0ad41a16d9a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45562aeede655f53794b068988a0cca64b294232d62492de19a0ad41a16d9a97->leave($__internal_45562aeede655f53794b068988a0cca64b294232d62492de19a0ad41a16d9a97_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e94583f13bc855fccd972e889cbf5f1705f19c88499d1af250ed36972cfc9340 = $this->env->getExtension("native_profiler");
        $__internal_e94583f13bc855fccd972e889cbf5f1705f19c88499d1af250ed36972cfc9340->enter($__internal_e94583f13bc855fccd972e889cbf5f1705f19c88499d1af250ed36972cfc9340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e94583f13bc855fccd972e889cbf5f1705f19c88499d1af250ed36972cfc9340->leave($__internal_e94583f13bc855fccd972e889cbf5f1705f19c88499d1af250ed36972cfc9340_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f0010c92e9562cd7467091faea3ae61119eef78069e7239d8253acb8e673156 = $this->env->getExtension("native_profiler");
        $__internal_9f0010c92e9562cd7467091faea3ae61119eef78069e7239d8253acb8e673156->enter($__internal_9f0010c92e9562cd7467091faea3ae61119eef78069e7239d8253acb8e673156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f0010c92e9562cd7467091faea3ae61119eef78069e7239d8253acb8e673156->leave($__internal_9f0010c92e9562cd7467091faea3ae61119eef78069e7239d8253acb8e673156_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f686c54d12d650890025a7bc98a22e8e590ff93f0df8be2c93847b7b41da6787 = $this->env->getExtension("native_profiler");
        $__internal_f686c54d12d650890025a7bc98a22e8e590ff93f0df8be2c93847b7b41da6787->enter($__internal_f686c54d12d650890025a7bc98a22e8e590ff93f0df8be2c93847b7b41da6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f686c54d12d650890025a7bc98a22e8e590ff93f0df8be2c93847b7b41da6787->leave($__internal_f686c54d12d650890025a7bc98a22e8e590ff93f0df8be2c93847b7b41da6787_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
