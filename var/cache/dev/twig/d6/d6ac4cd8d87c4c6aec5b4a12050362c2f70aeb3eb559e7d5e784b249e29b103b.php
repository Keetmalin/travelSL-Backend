<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a0358d0bc277a407c2a2a65fa9ec008bf110676d8695e7005dea98fe72dfc3f3 extends Twig_Template
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
        $__internal_40dad6f018572118d47cdbf7a7cd6af75a5f77d3d30bcd805e20d3ec5369eb1e = $this->env->getExtension("native_profiler");
        $__internal_40dad6f018572118d47cdbf7a7cd6af75a5f77d3d30bcd805e20d3ec5369eb1e->enter($__internal_40dad6f018572118d47cdbf7a7cd6af75a5f77d3d30bcd805e20d3ec5369eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_40dad6f018572118d47cdbf7a7cd6af75a5f77d3d30bcd805e20d3ec5369eb1e->leave($__internal_40dad6f018572118d47cdbf7a7cd6af75a5f77d3d30bcd805e20d3ec5369eb1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
