<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f7c2684c668edd423f06369ca669481f532cf24bd82614940a2b7b9dbdc4717d extends Twig_Template
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
        $__internal_498cba90184cdc25529473624edce439c5876f884eba0af2621c56b5c85ba375 = $this->env->getExtension("native_profiler");
        $__internal_498cba90184cdc25529473624edce439c5876f884eba0af2621c56b5c85ba375->enter($__internal_498cba90184cdc25529473624edce439c5876f884eba0af2621c56b5c85ba375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_498cba90184cdc25529473624edce439c5876f884eba0af2621c56b5c85ba375->leave($__internal_498cba90184cdc25529473624edce439c5876f884eba0af2621c56b5c85ba375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
