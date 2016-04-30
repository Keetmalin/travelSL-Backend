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
        $__internal_c3b7eb2c0b2fa21bafbd64aeeceb474514035c9209ab67f03a06ce834a3fefee = $this->env->getExtension("native_profiler");
        $__internal_c3b7eb2c0b2fa21bafbd64aeeceb474514035c9209ab67f03a06ce834a3fefee->enter($__internal_c3b7eb2c0b2fa21bafbd64aeeceb474514035c9209ab67f03a06ce834a3fefee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3b7eb2c0b2fa21bafbd64aeeceb474514035c9209ab67f03a06ce834a3fefee->leave($__internal_c3b7eb2c0b2fa21bafbd64aeeceb474514035c9209ab67f03a06ce834a3fefee_prof);

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
