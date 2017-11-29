<?php

/* PrestaShopBundle:Admin/Module:notifications.html.twig */
class __TwigTemplate_ff36b2f337e31eb09a010b760053289127041da61fe6595c61147e8c0c294a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2013b451bca4b4d6418435cd695e9dcfde5379f9051bd48f440789d31adf3144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2013b451bca4b4d6418435cd695e9dcfde5379f9051bd48f440789d31adf3144->enter($__internal_2013b451bca4b4d6418435cd695e9dcfde5379f9051bd48f440789d31adf3144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2013b451bca4b4d6418435cd695e9dcfde5379f9051bd48f440789d31adf3144->leave($__internal_2013b451bca4b4d6418435cd695e9dcfde5379f9051bd48f440789d31adf3144_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cf26f68a9293d14a7934b2feb1e8c3472dfed61d6b51f9383f16222a6d90827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf26f68a9293d14a7934b2feb1e8c3472dfed61d6b51f9383f16222a6d90827->enter($__internal_9cf26f68a9293d14a7934b2feb1e8c3472dfed61d6b51f9383f16222a6d90827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/module/drop.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/plugins/jquery.pstagger.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9cf26f68a9293d14a7934b2feb1e8c3472dfed61d6b51f9383f16222a6d90827->leave($__internal_9cf26f68a9293d14a7934b2feb1e8c3472dfed61d6b51f9383f16222a6d90827_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31259f4556146cfd4da968107029505f34575c3886f43fb95e1cb4dc1f75646e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31259f4556146cfd4da968107029505f34575c3886f43fb95e1cb4dc1f75646e->enter($__internal_31259f4556146cfd4da968107029505f34575c3886f43fb95e1cb4dc1f75646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_31259f4556146cfd4da968107029505f34575c3886f43fb95e1cb4dc1f75646e->leave($__internal_31259f4556146cfd4da968107029505f34575c3886f43fb95e1cb4dc1f75646e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_5230c26788ac16b9aff5a7389cbed34b792e6aac53f7a7b7c8ecb657691bf518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5230c26788ac16b9aff5a7389cbed34b792e6aac53f7a7b7c8ecb657691bf518->enter($__internal_5230c26788ac16b9aff5a7389cbed34b792e6aac53f7a7b7c8ecb657691bf518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    ";
        // line 43
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 43)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 45)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:notification_kpis.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 47)->display($context);
        // line 48
        echo "    ";
        // line 49
        echo "    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div id=\"module-short-list-configure\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to configure", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_configure", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to configure", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                      data-content=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules require your attention: you need to take some action to ensure they are fully operational.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 58
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 58)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_configure", array()), "display_type" => "list", "id" => "notification")));
        // line 59
        echo "
            <hr class=\"top-menu-separator\">
            <div id=\"module-short-list-update\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% modules to update", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules to update", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                      data-content=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update these modules to enjoy their latest versions.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
                ";
        // line 67
        if (((twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array())) > 1) && (($context["level"] ?? $this->getContext($context, "level")) >= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE")))) {
            // line 68
            echo "                <a class=\"btn btn-primary-reverse pull-right btn-primary-outline light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upgrade All", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
                ";
        }
        // line 70
        echo "            </div>
            ";
        // line 71
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig", "PrestaShopBundle:Admin/Module:notifications.html.twig", 71)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "to_update", array()), "display_type" => "list", "id" => "update", "level" => ($context["level"] ?? $this->getContext($context, "level")))));
        // line 72
        echo "        </div>
    </div>
";
        
        $__internal_5230c26788ac16b9aff5a7389cbed34b792e6aac53f7a7b7c8ecb657691bf518->leave($__internal_5230c26788ac16b9aff5a7389cbed34b792e6aac53f7a7b7c8ecb657691bf518_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  167 => 71,  164 => 70,  158 => 68,  156 => 67,  151 => 65,  147 => 64,  142 => 62,  137 => 59,  135 => 58,  129 => 55,  125 => 54,  120 => 52,  115 => 49,  113 => 48,  110 => 47,  108 => 46,  105 => 45,  103 => 44,  100 => 43,  98 => 42,  92 => 41,  83 => 38,  79 => 37,  75 => 36,  71 => 35,  66 => 34,  60 => 33,  51 => 30,  47 => 29,  42 => 28,  36 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/module/drop.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('themes/default/css/bundle/plugins/jquery.pstagger.css') }}\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
{% endblock %}

{% block content %}
    {# Addons connect modal #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
    {# Contains toolbar-nav for module page #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
    {# Module notification KPI's #}
    {% include 'PrestaShopBundle:Admin/Module/Includes:notification_kpis.html.twig' %}
    {# Actual Page Content #}
    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div id=\"module-short-list-configure\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">{{ '%nbModules% modules to configure'|trans({'%nbModules%' : modules.to_configure|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"{{ \"Modules to configure\"|trans({}, 'Admin.Modules.Feature') }}\"
                      data-content=\"{{ \"These modules require your attention: you need to take some action to ensure they are fully operational.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_notification_configure.html.twig' with { 'modules': modules.to_configure, 'display_type': 'list', id: 'notification'  } %}

            <hr class=\"top-menu-separator\">
            <div id=\"module-short-list-update\" class=\"module-short-list\">
                <span class=\"module-search-result-wording\">{{ '%nbModules% modules to update'|trans({'%nbModules%' : modules.to_update|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                      data-title=\"{{ \"Modules to update\"|trans({}, 'Admin.Modules.Feature') }}\"
                      data-content=\"{{ \"Update these modules to enjoy their latest versions.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
                {% if (modules.to_update|length > 1) and (level >= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE')) %}
                <a class=\"btn btn-primary-reverse pull-right btn-primary-outline light-button module_action_menu_upgrade_all\" href=\"#\" data-confirm_modal=\"module-modal-confirm-upgrade-all\">{{ \"Upgrade All\"|trans({}, 'Admin.Modules.Feature') }}</a>
                {% endif %}
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_notification_update.html.twig' with { 'modules': modules.to_update, 'display_type': 'list', id: 'update', 'level' : level } %}
        </div>
    </div>
{% endblock %}
", "PrestaShopBundle:Admin/Module:notifications.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/notifications.html.twig");
    }
}
