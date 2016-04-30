<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_74835edcc3a29abedff5b7aaa8fd4583f30b5d263bc0476f9d36e6f0b52f94cb extends Twig_Template
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
        $__internal_75ef0bad3650132e77f54b6eb3ef8e97482bbfc5492f6c0acddc3a4b7b51a506 = $this->env->getExtension("native_profiler");
        $__internal_75ef0bad3650132e77f54b6eb3ef8e97482bbfc5492f6c0acddc3a4b7b51a506->enter($__internal_75ef0bad3650132e77f54b6eb3ef8e97482bbfc5492f6c0acddc3a4b7b51a506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_75ef0bad3650132e77f54b6eb3ef8e97482bbfc5492f6c0acddc3a4b7b51a506->leave($__internal_75ef0bad3650132e77f54b6eb3ef8e97482bbfc5492f6c0acddc3a4b7b51a506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
