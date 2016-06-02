<?php

/* test/index.html.twig */
class __TwigTemplate_4fff727ab633fb52fd8cc3554147a036ff663cb15db65f7244dcbbb143e3ba58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 1);
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
        $__internal_f7b3d6e5fc919db13af75d04f1ab737d9f3e6afb6005abfb1d317ace5ea5f984 = $this->env->getExtension("native_profiler");
        $__internal_f7b3d6e5fc919db13af75d04f1ab737d9f3e6afb6005abfb1d317ace5ea5f984->enter($__internal_f7b3d6e5fc919db13af75d04f1ab737d9f3e6afb6005abfb1d317ace5ea5f984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b3d6e5fc919db13af75d04f1ab737d9f3e6afb6005abfb1d317ace5ea5f984->leave($__internal_f7b3d6e5fc919db13af75d04f1ab737d9f3e6afb6005abfb1d317ace5ea5f984_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17013ae6ceae0a4fa9fc3909480277dc023d66b44d1004cfc9059e00402da396 = $this->env->getExtension("native_profiler");
        $__internal_17013ae6ceae0a4fa9fc3909480277dc023d66b44d1004cfc9059e00402da396->enter($__internal_17013ae6ceae0a4fa9fc3909480277dc023d66b44d1004cfc9059e00402da396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hi2
";
        
        $__internal_17013ae6ceae0a4fa9fc3909480277dc023d66b44d1004cfc9059e00402da396->leave($__internal_17013ae6ceae0a4fa9fc3909480277dc023d66b44d1004cfc9059e00402da396_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hi2*/
/* {% endblock %}*/
