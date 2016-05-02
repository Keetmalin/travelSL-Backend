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
        $__internal_0b37298991584fd6fc33386aacc7efef95c08e18b6f595530b8543fe0afe4ba2 = $this->env->getExtension("native_profiler");
        $__internal_0b37298991584fd6fc33386aacc7efef95c08e18b6f595530b8543fe0afe4ba2->enter($__internal_0b37298991584fd6fc33386aacc7efef95c08e18b6f595530b8543fe0afe4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0b37298991584fd6fc33386aacc7efef95c08e18b6f595530b8543fe0afe4ba2->leave($__internal_0b37298991584fd6fc33386aacc7efef95c08e18b6f595530b8543fe0afe4ba2_prof);

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
