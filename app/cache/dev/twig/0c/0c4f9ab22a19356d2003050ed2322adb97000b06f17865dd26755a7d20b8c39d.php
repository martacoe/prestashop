<?php

/* PrestaShopBundle:Admin\Stock:overview.html.twig */
class __TwigTemplate_a4b3f702112188b55b4c43d0e4148e3f30ca4ad7d97f72ff5507bb3a8fdd9533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Stock:overview.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0caa4149bfe412bee22752ccec4d5fff12d0a3dd1bf986cb11a0bacfc86dc405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caa4149bfe412bee22752ccec4d5fff12d0a3dd1bf986cb11a0bacfc86dc405->enter($__internal_0caa4149bfe412bee22752ccec4d5fff12d0a3dd1bf986cb11a0bacfc86dc405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Stock:overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caa4149bfe412bee22752ccec4d5fff12d0a3dd1bf986cb11a0bacfc86dc405->leave($__internal_0caa4149bfe412bee22752ccec4d5fff12d0a3dd1bf986cb11a0bacfc86dc405_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2fe37bf52b7f836b1f73f40429df4a028171bdbfb3bd492d1f046f6c2ea2092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fe37bf52b7f836b1f73f40429df4a028171bdbfb3bd492d1f046f6c2ea2092->enter($__internal_d2fe37bf52b7f836b1f73f40429df4a028171bdbfb3bd492d1f046f6c2ea2092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
    ";
        // line 29
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 30
            echo "        <div id=\"stock-app\"></div>

    ";
        } else {
            // line 33
            echo "        <div class=\"col-md-12\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't manage your stock in this shop context: select a shop instead of a group of shops.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 39
        echo "
";
        
        $__internal_d2fe37bf52b7f836b1f73f40429df4a028171bdbfb3bd492d1f046f6c2ea2092->leave($__internal_d2fe37bf52b7f836b1f73f40429df4a028171bdbfb3bd492d1f046f6c2ea2092_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d133ddc252fea49a8dca3cc139c3eb24c759571f3bd23f4195dbcaf28355b272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d133ddc252fea49a8dca3cc139c3eb24c759571f3bd23f4195dbcaf28355b272->enter($__internal_d133ddc252fea49a8dca3cc139c3eb24c759571f3bd23f4195dbcaf28355b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "
    ";
        // line 44
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 45
            echo "        ";
            $this->displayParentBlock("javascripts", $context, $blocks);
            echo "

        ";
            // line 47
            $context["productId"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "productId"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "productId"), "method")) : (false));
            // line 48
            echo "        <script>
            var data = {
                baseUrl: '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getBasePath", array(), "method"), "html", null, true);
            echo "',
                catalogUrl: '";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_product_catalog");
            echo "',
                stockUrl: '";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_stock_overview");
            echo "',
                apiStockUrl: '";
            // line 53
            echo twig_escape_filter($this->env, ((($context["productId"] ?? $this->getContext($context, "productId"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_product_combinations", array("productId" => ($context["productId"] ?? $this->getContext($context, "productId"))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_products"))), "html", null, true);
            echo "',
                apiMovementsUrl: '";
            // line 54
            echo twig_escape_filter($this->env, ((($context["productId"] ?? $this->getContext($context, "productId"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_product_list_movements", array("productId" => ($context["productId"] ?? $this->getContext($context, "productId"))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements"))), "html", null, true);
            echo "',
                employeesUrl: '";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements_employees");
            echo "',
                suppliersUrl: '";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_suppliers");
            echo "',
                categoriesUrl: '";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_categories");
            echo "',
                movementsTypesUrl: '";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_stock_list_movements_types", array("grouped" => true));
            echo "',
                translationUrl: '";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("api_i18n_translations_list", array("page" => "stock"));
            echo "',
                locale: '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "'
            }
        </script>

        ";
            // line 64
            if (($context["webpack_server"] ?? $this->getContext($context, "webpack_server"))) {
                // line 65
                echo "            <script src=\"http://localhost:8080/stock.bundle.js\"></script>
        ";
            } else {
                // line 67
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/stock.bundle.js"), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 69
            echo "    ";
        }
        // line 70
        echo "
";
        
        $__internal_d133ddc252fea49a8dca3cc139c3eb24c759571f3bd23f4195dbcaf28355b272->leave($__internal_d133ddc252fea49a8dca3cc139c3eb24c759571f3bd23f4195dbcaf28355b272_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Stock:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 70,  152 => 69,  146 => 67,  142 => 65,  140 => 64,  133 => 60,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  113 => 55,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  93 => 50,  89 => 48,  87 => 47,  81 => 45,  79 => 44,  76 => 43,  70 => 42,  62 => 39,  55 => 35,  51 => 33,  46 => 30,  44 => 29,  41 => 28,  35 => 27,  11 => 25,);
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

{% block content %}

    {% if is_shop_context %}
        <div id=\"stock-app\"></div>

    {% else %}
        <div class=\"col-md-12\">
            <div class=\"alert alert-danger\" role=\"alert\">
                <i class=\"material-icons\">info_outline</i><p class=\"alert-text\">{{ 'You can\\'t manage your stock in this shop context: select a shop instead of a group of shops.'|trans({}, 'Admin.Catalog.Notification') }}</p>
            </div>
        </div>
    {% endif %}

{% endblock %}

{% block javascripts %}

    {% if is_shop_context %}
        {{ parent() }}

        {% set productId = app.request.query.get('productId') ? app.request.query.get('productId') : false %}
        <script>
            var data = {
                baseUrl: '{{ app.request.getBasePath() }}',
                catalogUrl: '{{ url('admin_product_catalog') }}',
                stockUrl: '{{ url('admin_stock_overview') }}',
                apiStockUrl: '{{ productId ? url('api_stock_list_product_combinations', {'productId' : productId}) : url('api_stock_list_products') }}',
                apiMovementsUrl: '{{ productId ? url('api_stock_product_list_movements', {'productId' : productId}) : url('api_stock_list_movements') }}',
                employeesUrl: '{{ url('api_stock_list_movements_employees') }}',
                suppliersUrl: '{{ url('api_stock_list_suppliers') }}',
                categoriesUrl: '{{ url('api_stock_list_categories') }}',
                movementsTypesUrl: '{{ url('api_stock_list_movements_types', {'grouped': true}) }}',
                translationUrl: '{{ url('api_i18n_translations_list', {'page' : 'stock'}) }}',
                locale: '{{ app.request.locale }}'
            }
        </script>

        {% if webpack_server %}
            <script src=\"http://localhost:8080/stock.bundle.js\"></script>
        {% else %}
            <script src=\"{{ asset('themes/new-theme/public/stock.bundle.js') }}\"></script>
        {% endif %}
    {% endif %}

{% endblock %}
", "PrestaShopBundle:Admin\\Stock:overview.html.twig", "/Applications/MAMP/htdocs/prestashop/src/PrestaShopBundle/Resources/views/Admin/Stock/overview.html.twig");
    }
}
