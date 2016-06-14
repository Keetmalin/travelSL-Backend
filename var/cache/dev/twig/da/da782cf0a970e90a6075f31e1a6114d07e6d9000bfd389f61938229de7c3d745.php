<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_18980d5c05806c1e43c14011356a8b3e00512cb649bc02a0ec17add7141b6f8d extends Twig_Template
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
        $__internal_dcaab26448d9e20674534b11b795eefc9ed519d97acfdf3af9dca79e3d22735a = $this->env->getExtension("native_profiler");
        $__internal_dcaab26448d9e20674534b11b795eefc9ed519d97acfdf3af9dca79e3d22735a->enter($__internal_dcaab26448d9e20674534b11b795eefc9ed519d97acfdf3af9dca79e3d22735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dcaab26448d9e20674534b11b795eefc9ed519d97acfdf3af9dca79e3d22735a->leave($__internal_dcaab26448d9e20674534b11b795eefc9ed519d97acfdf3af9dca79e3d22735a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
