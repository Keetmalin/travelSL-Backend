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
        $__internal_5e72fec88ea85cd6097a43e592f769e358dcc73ab683615fdf3a33a86de8a2e4 = $this->env->getExtension("native_profiler");
        $__internal_5e72fec88ea85cd6097a43e592f769e358dcc73ab683615fdf3a33a86de8a2e4->enter($__internal_5e72fec88ea85cd6097a43e592f769e358dcc73ab683615fdf3a33a86de8a2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5e72fec88ea85cd6097a43e592f769e358dcc73ab683615fdf3a33a86de8a2e4->leave($__internal_5e72fec88ea85cd6097a43e592f769e358dcc73ab683615fdf3a33a86de8a2e4_prof);

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
