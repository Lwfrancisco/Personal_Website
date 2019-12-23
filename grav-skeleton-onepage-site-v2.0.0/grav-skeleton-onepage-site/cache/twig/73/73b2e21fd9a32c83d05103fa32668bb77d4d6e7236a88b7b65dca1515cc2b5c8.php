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
class __TwigTemplate_e0fb81609eb2568d13157094a6875526db024a45e142336fe3d85aadfc5f3829 extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p>
            Built with <a href=\"http://getgrav.org\">Grav</a> by <a href=\"https://trilby.media\">Trilby Media</a>.
            Icons supplied by <a href=\"https://icons8.com/line-awesome\">Line Awesome</a>.
        </p>
    </section>
</section>
";
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
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p>
            Built with <a href=\"http://getgrav.org\">Grav</a> by <a href=\"https://trilby.media\">Trilby Media</a>.
            Icons supplied by <a href=\"https://icons8.com/line-awesome\">Line Awesome</a>.
        </p>
    </section>
</section>
", "partials/footer.html.twig", "/home/logan/workspace/GitHub/Personal_Website/My_Personal_Website/grav-skeleton-onepage-site-v2.0.0/grav-skeleton-onepage-site/user/themes/quark/templates/partials/footer.html.twig");
    }
}
