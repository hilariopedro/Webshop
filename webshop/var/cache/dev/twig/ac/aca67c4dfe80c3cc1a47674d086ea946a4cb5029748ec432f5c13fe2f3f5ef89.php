<?php

/* test/new.html.twig */
class __TwigTemplate_821ac9fde7229c80c406b3e0b281bc94966dc9fd6de27c762b98b52d11ce6063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca54277c6a290864c76a67007e93d495bf21b3016eba665b5039ceef23833548 = $this->env->getExtension("native_profiler");
        $__internal_ca54277c6a290864c76a67007e93d495bf21b3016eba665b5039ceef23833548->enter($__internal_ca54277c6a290864c76a67007e93d495bf21b3016eba665b5039ceef23833548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca54277c6a290864c76a67007e93d495bf21b3016eba665b5039ceef23833548->leave($__internal_ca54277c6a290864c76a67007e93d495bf21b3016eba665b5039ceef23833548_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5acba11cc7cda230b6fc772ada66bcf7070392b83efcd215f1105f80ff128ac0 = $this->env->getExtension("native_profiler");
        $__internal_5acba11cc7cda230b6fc772ada66bcf7070392b83efcd215f1105f80ff128ac0->enter($__internal_5acba11cc7cda230b6fc772ada66bcf7070392b83efcd215f1105f80ff128ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    New page
    is
    ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "
";
        
        $__internal_5acba11cc7cda230b6fc772ada66bcf7070392b83efcd215f1105f80ff128ac0->leave($__internal_5acba11cc7cda230b6fc772ada66bcf7070392b83efcd215f1105f80ff128ac0_prof);

    }

    public function getTemplateName()
    {
        return "test/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     New page*/
/*     is*/
/*     {{ page }}*/
/* {% endblock %}*/
