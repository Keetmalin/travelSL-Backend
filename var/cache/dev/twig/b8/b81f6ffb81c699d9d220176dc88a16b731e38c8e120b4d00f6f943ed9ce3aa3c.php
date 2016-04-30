<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_de19602b8642b142a7f59270520e1d425cb2c1b0aa9a185fd873e64711e35561 extends Twig_Template
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
        $__internal_93622347d25b155400401cdc7f6f85ad2cc458eeed1a172f62f81553e9eed5ab = $this->env->getExtension("native_profiler");
        $__internal_93622347d25b155400401cdc7f6f85ad2cc458eeed1a172f62f81553e9eed5ab->enter($__internal_93622347d25b155400401cdc7f6f85ad2cc458eeed1a172f62f81553e9eed5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_93622347d25b155400401cdc7f6f85ad2cc458eeed1a172f62f81553e9eed5ab->leave($__internal_93622347d25b155400401cdc7f6f85ad2cc458eeed1a172f62f81553e9eed5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
