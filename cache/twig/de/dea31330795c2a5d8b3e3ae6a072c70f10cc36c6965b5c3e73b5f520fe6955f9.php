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

/* partials/footer.html.twig */
class __TwigTemplate_f08263178ab48e3f386bc20b858f8304f82f05eb6b1fdc1a90ebfef119e935a1 extends \Twig\Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <ul class=\"social_icons clearfix\">
                     ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                         <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\"><img src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/img/";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\" alt=\"\"></a></li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                </ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footerlogo footercol\">
                <a class=\"smalllogo2 logo\" href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/img/logofooter.png\" alt=\"\"></a>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <p class=\"footerpriv\">&copy; 2013 &bull; <a class=\"privacylink\" href=\"";
        // line 15
        echo ($context["base_url_absolute"] ?? null);
        echo "/privacy\">Privacy policy</a></p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  59 => 12,  54 => 9,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <ul class=\"social_icons clearfix\">
                     {% for item  in site.social %}
                         <li><a href=\"{{ item.url }}\"><img src=\"{{ theme_url }}/img/{{ item.icon }}\" alt=\"\"></a></li>
                     {% endfor %}
                </ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footerlogo footercol\">
                <a class=\"smalllogo2 logo\" href=\"{{ base_url_absolute }}\"><img src=\"{{ theme_url }}/img/logofooter.png\" alt=\"\"></a>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <p class=\"footerpriv\">&copy; 2013 &bull; <a class=\"privacylink\" href=\"{{ base_url_absolute }}/privacy\">Privacy policy</a></p>
            </div>
        </div>
    </div>
</footer>", "partials/footer.html.twig", "/home/litamua1/public_html/user/themes/photographer/templates/partials/footer.html.twig");
    }
}
