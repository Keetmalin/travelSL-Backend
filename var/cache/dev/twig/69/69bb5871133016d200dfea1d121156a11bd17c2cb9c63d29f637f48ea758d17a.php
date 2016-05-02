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
        $__internal_b9bcf376074428b1f1709fe98ad5a9edabf5260bee560ddbcabb881c16870a03 = $this->env->getExtension("native_profiler");
        $__internal_b9bcf376074428b1f1709fe98ad5a9edabf5260bee560ddbcabb881c16870a03->enter($__internal_b9bcf376074428b1f1709fe98ad5a9edabf5260bee560ddbcabb881c16870a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b9bcf376074428b1f1709fe98ad5a9edabf5260bee560ddbcabb881c16870a03->leave($__internal_b9bcf376074428b1f1709fe98ad5a9edabf5260bee560ddbcabb881c16870a03_prof);

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
