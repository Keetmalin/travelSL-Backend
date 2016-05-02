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
        $__internal_eb842a39e31c0d14cdb74fecb266e2966a91224308448a88159e21b6b23bc8f1 = $this->env->getExtension("native_profiler");
        $__internal_eb842a39e31c0d14cdb74fecb266e2966a91224308448a88159e21b6b23bc8f1->enter($__internal_eb842a39e31c0d14cdb74fecb266e2966a91224308448a88159e21b6b23bc8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eb842a39e31c0d14cdb74fecb266e2966a91224308448a88159e21b6b23bc8f1->leave($__internal_eb842a39e31c0d14cdb74fecb266e2966a91224308448a88159e21b6b23bc8f1_prof);

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
