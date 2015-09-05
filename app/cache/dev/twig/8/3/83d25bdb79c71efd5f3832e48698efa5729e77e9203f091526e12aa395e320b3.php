<?php

/* base.html.twig */
class __TwigTemplate_83d25bdb79c71efd5f3832e48698efa5729e77e9203f091526e12aa395e320b3 extends Twig_Template
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
        $__internal_37e677862a7d80fce2e833a787f278040ca4d7cedf7bdad33fb7e91637a80bee = $this->env->getExtension("native_profiler");
        $__internal_37e677862a7d80fce2e833a787f278040ca4d7cedf7bdad33fb7e91637a80bee->enter($__internal_37e677862a7d80fce2e833a787f278040ca4d7cedf7bdad33fb7e91637a80bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_37e677862a7d80fce2e833a787f278040ca4d7cedf7bdad33fb7e91637a80bee->leave($__internal_37e677862a7d80fce2e833a787f278040ca4d7cedf7bdad33fb7e91637a80bee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7158c91745744be28b5e3954d760fd3d7e568e4a9922db98fa9d87bafc806d52 = $this->env->getExtension("native_profiler");
        $__internal_7158c91745744be28b5e3954d760fd3d7e568e4a9922db98fa9d87bafc806d52->enter($__internal_7158c91745744be28b5e3954d760fd3d7e568e4a9922db98fa9d87bafc806d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7158c91745744be28b5e3954d760fd3d7e568e4a9922db98fa9d87bafc806d52->leave($__internal_7158c91745744be28b5e3954d760fd3d7e568e4a9922db98fa9d87bafc806d52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d106ddcf3b0f62a5b95125dbeb4fe9f869958e1920beea38be34ae6043969f7 = $this->env->getExtension("native_profiler");
        $__internal_3d106ddcf3b0f62a5b95125dbeb4fe9f869958e1920beea38be34ae6043969f7->enter($__internal_3d106ddcf3b0f62a5b95125dbeb4fe9f869958e1920beea38be34ae6043969f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d106ddcf3b0f62a5b95125dbeb4fe9f869958e1920beea38be34ae6043969f7->leave($__internal_3d106ddcf3b0f62a5b95125dbeb4fe9f869958e1920beea38be34ae6043969f7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f43c0072b9edefe23450819f4e4cbc0558ecac703eed8b143355843b89aaed = $this->env->getExtension("native_profiler");
        $__internal_99f43c0072b9edefe23450819f4e4cbc0558ecac703eed8b143355843b89aaed->enter($__internal_99f43c0072b9edefe23450819f4e4cbc0558ecac703eed8b143355843b89aaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99f43c0072b9edefe23450819f4e4cbc0558ecac703eed8b143355843b89aaed->leave($__internal_99f43c0072b9edefe23450819f4e4cbc0558ecac703eed8b143355843b89aaed_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13037db1201ccb25b14b60053f529215f40d6fcba71a12ed4067e1066fc34691 = $this->env->getExtension("native_profiler");
        $__internal_13037db1201ccb25b14b60053f529215f40d6fcba71a12ed4067e1066fc34691->enter($__internal_13037db1201ccb25b14b60053f529215f40d6fcba71a12ed4067e1066fc34691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13037db1201ccb25b14b60053f529215f40d6fcba71a12ed4067e1066fc34691->leave($__internal_13037db1201ccb25b14b60053f529215f40d6fcba71a12ed4067e1066fc34691_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
