<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_46105fa8624ffba91e4e33a165a4fd1f619427fa359678982f717d86007c9174 extends Twig_Template
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
        $__internal_1e0751144b1442171bab9642c065ec2a1ac57afe55f72f03cfa1df90489e92a0 = $this->env->getExtension("native_profiler");
        $__internal_1e0751144b1442171bab9642c065ec2a1ac57afe55f72f03cfa1df90489e92a0->enter($__internal_1e0751144b1442171bab9642c065ec2a1ac57afe55f72f03cfa1df90489e92a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1e0751144b1442171bab9642c065ec2a1ac57afe55f72f03cfa1df90489e92a0->leave($__internal_1e0751144b1442171bab9642c065ec2a1ac57afe55f72f03cfa1df90489e92a0_prof);

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
