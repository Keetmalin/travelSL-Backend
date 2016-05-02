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
        $__internal_12d3841e64e2aa9216ffee4026d208b37698825b13fd5882c75dcb33d43f478a = $this->env->getExtension("native_profiler");
        $__internal_12d3841e64e2aa9216ffee4026d208b37698825b13fd5882c75dcb33d43f478a->enter($__internal_12d3841e64e2aa9216ffee4026d208b37698825b13fd5882c75dcb33d43f478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_12d3841e64e2aa9216ffee4026d208b37698825b13fd5882c75dcb33d43f478a->leave($__internal_12d3841e64e2aa9216ffee4026d208b37698825b13fd5882c75dcb33d43f478a_prof);

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
