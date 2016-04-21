<?php

/* base.html.twig */
class __TwigTemplate_9c5e856c1338f144b64b1ffca39237a41a9666e8ab370244dfe91d725fff6e49 extends Twig_Template
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
        $__internal_fde2bff04a04884fba53d2c52f3a1ace8d17ac77a5db47a22e4b8d248f9cc3f0 = $this->env->getExtension("native_profiler");
        $__internal_fde2bff04a04884fba53d2c52f3a1ace8d17ac77a5db47a22e4b8d248f9cc3f0->enter($__internal_fde2bff04a04884fba53d2c52f3a1ace8d17ac77a5db47a22e4b8d248f9cc3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fde2bff04a04884fba53d2c52f3a1ace8d17ac77a5db47a22e4b8d248f9cc3f0->leave($__internal_fde2bff04a04884fba53d2c52f3a1ace8d17ac77a5db47a22e4b8d248f9cc3f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f6d622462083c63136ac1c94b46e4260721d9d4342b8733f793919dc25e5efe = $this->env->getExtension("native_profiler");
        $__internal_5f6d622462083c63136ac1c94b46e4260721d9d4342b8733f793919dc25e5efe->enter($__internal_5f6d622462083c63136ac1c94b46e4260721d9d4342b8733f793919dc25e5efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f6d622462083c63136ac1c94b46e4260721d9d4342b8733f793919dc25e5efe->leave($__internal_5f6d622462083c63136ac1c94b46e4260721d9d4342b8733f793919dc25e5efe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85bc4f6786ed888038abd884faeddef858697663dc9b614b4bc85ebe6360af08 = $this->env->getExtension("native_profiler");
        $__internal_85bc4f6786ed888038abd884faeddef858697663dc9b614b4bc85ebe6360af08->enter($__internal_85bc4f6786ed888038abd884faeddef858697663dc9b614b4bc85ebe6360af08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85bc4f6786ed888038abd884faeddef858697663dc9b614b4bc85ebe6360af08->leave($__internal_85bc4f6786ed888038abd884faeddef858697663dc9b614b4bc85ebe6360af08_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed680f9776b3976c86be591800f2009fd1fedf63a4fc17543a6c979d7aca5c0 = $this->env->getExtension("native_profiler");
        $__internal_eed680f9776b3976c86be591800f2009fd1fedf63a4fc17543a6c979d7aca5c0->enter($__internal_eed680f9776b3976c86be591800f2009fd1fedf63a4fc17543a6c979d7aca5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eed680f9776b3976c86be591800f2009fd1fedf63a4fc17543a6c979d7aca5c0->leave($__internal_eed680f9776b3976c86be591800f2009fd1fedf63a4fc17543a6c979d7aca5c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a05d6a497833ed19686906a40a286e1a080d170ee197ff524d2569fdf7e011eb = $this->env->getExtension("native_profiler");
        $__internal_a05d6a497833ed19686906a40a286e1a080d170ee197ff524d2569fdf7e011eb->enter($__internal_a05d6a497833ed19686906a40a286e1a080d170ee197ff524d2569fdf7e011eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a05d6a497833ed19686906a40a286e1a080d170ee197ff524d2569fdf7e011eb->leave($__internal_a05d6a497833ed19686906a40a286e1a080d170ee197ff524d2569fdf7e011eb_prof);

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
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
