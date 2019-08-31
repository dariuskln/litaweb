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

/* modular/welcome.html.twig */
class __TwigTemplate_110adf41967c1662d229cc6eb8ce4a22751c6215e53564e0d99e0cf8905908ee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</p>
        <p class=\"title2\">";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</p>
        ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 7
            echo "            <a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">{{ page.header.title }}</p>
        <p class=\"title2\">{{ page.header.description }}</p>
        {{ content }}
        {% for button in page.header.buttons %}
            <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
        {% endfor %}            
    </div>
</div>", "modular/welcome.html.twig", "/home/litamua1/public_html/user/themes/photographer/templates/modular/welcome.html.twig");
    }
}
