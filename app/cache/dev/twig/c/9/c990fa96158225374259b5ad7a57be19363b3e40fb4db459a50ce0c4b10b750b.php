<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c990fa96158225374259b5ad7a57be19363b3e40fb4db459a50ce0c4b10b750b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824b645f02b473d14495385fef5ac8e7f513ae9f638e87cc0d03ba91bbbb448c = $this->env->getExtension("native_profiler");
        $__internal_824b645f02b473d14495385fef5ac8e7f513ae9f638e87cc0d03ba91bbbb448c->enter($__internal_824b645f02b473d14495385fef5ac8e7f513ae9f638e87cc0d03ba91bbbb448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824b645f02b473d14495385fef5ac8e7f513ae9f638e87cc0d03ba91bbbb448c->leave($__internal_824b645f02b473d14495385fef5ac8e7f513ae9f638e87cc0d03ba91bbbb448c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68cc4a435dd4e38fb1e22237f36c0c50fd3eb31f40be295f898913dbc999a4c1 = $this->env->getExtension("native_profiler");
        $__internal_68cc4a435dd4e38fb1e22237f36c0c50fd3eb31f40be295f898913dbc999a4c1->enter($__internal_68cc4a435dd4e38fb1e22237f36c0c50fd3eb31f40be295f898913dbc999a4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_68cc4a435dd4e38fb1e22237f36c0c50fd3eb31f40be295f898913dbc999a4c1->leave($__internal_68cc4a435dd4e38fb1e22237f36c0c50fd3eb31f40be295f898913dbc999a4c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26aa460c63adfc52adada303e40904bf17017a61d3e086a507df4f4c4e44b5da = $this->env->getExtension("native_profiler");
        $__internal_26aa460c63adfc52adada303e40904bf17017a61d3e086a507df4f4c4e44b5da->enter($__internal_26aa460c63adfc52adada303e40904bf17017a61d3e086a507df4f4c4e44b5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26aa460c63adfc52adada303e40904bf17017a61d3e086a507df4f4c4e44b5da->leave($__internal_26aa460c63adfc52adada303e40904bf17017a61d3e086a507df4f4c4e44b5da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_993342761ffc5776fc9841cbc6ef49cf74fccd3e58dcd1eb6abe78349349143d = $this->env->getExtension("native_profiler");
        $__internal_993342761ffc5776fc9841cbc6ef49cf74fccd3e58dcd1eb6abe78349349143d->enter($__internal_993342761ffc5776fc9841cbc6ef49cf74fccd3e58dcd1eb6abe78349349143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_993342761ffc5776fc9841cbc6ef49cf74fccd3e58dcd1eb6abe78349349143d->leave($__internal_993342761ffc5776fc9841cbc6ef49cf74fccd3e58dcd1eb6abe78349349143d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
