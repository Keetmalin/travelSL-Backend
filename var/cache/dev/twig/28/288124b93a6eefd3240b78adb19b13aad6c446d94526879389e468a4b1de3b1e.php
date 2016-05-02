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
        $__internal_2fb0d7f824d46d01afded84a6ab9168a0049f30b72f3e51953a6f4a7ba1f5f24 = $this->env->getExtension("native_profiler");
        $__internal_2fb0d7f824d46d01afded84a6ab9168a0049f30b72f3e51953a6f4a7ba1f5f24->enter($__internal_2fb0d7f824d46d01afded84a6ab9168a0049f30b72f3e51953a6f4a7ba1f5f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2fb0d7f824d46d01afded84a6ab9168a0049f30b72f3e51953a6f4a7ba1f5f24->leave($__internal_2fb0d7f824d46d01afded84a6ab9168a0049f30b72f3e51953a6f4a7ba1f5f24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8321d3b7460592ed9fd94c23a3b7b5352cb3ca8a6bd400ac6ccef8b85a19f033 = $this->env->getExtension("native_profiler");
        $__internal_8321d3b7460592ed9fd94c23a3b7b5352cb3ca8a6bd400ac6ccef8b85a19f033->enter($__internal_8321d3b7460592ed9fd94c23a3b7b5352cb3ca8a6bd400ac6ccef8b85a19f033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8321d3b7460592ed9fd94c23a3b7b5352cb3ca8a6bd400ac6ccef8b85a19f033->leave($__internal_8321d3b7460592ed9fd94c23a3b7b5352cb3ca8a6bd400ac6ccef8b85a19f033_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_429f15990b46df29a67f1b34d79990356591a2d9ed5a93a13e8c9f36586886d6 = $this->env->getExtension("native_profiler");
        $__internal_429f15990b46df29a67f1b34d79990356591a2d9ed5a93a13e8c9f36586886d6->enter($__internal_429f15990b46df29a67f1b34d79990356591a2d9ed5a93a13e8c9f36586886d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_429f15990b46df29a67f1b34d79990356591a2d9ed5a93a13e8c9f36586886d6->leave($__internal_429f15990b46df29a67f1b34d79990356591a2d9ed5a93a13e8c9f36586886d6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaffdd8fc756805c7168c5cf61451d10725a830375c1c0c3ad867206f1b53389 = $this->env->getExtension("native_profiler");
        $__internal_aaffdd8fc756805c7168c5cf61451d10725a830375c1c0c3ad867206f1b53389->enter($__internal_aaffdd8fc756805c7168c5cf61451d10725a830375c1c0c3ad867206f1b53389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaffdd8fc756805c7168c5cf61451d10725a830375c1c0c3ad867206f1b53389->leave($__internal_aaffdd8fc756805c7168c5cf61451d10725a830375c1c0c3ad867206f1b53389_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00f52ad7715aa5dd7789dc20e22421fc25025d810c7c6c616f43f8d54d60af80 = $this->env->getExtension("native_profiler");
        $__internal_00f52ad7715aa5dd7789dc20e22421fc25025d810c7c6c616f43f8d54d60af80->enter($__internal_00f52ad7715aa5dd7789dc20e22421fc25025d810c7c6c616f43f8d54d60af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_00f52ad7715aa5dd7789dc20e22421fc25025d810c7c6c616f43f8d54d60af80->leave($__internal_00f52ad7715aa5dd7789dc20e22421fc25025d810c7c6c616f43f8d54d60af80_prof);

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
