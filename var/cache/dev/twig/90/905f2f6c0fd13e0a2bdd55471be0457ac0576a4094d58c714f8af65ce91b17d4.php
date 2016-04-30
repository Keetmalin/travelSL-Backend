<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ce80db33abcbf3f46493010a609773c76ded620b8c6bac063ca6c78a25d2a51b extends Twig_Template
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
        $__internal_cd5cc620006577d72b1a969e2739425f5f580fe0fa4ff05426514fa36e7dacea = $this->env->getExtension("native_profiler");
        $__internal_cd5cc620006577d72b1a969e2739425f5f580fe0fa4ff05426514fa36e7dacea->enter($__internal_cd5cc620006577d72b1a969e2739425f5f580fe0fa4ff05426514fa36e7dacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cd5cc620006577d72b1a969e2739425f5f580fe0fa4ff05426514fa36e7dacea->leave($__internal_cd5cc620006577d72b1a969e2739425f5f580fe0fa4ff05426514fa36e7dacea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
