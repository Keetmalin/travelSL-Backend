<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_782ef0d3d49475d269f2b803d9c9466e81828a9adb78cc1a89c9a7e865385099 extends Twig_Template
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
        $__internal_90e421705066639bb20e1546c4133410c01a9d886ab751de11a94c72e1fa156a = $this->env->getExtension("native_profiler");
        $__internal_90e421705066639bb20e1546c4133410c01a9d886ab751de11a94c72e1fa156a->enter($__internal_90e421705066639bb20e1546c4133410c01a9d886ab751de11a94c72e1fa156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_90e421705066639bb20e1546c4133410c01a9d886ab751de11a94c72e1fa156a->leave($__internal_90e421705066639bb20e1546c4133410c01a9d886ab751de11a94c72e1fa156a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
