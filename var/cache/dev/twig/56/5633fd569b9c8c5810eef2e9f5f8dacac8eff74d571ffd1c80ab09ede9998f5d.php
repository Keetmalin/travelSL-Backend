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
        $__internal_78e99b619b4649226ff294055b0525ac548847c8cd474469908ca92a7ad85b9c = $this->env->getExtension("native_profiler");
        $__internal_78e99b619b4649226ff294055b0525ac548847c8cd474469908ca92a7ad85b9c->enter($__internal_78e99b619b4649226ff294055b0525ac548847c8cd474469908ca92a7ad85b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_78e99b619b4649226ff294055b0525ac548847c8cd474469908ca92a7ad85b9c->leave($__internal_78e99b619b4649226ff294055b0525ac548847c8cd474469908ca92a7ad85b9c_prof);

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
