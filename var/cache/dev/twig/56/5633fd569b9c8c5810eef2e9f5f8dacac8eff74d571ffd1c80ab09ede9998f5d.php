<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4a75bd1ac1c007670d7352233b6f5d1127ac18e29e391fd095f399f89aaa1bd1 extends Twig_Template
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
        $__internal_099402506bd7edc568fba7f5eadf811312935e6402055927c31b3390c680d1a4 = $this->env->getExtension("native_profiler");
        $__internal_099402506bd7edc568fba7f5eadf811312935e6402055927c31b3390c680d1a4->enter($__internal_099402506bd7edc568fba7f5eadf811312935e6402055927c31b3390c680d1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_099402506bd7edc568fba7f5eadf811312935e6402055927c31b3390c680d1a4->leave($__internal_099402506bd7edc568fba7f5eadf811312935e6402055927c31b3390c680d1a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
