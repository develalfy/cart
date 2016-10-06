<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b02aeee5d5112e56561c1e38300c67751446de70959f340f417a9f4c586ce69 extends Twig_Template
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
        $__internal_ecdf646628e197280a324930b984b704d328b76175e0e3e36bcc455d9f2d117e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdf646628e197280a324930b984b704d328b76175e0e3e36bcc455d9f2d117e->enter($__internal_ecdf646628e197280a324930b984b704d328b76175e0e3e36bcc455d9f2d117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecdf646628e197280a324930b984b704d328b76175e0e3e36bcc455d9f2d117e->leave($__internal_ecdf646628e197280a324930b984b704d328b76175e0e3e36bcc455d9f2d117e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a0ba7e2889d9add50784b0aecd2b4aa8ca7bd513559f321a4ffc9ec3641df04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ba7e2889d9add50784b0aecd2b4aa8ca7bd513559f321a4ffc9ec3641df04->enter($__internal_4a0ba7e2889d9add50784b0aecd2b4aa8ca7bd513559f321a4ffc9ec3641df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a0ba7e2889d9add50784b0aecd2b4aa8ca7bd513559f321a4ffc9ec3641df04->leave($__internal_4a0ba7e2889d9add50784b0aecd2b4aa8ca7bd513559f321a4ffc9ec3641df04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7253d8afcbe0126561b5c27385004814429c162ca0619708faf26553b6cfb13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7253d8afcbe0126561b5c27385004814429c162ca0619708faf26553b6cfb13c->enter($__internal_7253d8afcbe0126561b5c27385004814429c162ca0619708faf26553b6cfb13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7253d8afcbe0126561b5c27385004814429c162ca0619708faf26553b6cfb13c->leave($__internal_7253d8afcbe0126561b5c27385004814429c162ca0619708faf26553b6cfb13c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d9f3b2dec60c728e94ef05a8f337bc9ac399996abf989f19276b76518783165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9f3b2dec60c728e94ef05a8f337bc9ac399996abf989f19276b76518783165->enter($__internal_3d9f3b2dec60c728e94ef05a8f337bc9ac399996abf989f19276b76518783165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d9f3b2dec60c728e94ef05a8f337bc9ac399996abf989f19276b76518783165->leave($__internal_3d9f3b2dec60c728e94ef05a8f337bc9ac399996abf989f19276b76518783165_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
