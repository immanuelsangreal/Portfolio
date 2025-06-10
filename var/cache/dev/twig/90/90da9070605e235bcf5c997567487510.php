<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/navbar.html.twig */
class __TwigTemplate_2f0aa9171a9e012699ebca81ccd5dee9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        yield "  <!--=====HEADER START=======-->
  <header>
    <div class=\"header-area homepage1 header header-sticky \" id=\"header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"header-elements\">
              <div class=\"site-logo\">
                <a href=\"index1\"><img src=\"/img/logo/logo1.png\" alt=\"\"></a>
              </div>
              <div class=\"btn-area d-lg-flex\">
                <div class=\"theme-toggle-container\">
                  <label class=\"theme-switch\">
                    <input type=\"checkbox\" id=\"theme-toggle\">
                    <span class=\"slider\">
                      <i class=\"fas fa-moon icon moon-icon\"></i>
                      <i class=\"fas fa-sun icon sun-icon\"></i>
                    </span>
                  </label>
                </div>
                <a href=\"#\" class=\"vl-btn1\">HIRE ME <span><img src=\"/img/icons/mail1.svg\" alt=\"\"></span></a>
                <button class=\"hamburger_menu\"><img src=\"/img/icons/bars-icons1.svg\" alt=\"\"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("  <!--=====HEADER START=======-->
  <header>
    <div class=\"header-area homepage1 header header-sticky \" id=\"header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"header-elements\">
              <div class=\"site-logo\">
                <a href=\"index1\"><img src=\"/img/logo/logo1.png\" alt=\"\"></a>
              </div>
              <div class=\"btn-area d-lg-flex\">
                <div class=\"theme-toggle-container\">
                  <label class=\"theme-switch\">
                    <input type=\"checkbox\" id=\"theme-toggle\">
                    <span class=\"slider\">
                      <i class=\"fas fa-moon icon moon-icon\"></i>
                      <i class=\"fas fa-sun icon sun-icon\"></i>
                    </span>
                  </label>
                </div>
                <a href=\"#\" class=\"vl-btn1\">HIRE ME <span><img src=\"/img/icons/mail1.svg\" alt=\"\"></span></a>
                <button class=\"hamburger_menu\"><img src=\"/img/icons/bars-icons1.svg\" alt=\"\"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->", "partials/navbar.html.twig", "/home/nikunj/Desktop/WIP/Ovro_symfony/Ovro/templates/partials/navbar.html.twig");
    }
}
