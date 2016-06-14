<?php

/* base.html.twig */
class __TwigTemplate_a4db033e91b695be984ac484819c20fa12e20a91c5ec8b801f7d787806f57df4 extends Twig_Template
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
        $__internal_4669e5b25e1186ed8e46e5b150d1243cc083ca12dacef84d7251913d95c0eaa7 = $this->env->getExtension("native_profiler");
        $__internal_4669e5b25e1186ed8e46e5b150d1243cc083ca12dacef84d7251913d95c0eaa7->enter($__internal_4669e5b25e1186ed8e46e5b150d1243cc083ca12dacef84d7251913d95c0eaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4669e5b25e1186ed8e46e5b150d1243cc083ca12dacef84d7251913d95c0eaa7->leave($__internal_4669e5b25e1186ed8e46e5b150d1243cc083ca12dacef84d7251913d95c0eaa7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c1038b68de57c20f19d26de2cf3ffa018751a01211e941f6c8dca4d9c3879f6 = $this->env->getExtension("native_profiler");
        $__internal_4c1038b68de57c20f19d26de2cf3ffa018751a01211e941f6c8dca4d9c3879f6->enter($__internal_4c1038b68de57c20f19d26de2cf3ffa018751a01211e941f6c8dca4d9c3879f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4c1038b68de57c20f19d26de2cf3ffa018751a01211e941f6c8dca4d9c3879f6->leave($__internal_4c1038b68de57c20f19d26de2cf3ffa018751a01211e941f6c8dca4d9c3879f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18ebd176616001594e899074513c8a60d4d53364f966ea8c6aebf8bff0e37e68 = $this->env->getExtension("native_profiler");
        $__internal_18ebd176616001594e899074513c8a60d4d53364f966ea8c6aebf8bff0e37e68->enter($__internal_18ebd176616001594e899074513c8a60d4d53364f966ea8c6aebf8bff0e37e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18ebd176616001594e899074513c8a60d4d53364f966ea8c6aebf8bff0e37e68->leave($__internal_18ebd176616001594e899074513c8a60d4d53364f966ea8c6aebf8bff0e37e68_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c445c1c9ae383bac14b09659d20250ed9f23ab8e023de5e7e9c912b04a65ab6 = $this->env->getExtension("native_profiler");
        $__internal_3c445c1c9ae383bac14b09659d20250ed9f23ab8e023de5e7e9c912b04a65ab6->enter($__internal_3c445c1c9ae383bac14b09659d20250ed9f23ab8e023de5e7e9c912b04a65ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c445c1c9ae383bac14b09659d20250ed9f23ab8e023de5e7e9c912b04a65ab6->leave($__internal_3c445c1c9ae383bac14b09659d20250ed9f23ab8e023de5e7e9c912b04a65ab6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_075de1eae3033daa5828b58c359d0f02138eeda0465392e6e51faeace4f098b2 = $this->env->getExtension("native_profiler");
        $__internal_075de1eae3033daa5828b58c359d0f02138eeda0465392e6e51faeace4f098b2->enter($__internal_075de1eae3033daa5828b58c359d0f02138eeda0465392e6e51faeace4f098b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_075de1eae3033daa5828b58c359d0f02138eeda0465392e6e51faeace4f098b2->leave($__internal_075de1eae3033daa5828b58c359d0f02138eeda0465392e6e51faeace4f098b2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
