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

/* index.html.twig */
class __TwigTemplate_9c5959857bd45045e5e0e852c4c1d2c6 extends Template
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

        $this->blocks = [
            'body_attribute' => [$this, 'block_body_attribute'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/landing.html.twig", "index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "  class=\"body1\"
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "  <!-- ===== MAIN AREA STARTS ======= -->
  <div class=\"preview-header-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-10 m-auto\">
          <div class=\"heading1 text-center\">
            <h5>VERSION 1.0</h5>
            <div class=\"space20\"></div>
            <h2 class=\"head\" data-aos=\"fade-up\" data-aos-duration=\"1000\">Personal Portfolio <span>One Page</span> HTML5 Template</h2>
          </div>
          <div class=\"space80 d-lg-block d-none\"></div>
          <div class=\"space40 d-lg-none d-block\"></div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-12 m-auto\">
          <div class=\"images-area\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"img1\">
              <a href=\"index1\" target=\"_blank\"><img src=\"/img/all-images/hero/preview-img1.png\" alt=\"\" /></a>
            </div>
            <div class=\"space32\"></div>
            <div class=\"text text-center\">
              <a href=\"index1\" target=\"_blank\">Main Demo</a>
            </div>
          </div>
          <div class=\"space100 d-lg-block d-none\"></div>
          <div class=\"space50 d-lg-none d-block\"></div>
          <div class=\"row\">
            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index2\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video1.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index2\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index2\" target=\"_blank\">Water Effect</a>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index3\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video2.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index3\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index3\" target=\"_blank\">Particles Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index4\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video3.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index4\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index4\" target=\"_blank\">Noise Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index5\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video4.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index5\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index5\" target=\"_blank\">3D Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index6\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video5.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index6\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index6\" target=\"_blank\">Earth Line Sphere</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index7\" target=\"_blank\"><img src=\"/img/all-images/hero/preview-img2.png\" alt=\"\" /></a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index7\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index7\" target=\"_blank\">Solid Color</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"space30\"></div>
          <div class=\"footer-area2\">
            <p class=\"text-center\">© 2024 OVRO. All Rights Reserved.</p>
          </div>
          <div class=\"space32\"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== MAIN AREA STARTS ======= -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/landing.html.twig' %}

{% block body_attribute %}
  class=\"body1\"
{% endblock %}

{% block content %}
  <!-- ===== MAIN AREA STARTS ======= -->
  <div class=\"preview-header-area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-10 m-auto\">
          <div class=\"heading1 text-center\">
            <h5>VERSION 1.0</h5>
            <div class=\"space20\"></div>
            <h2 class=\"head\" data-aos=\"fade-up\" data-aos-duration=\"1000\">Personal Portfolio <span>One Page</span> HTML5 Template</h2>
          </div>
          <div class=\"space80 d-lg-block d-none\"></div>
          <div class=\"space40 d-lg-none d-block\"></div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-12 m-auto\">
          <div class=\"images-area\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
            <div class=\"img1\">
              <a href=\"index1\" target=\"_blank\"><img src=\"/img/all-images/hero/preview-img1.png\" alt=\"\" /></a>
            </div>
            <div class=\"space32\"></div>
            <div class=\"text text-center\">
              <a href=\"index1\" target=\"_blank\">Main Demo</a>
            </div>
          </div>
          <div class=\"space100 d-lg-block d-none\"></div>
          <div class=\"space50 d-lg-none d-block\"></div>
          <div class=\"row\">
            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index2\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video1.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index2\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index2\" target=\"_blank\">Water Effect</a>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index3\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video2.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index3\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index3\" target=\"_blank\">Particles Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index4\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video3.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index4\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index4\" target=\"_blank\">Noise Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index5\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video4.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index5\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index5\" target=\"_blank\">3D Effect</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index6\" target=\"_blank\">
                    <video muted=\"\" autoplay=\"\" loop=\"\">
                      <source src=\"/img/video/video5.mp4\" type=\"video/mp4\" />
                    </video>
                  </a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index6\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index6\" target=\"_blank\">Earth Line Sphere</a>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-duration=\"1000\">
              <div class=\"images-area2\">
                <div class=\"img1\">
                  <a href=\"index7\" target=\"_blank\"><img src=\"/img/all-images/hero/preview-img2.png\" alt=\"\" /></a>
                </div>
                <div class=\"btn-area1\">
                  <a href=\"index7\" target=\"_blank\" class=\"vl-btn1 m-0\">VIEW DEMO</a>
                </div>
                <div class=\"space32\"></div>
                <div class=\"text text-center\">
                  <a href=\"index7\" target=\"_blank\">Solid Color</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"space30\"></div>
          <div class=\"footer-area2\">
            <p class=\"text-center\">© 2024 OVRO. All Rights Reserved.</p>
          </div>
          <div class=\"space32\"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== MAIN AREA STARTS ======= -->
{% endblock %}
", "index.html.twig", "/home/nikunj/Desktop/WIP/Ovro_symfony/Ovro/templates/index.html.twig");
    }
}
