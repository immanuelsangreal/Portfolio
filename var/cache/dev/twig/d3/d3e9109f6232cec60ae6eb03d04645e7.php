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

/* partials/sidebar.html.twig */
class __TwigTemplate_512f35de4e4612d65939733b66534f90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        yield "  <!--===== SIDEBAR STARTS=======-->
  <div class=\"header-site-icon\">
    <div class=\"slide-bar slide-bar1\">
      <div class=\"sidebar-info\">
        <div class=\"sidebar-logo\">
          <a href=\"index1\">
            <img src=\"/img/logo/logo2.png\" alt=\"logo\">
          </a>
          <div class=\"close-mobile-menu\">
            <a><i class=\"fa-solid fa-xmark\"></i></a>
          </div>
        </div>
        <div class=\"sidebar-content\">
          <ul>
            <li><a href=\"#list-item-1\">Home</a></li>
            <li><a href=\"#list-item-2\">About Us</a></li>
            <li><a href=\"#list-item-3\">service</a></li>
            <li><a href=\"#list-item-4\">Skill</a></li>
            <li><a href=\"#list-item-5\">Portfolio</a></li>
            <li><a href=\"#list-item-6\">Testimonial</a></li>
            <li><a href=\"#list-item-7\">Blogs</a></li>
            <li><a href=\"#list-item-8\">Contact</a></li>
          </ul>
        </div>
        <div class=\"space32\"></div>
        <div class=\"space16\"></div>
        <div class=\"btn-area\">
          <a href=\"#\" class=\"vl-btn1\">Get in touch now <img src=\"/img/icons/mail1.svg\" alt=\"\"></a>
        </div>
        <div class=\"space40\"></div>
        <div class=\"social-link-area\">
          <h3 class=\"sidebar-heading\">Social Links</h3>
          <ul>
            <li>
              <a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a>
            </li>
          </ul>
        </div>
        <div class=\"space40\"></div>
        <div class=\"form-area\">
          <h3>Subscribe To Newsletter</h3>
          <form>
            <input type=\"text\" placeholder=\"Email Address*\">
            <button type=\"submit\" class=\"vl-btn1\">subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--===== SIDEBAR ENDS STARTS=======-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
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
        return new Source("  <!--===== SIDEBAR STARTS=======-->
  <div class=\"header-site-icon\">
    <div class=\"slide-bar slide-bar1\">
      <div class=\"sidebar-info\">
        <div class=\"sidebar-logo\">
          <a href=\"index1\">
            <img src=\"/img/logo/logo2.png\" alt=\"logo\">
          </a>
          <div class=\"close-mobile-menu\">
            <a><i class=\"fa-solid fa-xmark\"></i></a>
          </div>
        </div>
        <div class=\"sidebar-content\">
          <ul>
            <li><a href=\"#list-item-1\">Home</a></li>
            <li><a href=\"#list-item-2\">About Us</a></li>
            <li><a href=\"#list-item-3\">service</a></li>
            <li><a href=\"#list-item-4\">Skill</a></li>
            <li><a href=\"#list-item-5\">Portfolio</a></li>
            <li><a href=\"#list-item-6\">Testimonial</a></li>
            <li><a href=\"#list-item-7\">Blogs</a></li>
            <li><a href=\"#list-item-8\">Contact</a></li>
          </ul>
        </div>
        <div class=\"space32\"></div>
        <div class=\"space16\"></div>
        <div class=\"btn-area\">
          <a href=\"#\" class=\"vl-btn1\">Get in touch now <img src=\"/img/icons/mail1.svg\" alt=\"\"></a>
        </div>
        <div class=\"space40\"></div>
        <div class=\"social-link-area\">
          <h3 class=\"sidebar-heading\">Social Links</h3>
          <ul>
            <li>
              <a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
              <a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a>
            </li>
          </ul>
        </div>
        <div class=\"space40\"></div>
        <div class=\"form-area\">
          <h3>Subscribe To Newsletter</h3>
          <form>
            <input type=\"text\" placeholder=\"Email Address*\">
            <button type=\"submit\" class=\"vl-btn1\">subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--===== SIDEBAR ENDS STARTS=======-->", "partials/sidebar.html.twig", "/home/nikunj/Desktop/WIP/Ovro_symfony/Ovro/templates/partials/sidebar.html.twig");
    }
}
