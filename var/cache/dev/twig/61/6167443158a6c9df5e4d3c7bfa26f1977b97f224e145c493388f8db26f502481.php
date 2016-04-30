<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_02aeb1fdb14d4b2bf28f6a619b33c20da6a8a6d954313a7bf325b8f88816950b extends Twig_Template
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
        $__internal_0da74e7c73b8972de6a222a4416be99e4ccfdb66b5d16be04181ef3649bcd7e8 = $this->env->getExtension("native_profiler");
        $__internal_0da74e7c73b8972de6a222a4416be99e4ccfdb66b5d16be04181ef3649bcd7e8->enter($__internal_0da74e7c73b8972de6a222a4416be99e4ccfdb66b5d16be04181ef3649bcd7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0da74e7c73b8972de6a222a4416be99e4ccfdb66b5d16be04181ef3649bcd7e8->leave($__internal_0da74e7c73b8972de6a222a4416be99e4ccfdb66b5d16be04181ef3649bcd7e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
