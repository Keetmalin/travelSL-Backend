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
        $__internal_acb3b6a7d6632e4a8951b023f1b142ade76c129fb371364e1c8e3f52db4cd915 = $this->env->getExtension("native_profiler");
        $__internal_acb3b6a7d6632e4a8951b023f1b142ade76c129fb371364e1c8e3f52db4cd915->enter($__internal_acb3b6a7d6632e4a8951b023f1b142ade76c129fb371364e1c8e3f52db4cd915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_acb3b6a7d6632e4a8951b023f1b142ade76c129fb371364e1c8e3f52db4cd915->leave($__internal_acb3b6a7d6632e4a8951b023f1b142ade76c129fb371364e1c8e3f52db4cd915_prof);

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
