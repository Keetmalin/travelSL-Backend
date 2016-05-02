<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_20b7767d4491ee588b88babd07b6cc8e7265bf8d755a47dd77ff2e5d882b2499 extends Twig_Template
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
        $__internal_52e9ebcc658e48b35486cfaa88fc99e5a4a53eb2b9ddcb9a63017ce3a174d6f0 = $this->env->getExtension("native_profiler");
        $__internal_52e9ebcc658e48b35486cfaa88fc99e5a4a53eb2b9ddcb9a63017ce3a174d6f0->enter($__internal_52e9ebcc658e48b35486cfaa88fc99e5a4a53eb2b9ddcb9a63017ce3a174d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_52e9ebcc658e48b35486cfaa88fc99e5a4a53eb2b9ddcb9a63017ce3a174d6f0->leave($__internal_52e9ebcc658e48b35486cfaa88fc99e5a4a53eb2b9ddcb9a63017ce3a174d6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
