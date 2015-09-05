<?php

/* ::base.html.twig */
class __TwigTemplate_a7551fb6f4fbd243b2e9870dc35b00e210c026fce2bcc4ec2d434485cd97a017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_481be8f8d4f73e5921b77fb138b7e1e20c3534c2c4f91c20ae92e228c2517214 = $this->env->getExtension("native_profiler");
        $__internal_481be8f8d4f73e5921b77fb138b7e1e20c3534c2c4f91c20ae92e228c2517214->enter($__internal_481be8f8d4f73e5921b77fb138b7e1e20c3534c2c4f91c20ae92e228c2517214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_481be8f8d4f73e5921b77fb138b7e1e20c3534c2c4f91c20ae92e228c2517214->leave($__internal_481be8f8d4f73e5921b77fb138b7e1e20c3534c2c4f91c20ae92e228c2517214_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fc17e965521b581d01a472c08bdbee4fcdc9487ad54f5ebf2d1ec78983cbd2 = $this->env->getExtension("native_profiler");
        $__internal_f1fc17e965521b581d01a472c08bdbee4fcdc9487ad54f5ebf2d1ec78983cbd2->enter($__internal_f1fc17e965521b581d01a472c08bdbee4fcdc9487ad54f5ebf2d1ec78983cbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1fc17e965521b581d01a472c08bdbee4fcdc9487ad54f5ebf2d1ec78983cbd2->leave($__internal_f1fc17e965521b581d01a472c08bdbee4fcdc9487ad54f5ebf2d1ec78983cbd2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e63b5d9a8493cb2d158b6c26d98839e8ec8c6b63936afd1f6ba0e7612d3d3165 = $this->env->getExtension("native_profiler");
        $__internal_e63b5d9a8493cb2d158b6c26d98839e8ec8c6b63936afd1f6ba0e7612d3d3165->enter($__internal_e63b5d9a8493cb2d158b6c26d98839e8ec8c6b63936afd1f6ba0e7612d3d3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e63b5d9a8493cb2d158b6c26d98839e8ec8c6b63936afd1f6ba0e7612d3d3165->leave($__internal_e63b5d9a8493cb2d158b6c26d98839e8ec8c6b63936afd1f6ba0e7612d3d3165_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8c50078648e3e5de51e22bbd1fb639993e5c89ce2be0b21ffdcdc9416b34d3f = $this->env->getExtension("native_profiler");
        $__internal_c8c50078648e3e5de51e22bbd1fb639993e5c89ce2be0b21ffdcdc9416b34d3f->enter($__internal_c8c50078648e3e5de51e22bbd1fb639993e5c89ce2be0b21ffdcdc9416b34d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8c50078648e3e5de51e22bbd1fb639993e5c89ce2be0b21ffdcdc9416b34d3f->leave($__internal_c8c50078648e3e5de51e22bbd1fb639993e5c89ce2be0b21ffdcdc9416b34d3f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_618f239e00372ffb8e29633ddd27bc5e8bfdf391e838bf234583ae1cbf10ad46 = $this->env->getExtension("native_profiler");
        $__internal_618f239e00372ffb8e29633ddd27bc5e8bfdf391e838bf234583ae1cbf10ad46->enter($__internal_618f239e00372ffb8e29633ddd27bc5e8bfdf391e838bf234583ae1cbf10ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_618f239e00372ffb8e29633ddd27bc5e8bfdf391e838bf234583ae1cbf10ad46->leave($__internal_618f239e00372ffb8e29633ddd27bc5e8bfdf391e838bf234583ae1cbf10ad46_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
