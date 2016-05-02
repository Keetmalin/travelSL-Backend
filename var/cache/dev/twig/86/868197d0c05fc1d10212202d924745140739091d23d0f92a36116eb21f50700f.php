<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ac4f9980f0bbf33f9ffb76d03ee22ddcc91bb09f33b308f57a995b656f0fd243 extends Twig_Template
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
        $__internal_9f457f6a8bf253cbe471a351676ccea8ff88140b1249a1c05c833e550c866e90 = $this->env->getExtension("native_profiler");
        $__internal_9f457f6a8bf253cbe471a351676ccea8ff88140b1249a1c05c833e550c866e90->enter($__internal_9f457f6a8bf253cbe471a351676ccea8ff88140b1249a1c05c833e550c866e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f457f6a8bf253cbe471a351676ccea8ff88140b1249a1c05c833e550c866e90->leave($__internal_9f457f6a8bf253cbe471a351676ccea8ff88140b1249a1c05c833e550c866e90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
