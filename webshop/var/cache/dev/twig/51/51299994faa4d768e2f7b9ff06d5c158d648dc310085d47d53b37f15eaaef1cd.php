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
        $__internal_f8bd8b6c9d62af17a919196ce659419e24d2f5dfcf293bfd3fa7492bd864ad83 = $this->env->getExtension("native_profiler");
        $__internal_f8bd8b6c9d62af17a919196ce659419e24d2f5dfcf293bfd3fa7492bd864ad83->enter($__internal_f8bd8b6c9d62af17a919196ce659419e24d2f5dfcf293bfd3fa7492bd864ad83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <p>Hi</p>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_f8bd8b6c9d62af17a919196ce659419e24d2f5dfcf293bfd3fa7492bd864ad83->leave($__internal_f8bd8b6c9d62af17a919196ce659419e24d2f5dfcf293bfd3fa7492bd864ad83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83c5c9b201fca96b1f8486b86965e7b5cfd910b2352b2261c35c2920e06b5319 = $this->env->getExtension("native_profiler");
        $__internal_83c5c9b201fca96b1f8486b86965e7b5cfd910b2352b2261c35c2920e06b5319->enter($__internal_83c5c9b201fca96b1f8486b86965e7b5cfd910b2352b2261c35c2920e06b5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83c5c9b201fca96b1f8486b86965e7b5cfd910b2352b2261c35c2920e06b5319->leave($__internal_83c5c9b201fca96b1f8486b86965e7b5cfd910b2352b2261c35c2920e06b5319_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f3ff6c6275888135420296d950b9cbd84910a822d5e86b8cb1ce10902b511c9 = $this->env->getExtension("native_profiler");
        $__internal_4f3ff6c6275888135420296d950b9cbd84910a822d5e86b8cb1ce10902b511c9->enter($__internal_4f3ff6c6275888135420296d950b9cbd84910a822d5e86b8cb1ce10902b511c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f3ff6c6275888135420296d950b9cbd84910a822d5e86b8cb1ce10902b511c9->leave($__internal_4f3ff6c6275888135420296d950b9cbd84910a822d5e86b8cb1ce10902b511c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa8ec2b1debda4c34d0a8e1dfe0ee20db3f01f4a6a93ba22a663a4ad02506691 = $this->env->getExtension("native_profiler");
        $__internal_fa8ec2b1debda4c34d0a8e1dfe0ee20db3f01f4a6a93ba22a663a4ad02506691->enter($__internal_fa8ec2b1debda4c34d0a8e1dfe0ee20db3f01f4a6a93ba22a663a4ad02506691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa8ec2b1debda4c34d0a8e1dfe0ee20db3f01f4a6a93ba22a663a4ad02506691->leave($__internal_fa8ec2b1debda4c34d0a8e1dfe0ee20db3f01f4a6a93ba22a663a4ad02506691_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bda3def8200519777e7f3aa9ce48097a6f3a74b09c926f12e1c4b432fc08ffa5 = $this->env->getExtension("native_profiler");
        $__internal_bda3def8200519777e7f3aa9ce48097a6f3a74b09c926f12e1c4b432fc08ffa5->enter($__internal_bda3def8200519777e7f3aa9ce48097a6f3a74b09c926f12e1c4b432fc08ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bda3def8200519777e7f3aa9ce48097a6f3a74b09c926f12e1c4b432fc08ffa5->leave($__internal_bda3def8200519777e7f3aa9ce48097a6f3a74b09c926f12e1c4b432fc08ffa5_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <p>Hi</p>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
