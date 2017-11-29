<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b276cdbbc63b55b6674798aa4e98c59c65b7f18e146d8932584f99b851ebd93 extends Twig_Template
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
        $__internal_fefef3ad296d771293683ea32d33d5af0fbd6342371527f861b170049b1973f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefef3ad296d771293683ea32d33d5af0fbd6342371527f861b170049b1973f5->enter($__internal_fefef3ad296d771293683ea32d33d5af0fbd6342371527f861b170049b1973f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefef3ad296d771293683ea32d33d5af0fbd6342371527f861b170049b1973f5->leave($__internal_fefef3ad296d771293683ea32d33d5af0fbd6342371527f861b170049b1973f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8064af2bf7e30b3bd65a47f2d32ff11a5f1cecb4fd3f12240a04e761043e616b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8064af2bf7e30b3bd65a47f2d32ff11a5f1cecb4fd3f12240a04e761043e616b->enter($__internal_8064af2bf7e30b3bd65a47f2d32ff11a5f1cecb4fd3f12240a04e761043e616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8064af2bf7e30b3bd65a47f2d32ff11a5f1cecb4fd3f12240a04e761043e616b->leave($__internal_8064af2bf7e30b3bd65a47f2d32ff11a5f1cecb4fd3f12240a04e761043e616b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a628669c1d85039933b207cd90b2dd9ba4c395ae2a0133182b34ca44f6ff8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a628669c1d85039933b207cd90b2dd9ba4c395ae2a0133182b34ca44f6ff8ff->enter($__internal_4a628669c1d85039933b207cd90b2dd9ba4c395ae2a0133182b34ca44f6ff8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a628669c1d85039933b207cd90b2dd9ba4c395ae2a0133182b34ca44f6ff8ff->leave($__internal_4a628669c1d85039933b207cd90b2dd9ba4c395ae2a0133182b34ca44f6ff8ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9116bb8f75d1651d41058ec7b52bdfe98d8793b64e27892325115ed7026a0687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9116bb8f75d1651d41058ec7b52bdfe98d8793b64e27892325115ed7026a0687->enter($__internal_9116bb8f75d1651d41058ec7b52bdfe98d8793b64e27892325115ed7026a0687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9116bb8f75d1651d41058ec7b52bdfe98d8793b64e27892325115ed7026a0687->leave($__internal_9116bb8f75d1651d41058ec7b52bdfe98d8793b64e27892325115ed7026a0687_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/prestashop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
