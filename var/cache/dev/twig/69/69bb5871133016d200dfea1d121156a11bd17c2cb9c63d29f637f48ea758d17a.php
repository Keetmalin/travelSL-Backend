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
        $__internal_d2a234dec91ee65c0892554c6e3576466b8dea381b3cfe094c7889d50e2a5068 = $this->env->getExtension("native_profiler");
        $__internal_d2a234dec91ee65c0892554c6e3576466b8dea381b3cfe094c7889d50e2a5068->enter($__internal_d2a234dec91ee65c0892554c6e3576466b8dea381b3cfe094c7889d50e2a5068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d2a234dec91ee65c0892554c6e3576466b8dea381b3cfe094c7889d50e2a5068->leave($__internal_d2a234dec91ee65c0892554c6e3576466b8dea381b3cfe094c7889d50e2a5068_prof);

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
