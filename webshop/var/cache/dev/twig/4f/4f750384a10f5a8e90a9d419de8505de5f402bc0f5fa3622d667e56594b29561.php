<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_124f1878bc11e6637142a60aadcd4f9344002af3f463a5fae5549d2cb9d033d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd9000bc672961d9ea2dfc6dd7a9bb5fd753e71e80ebe059ce283565080e8af5 = $this->env->getExtension("native_profiler");
        $__internal_fd9000bc672961d9ea2dfc6dd7a9bb5fd753e71e80ebe059ce283565080e8af5->enter($__internal_fd9000bc672961d9ea2dfc6dd7a9bb5fd753e71e80ebe059ce283565080e8af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9000bc672961d9ea2dfc6dd7a9bb5fd753e71e80ebe059ce283565080e8af5->leave($__internal_fd9000bc672961d9ea2dfc6dd7a9bb5fd753e71e80ebe059ce283565080e8af5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3e5ef7e8397127c132137fca47fb4eaaf3bd74380d84bb93d95cbd3927bef75 = $this->env->getExtension("native_profiler");
        $__internal_c3e5ef7e8397127c132137fca47fb4eaaf3bd74380d84bb93d95cbd3927bef75->enter($__internal_c3e5ef7e8397127c132137fca47fb4eaaf3bd74380d84bb93d95cbd3927bef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c3e5ef7e8397127c132137fca47fb4eaaf3bd74380d84bb93d95cbd3927bef75->leave($__internal_c3e5ef7e8397127c132137fca47fb4eaaf3bd74380d84bb93d95cbd3927bef75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a25fba6b01f83e68a8ec95557dfd61531ae4b0bf323a4f2ce04c832f8edf10a = $this->env->getExtension("native_profiler");
        $__internal_2a25fba6b01f83e68a8ec95557dfd61531ae4b0bf323a4f2ce04c832f8edf10a->enter($__internal_2a25fba6b01f83e68a8ec95557dfd61531ae4b0bf323a4f2ce04c832f8edf10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a25fba6b01f83e68a8ec95557dfd61531ae4b0bf323a4f2ce04c832f8edf10a->leave($__internal_2a25fba6b01f83e68a8ec95557dfd61531ae4b0bf323a4f2ce04c832f8edf10a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eadba590b10231e967d647e5c929e58f823a7465ef80f9620140a2fe1a56a1d = $this->env->getExtension("native_profiler");
        $__internal_5eadba590b10231e967d647e5c929e58f823a7465ef80f9620140a2fe1a56a1d->enter($__internal_5eadba590b10231e967d647e5c929e58f823a7465ef80f9620140a2fe1a56a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5eadba590b10231e967d647e5c929e58f823a7465ef80f9620140a2fe1a56a1d->leave($__internal_5eadba590b10231e967d647e5c929e58f823a7465ef80f9620140a2fe1a56a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
