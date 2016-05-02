<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0b967ce48707b5867f5f476243aac0ea44a876132ed441cef6e4050d3c22ccf extends Twig_Template
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
        $__internal_2d0b887e5342af9e72a3d5a3391e067672dd38b4c7e447a20ae358e7af0f3105 = $this->env->getExtension("native_profiler");
        $__internal_2d0b887e5342af9e72a3d5a3391e067672dd38b4c7e447a20ae358e7af0f3105->enter($__internal_2d0b887e5342af9e72a3d5a3391e067672dd38b4c7e447a20ae358e7af0f3105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2d0b887e5342af9e72a3d5a3391e067672dd38b4c7e447a20ae358e7af0f3105->leave($__internal_2d0b887e5342af9e72a3d5a3391e067672dd38b4c7e447a20ae358e7af0f3105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
