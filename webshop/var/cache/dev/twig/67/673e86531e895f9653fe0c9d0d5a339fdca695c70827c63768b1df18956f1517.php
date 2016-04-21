<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_97bce47fe88cbc7c1a5634439ab2317680b8376135922866037c06fc64691f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfbecadacf02fc72e13197f399665da698761714700902d89f7f3c8da53d8f11 = $this->env->getExtension("native_profiler");
        $__internal_dfbecadacf02fc72e13197f399665da698761714700902d89f7f3c8da53d8f11->enter($__internal_dfbecadacf02fc72e13197f399665da698761714700902d89f7f3c8da53d8f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbecadacf02fc72e13197f399665da698761714700902d89f7f3c8da53d8f11->leave($__internal_dfbecadacf02fc72e13197f399665da698761714700902d89f7f3c8da53d8f11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9cb55e122b472904b08747ff76529643741b5cad2ba39534c85c44420db37e7c = $this->env->getExtension("native_profiler");
        $__internal_9cb55e122b472904b08747ff76529643741b5cad2ba39534c85c44420db37e7c->enter($__internal_9cb55e122b472904b08747ff76529643741b5cad2ba39534c85c44420db37e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9cb55e122b472904b08747ff76529643741b5cad2ba39534c85c44420db37e7c->leave($__internal_9cb55e122b472904b08747ff76529643741b5cad2ba39534c85c44420db37e7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ee8973948bc8bad001a913c1e8bee3ad9c036441743d75c6da312574a22f6f2 = $this->env->getExtension("native_profiler");
        $__internal_3ee8973948bc8bad001a913c1e8bee3ad9c036441743d75c6da312574a22f6f2->enter($__internal_3ee8973948bc8bad001a913c1e8bee3ad9c036441743d75c6da312574a22f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ee8973948bc8bad001a913c1e8bee3ad9c036441743d75c6da312574a22f6f2->leave($__internal_3ee8973948bc8bad001a913c1e8bee3ad9c036441743d75c6da312574a22f6f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60bb17b98dcc1d9a33939981fcb472b7ba203b40ec356fb1c64db0aece34535d = $this->env->getExtension("native_profiler");
        $__internal_60bb17b98dcc1d9a33939981fcb472b7ba203b40ec356fb1c64db0aece34535d->enter($__internal_60bb17b98dcc1d9a33939981fcb472b7ba203b40ec356fb1c64db0aece34535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60bb17b98dcc1d9a33939981fcb472b7ba203b40ec356fb1c64db0aece34535d->leave($__internal_60bb17b98dcc1d9a33939981fcb472b7ba203b40ec356fb1c64db0aece34535d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
