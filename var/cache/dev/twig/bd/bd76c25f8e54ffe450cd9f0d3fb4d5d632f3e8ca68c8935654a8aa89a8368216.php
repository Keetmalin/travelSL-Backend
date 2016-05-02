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
        $__internal_f6b322899059c00574e8cedd34d0fd4c7b9b7f72476461460f17c378a5134f10 = $this->env->getExtension("native_profiler");
        $__internal_f6b322899059c00574e8cedd34d0fd4c7b9b7f72476461460f17c378a5134f10->enter($__internal_f6b322899059c00574e8cedd34d0fd4c7b9b7f72476461460f17c378a5134f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6b322899059c00574e8cedd34d0fd4c7b9b7f72476461460f17c378a5134f10->leave($__internal_f6b322899059c00574e8cedd34d0fd4c7b9b7f72476461460f17c378a5134f10_prof);

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
