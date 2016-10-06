<?php

/* base.html.twig */
class __TwigTemplate_b683f3df18133f7870d661ceb14884f97f6e9298bc704cd66d5d0dabe17d8317 extends Twig_Template
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
        $__internal_75d2d1c8c28a1f14eca59038e72c05c889a691c60367c74f6c288a09da4d2e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d2d1c8c28a1f14eca59038e72c05c889a691c60367c74f6c288a09da4d2e30->enter($__internal_75d2d1c8c28a1f14eca59038e72c05c889a691c60367c74f6c288a09da4d2e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_75d2d1c8c28a1f14eca59038e72c05c889a691c60367c74f6c288a09da4d2e30->leave($__internal_75d2d1c8c28a1f14eca59038e72c05c889a691c60367c74f6c288a09da4d2e30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2384404a9ccb68fd9cd44867f13b3589a6f55d84887f4d138152f85db77ae9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2384404a9ccb68fd9cd44867f13b3589a6f55d84887f4d138152f85db77ae9fa->enter($__internal_2384404a9ccb68fd9cd44867f13b3589a6f55d84887f4d138152f85db77ae9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2384404a9ccb68fd9cd44867f13b3589a6f55d84887f4d138152f85db77ae9fa->leave($__internal_2384404a9ccb68fd9cd44867f13b3589a6f55d84887f4d138152f85db77ae9fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8c631f5bb0f9fc00b29e8772133873bdf1d521c41964707d7c3485db34e99d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c631f5bb0f9fc00b29e8772133873bdf1d521c41964707d7c3485db34e99d6->enter($__internal_c8c631f5bb0f9fc00b29e8772133873bdf1d521c41964707d7c3485db34e99d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c8c631f5bb0f9fc00b29e8772133873bdf1d521c41964707d7c3485db34e99d6->leave($__internal_c8c631f5bb0f9fc00b29e8772133873bdf1d521c41964707d7c3485db34e99d6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1516159cdfe16bfa95a9877e4e60f4531a526412cdaabbc5904e34d7ef1fdf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1516159cdfe16bfa95a9877e4e60f4531a526412cdaabbc5904e34d7ef1fdf5c->enter($__internal_1516159cdfe16bfa95a9877e4e60f4531a526412cdaabbc5904e34d7ef1fdf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1516159cdfe16bfa95a9877e4e60f4531a526412cdaabbc5904e34d7ef1fdf5c->leave($__internal_1516159cdfe16bfa95a9877e4e60f4531a526412cdaabbc5904e34d7ef1fdf5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8651fb761ce2e557844391360e1e2e7a6759859d8c8b90ca2507ffbc92a546c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8651fb761ce2e557844391360e1e2e7a6759859d8c8b90ca2507ffbc92a546c2->enter($__internal_8651fb761ce2e557844391360e1e2e7a6759859d8c8b90ca2507ffbc92a546c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8651fb761ce2e557844391360e1e2e7a6759859d8c8b90ca2507ffbc92a546c2->leave($__internal_8651fb761ce2e557844391360e1e2e7a6759859d8c8b90ca2507ffbc92a546c2_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
