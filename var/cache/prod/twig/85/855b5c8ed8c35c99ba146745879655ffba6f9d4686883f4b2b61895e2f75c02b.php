<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Product/ProductPage/Panels/seo.html.twig */
class __TwigTemplate_2bb1cd1f916f4589eb54d69afedeb0e9274bdf453493f5f97712e7c4f8389aee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
  <div class=\"container-fluid\">
    ";
        // line 27
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_seo.html.twig", ["seoForm" =>         // line 28
($context["seoForm"] ?? null), "productId" =>         // line 29
($context["productId"] ?? null)]);
        // line 31
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 31,  43 => 29,  42 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Panels/seo.html.twig", "C:\\xampp\\htdocs\\prestashopDemo\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Panels\\seo.html.twig");
    }
}
