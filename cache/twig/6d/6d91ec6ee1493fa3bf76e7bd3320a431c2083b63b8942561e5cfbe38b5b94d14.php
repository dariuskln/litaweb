<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* location.html.twig */
class __TwigTemplate_90fafaa79f2584cafd830095ff45a63e4c2da71f9040a8e466a6eb27b26f4950 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "location.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"content\">
        <div class=\"row_8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 gmap\">
                        <div class=\"map\">";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "map", []);
        echo "</div>
                  </div>  
              </div> 
              <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 address\">
                    ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-8 address\">
                    <h2>";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title2", []);
        echo "</h2>
                    ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simple_form", []), "enabled", [])) {
            // line 19
            echo "                        ";
            $context["simple_form_config"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "photographer", []), "simple_form", [])));
            // line 20
            echo "                        ";
            echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), [($context["simple_form_config"] ?? null)]);
            echo "
                    ";
        }
        // line 22
        echo "            </div>
        </div> 
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 20,  69 => 19,  67 => 18,  63 => 17,  57 => 14,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <div id=\"content\">
        <div class=\"row_8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 gmap\">
                        <div class=\"map\">{{ page.header.map }}</div>
                  </div>  
              </div> 
              <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 address\">
                    {{ page.content }}
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-8 address\">
                    <h2>{{ page.header.title2 }}</h2>
                    {% if config.plugins.simple_form.enabled %}
                        {% set simple_form_config = page.header.simple_form ?: config.themes.photographer.simple_form %}
                        {{ simple_form(simple_form_config) }}
                    {% endif %}
            </div>
        </div> 
    </div>
</div>
</div>
{% endblock %}", "location.html.twig", "/home/litamua1/public_html/user/themes/photographer/templates/location.html.twig");
    }
}
