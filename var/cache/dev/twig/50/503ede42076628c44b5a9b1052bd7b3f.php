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

/* layouts/landing.html.twig */
class __TwigTemplate_7f65ac71df1cfd182403b765e315a733 extends Template
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
            'html_attribute' => [$this, 'block_html_attribute'],
            'css' => [$this, 'block_css'],
            'body_attribute' => [$this, 'block_body_attribute'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/landing.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" ";
        // line 2
        yield from $this->unwrap()->yieldBlock('html_attribute', $context, $blocks);
        yield ">
  
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ovro - Personal Portfolio PHP Template</title>

    <!--=====FAB ICON=======-->
    <link rel=\"shortcut icon\" href=\"/img/logo/fav-logo1.png\" type=\"image/x-icon\">

    <!--===== CSS LINK =======-->
    <link rel=\"stylesheet\" href=\"/css/plugins/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/aos.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/owlcarousel.min.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/sidebar.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/slick-slider.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <!--=====  JS SCRIPT LINK =======-->
    <script src=\"/js/plugins/jquery-3-7-1.min.js\"></script>

    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 27
        yield "
</head>

<body ";
        // line 30
        yield from $this->unwrap()->yieldBlock('body_attribute', $context, $blocks);
        yield ">

    <!--===== PRELOADER STARTS =======-->
    <div id=\"preloader\">
      <div id=\"loader\"></div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <div class=\"procus-cursor\" style=\"transform: translate3d(calc(-50% + 1919px), calc(-50% + 787px), 0px);\"></div>
    <div class=\"procus-cursor2\" style=\"left: 551px; top: 918px;\"></div>

    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/progress.html.twig");
        yield "
    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/sidebar.html.twig");
        yield "
    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/navbar.html.twig");
        yield "

        
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 47
        yield "
    ";
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "partials/popup.html.twig");
        yield "

    ";
        // line 50
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 51
        yield "
  <!--===== JS SCRIPT LINK =======-->
  <script src=\"/js/plugins/bootstrap.min.js\"></script>
  <script src=\"/js/plugins/fontawesome.js\"></script>
  <script src=\"/js/plugins/aos.js\"></script>
  <script src=\"/js/plugins/counter.js\"></script>
  <script src=\"/js/plugins/sidebar.js\"></script>
  <script src=\"/js/plugins/magnific-popup.js\"></script>
  <script src=\"/js/plugins/owlcarousel.min.js\"></script>
  <script src=\"/js/plugins/nice-select.js\"></script>
  <script src=\"/js/plugins/waypoints.js\"></script>
  <script src=\"/js/plugins/slick-slider.js\"></script>
  <script src=\"/js/plugins/gsap.min.js\"></script>
  <script src=\"/js/plugins/ScrollTrigger.min.js\"></script>
  <script src=\"/js/plugins/Splitetext.js\"></script>
  <script src=\"/js/plugins/SmoothScroll.js\"></script>
  <script src=\"/js/plugins/parallax.js\"></script>
  <script src=\"/js/main.js\"></script>

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_html_attribute(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_attribute"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_attribute"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attribute(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attribute"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attribute"));

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/landing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  253 => 50,  231 => 46,  208 => 30,  186 => 26,  163 => 2,  130 => 51,  128 => 50,  123 => 48,  120 => 47,  118 => 46,  112 => 43,  108 => 42,  104 => 41,  90 => 30,  85 => 27,  83 => 26,  56 => 2,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" {% block html_attribute %} {% endblock %}>
  
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Ovro - Personal Portfolio PHP Template</title>

    <!--=====FAB ICON=======-->
    <link rel=\"shortcut icon\" href=\"/img/logo/fav-logo1.png\" type=\"image/x-icon\">

    <!--===== CSS LINK =======-->
    <link rel=\"stylesheet\" href=\"/css/plugins/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/aos.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/owlcarousel.min.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/sidebar.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/slick-slider.css\">
    <link rel=\"stylesheet\" href=\"/css/plugins/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <!--=====  JS SCRIPT LINK =======-->
    <script src=\"/js/plugins/jquery-3-7-1.min.js\"></script>

    {% block css %}{% endblock %}

</head>

<body {% block body_attribute %} {% endblock %}>

    <!--===== PRELOADER STARTS =======-->
    <div id=\"preloader\">
      <div id=\"loader\"></div>
    </div>
    <!--===== PRELOADER ENDS =======-->

    <div class=\"procus-cursor\" style=\"transform: translate3d(calc(-50% + 1919px), calc(-50% + 787px), 0px);\"></div>
    <div class=\"procus-cursor2\" style=\"left: 551px; top: 918px;\"></div>

    {{ include('partials/progress.html.twig') }}
    {{ include('partials/sidebar.html.twig') }}
    {{ include('partials/navbar.html.twig') }}

        
    {% block content %}{% endblock %}

    {{ include('partials/popup.html.twig') }}

    {% block scripts %}{% endblock %}

  <!--===== JS SCRIPT LINK =======-->
  <script src=\"/js/plugins/bootstrap.min.js\"></script>
  <script src=\"/js/plugins/fontawesome.js\"></script>
  <script src=\"/js/plugins/aos.js\"></script>
  <script src=\"/js/plugins/counter.js\"></script>
  <script src=\"/js/plugins/sidebar.js\"></script>
  <script src=\"/js/plugins/magnific-popup.js\"></script>
  <script src=\"/js/plugins/owlcarousel.min.js\"></script>
  <script src=\"/js/plugins/nice-select.js\"></script>
  <script src=\"/js/plugins/waypoints.js\"></script>
  <script src=\"/js/plugins/slick-slider.js\"></script>
  <script src=\"/js/plugins/gsap.min.js\"></script>
  <script src=\"/js/plugins/ScrollTrigger.min.js\"></script>
  <script src=\"/js/plugins/Splitetext.js\"></script>
  <script src=\"/js/plugins/SmoothScroll.js\"></script>
  <script src=\"/js/plugins/parallax.js\"></script>
  <script src=\"/js/main.js\"></script>

</body>

</html>
", "layouts/landing.html.twig", "/home/nikunj/Desktop/WIP/Ovro_symfony/Ovro/templates/layouts/landing.html.twig");
    }
}
