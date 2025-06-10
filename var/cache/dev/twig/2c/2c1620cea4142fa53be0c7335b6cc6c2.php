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

/* partials/popup.html.twig */
class __TwigTemplate_56df494592ee1a06dd6cb46e0f1a5bda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/popup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/popup.html.twig"));

        // line 1
        yield "  <!--===== POPUP STARTS=======-->
  <div class=\"custom-model-main\">
    <div class=\"custom-model-inner\">
      <div class=\"close-btn\">×</div>
      <div class=\"custom-model-wrap\">
        <div class=\"pop-up-content-wrap\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"opend-section\">
                <div class=\"row\">
                  <div class=\"col-lg-7\">
                    <div class=\"boxes-area\">
                      <div class=\"img1\">
                        <img src=\"/img/all-images/portfolio/portfolio-img1.png\" alt=\"\">
                      </div>
                      <div class=\"content\">
                        <div class=\"tags-area\">
                          <a href=\"#\">23 April 2024</a>
                          <a href=\"#\">Alex Ross</a>
                        </div>
                        <a href=\"#\">Crafting Compelling Designs and Strategic Marketing: A Creative Journey Unveiled</a>
                        <p>In today's fast-paced digital landscape, the intersection of design and marketing has become
                          increasingly vital for businesses aiming to best captivate audiences and drive success.
                          Crafting compelling designs.</p>
                        <p class=\"pera\">Psychology and market trends. Through strategic marketing, these an designs are
                          brought to life, leveraging data-driven insights innovative.</p>
                        <div class=\"btn-area1\">
                          <a href=\"#\" class=\"vl-btn1\">Get in touch now</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-lg-5\">
                    <div class=\"contact-from-area\" data-aos=\"flip-right\" data-aos-duration=\"1000\">
                      <h3>Leave A Message</h3>
                      <form action=\"https://api.web3forms.com/submit\" method=\"POST\">
                        <input type=\"hidden\" name=\"access_key\" value=\"0cd32fff-eda2-4da3-be43-37d47fbb396b\">

                        <div class=\"input\">
                          <input type=\"text\" placeholder=\"Full Name\">
                        </div>
                        <div class=\"input\">
                          <input type=\"number\" placeholder=\"Phone Number\" required>
                        </div>
                        <div class=\"input\">
                          <input type=\"email\" placeholder=\"Email Address\" required>
                        </div>
                        <div class=\"input\">
                          <select name=\"country\" id=\"country\" class=\"country-area nice-select6\">
                            <option value=\"1\" data-display=\"Service Type\">Service Type</option>
                            <option value=\"\">Belgium</option>
                            <option value=\"\">Brezil</option>
                            <option value=\"\">Argentina</option>
                            <option value=\"\">Bangladesh</option>
                            <option value=\"\">Germany</option>
                          </select>
                        </div>
                        <div class=\"input\">
                          <textarea placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"space32\"></div>
                        <div class=\"btn-area text-end\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                          <button type=\"submit\" class=\"vl-btn1\">submit now</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"bg-overlay\"></div>
  </div>
  <!--===== POPUP ENDS =======-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/popup.html.twig";
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
        return new Source("  <!--===== POPUP STARTS=======-->
  <div class=\"custom-model-main\">
    <div class=\"custom-model-inner\">
      <div class=\"close-btn\">×</div>
      <div class=\"custom-model-wrap\">
        <div class=\"pop-up-content-wrap\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"opend-section\">
                <div class=\"row\">
                  <div class=\"col-lg-7\">
                    <div class=\"boxes-area\">
                      <div class=\"img1\">
                        <img src=\"/img/all-images/portfolio/portfolio-img1.png\" alt=\"\">
                      </div>
                      <div class=\"content\">
                        <div class=\"tags-area\">
                          <a href=\"#\">23 April 2024</a>
                          <a href=\"#\">Alex Ross</a>
                        </div>
                        <a href=\"#\">Crafting Compelling Designs and Strategic Marketing: A Creative Journey Unveiled</a>
                        <p>In today's fast-paced digital landscape, the intersection of design and marketing has become
                          increasingly vital for businesses aiming to best captivate audiences and drive success.
                          Crafting compelling designs.</p>
                        <p class=\"pera\">Psychology and market trends. Through strategic marketing, these an designs are
                          brought to life, leveraging data-driven insights innovative.</p>
                        <div class=\"btn-area1\">
                          <a href=\"#\" class=\"vl-btn1\">Get in touch now</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-lg-5\">
                    <div class=\"contact-from-area\" data-aos=\"flip-right\" data-aos-duration=\"1000\">
                      <h3>Leave A Message</h3>
                      <form action=\"https://api.web3forms.com/submit\" method=\"POST\">
                        <input type=\"hidden\" name=\"access_key\" value=\"0cd32fff-eda2-4da3-be43-37d47fbb396b\">

                        <div class=\"input\">
                          <input type=\"text\" placeholder=\"Full Name\">
                        </div>
                        <div class=\"input\">
                          <input type=\"number\" placeholder=\"Phone Number\" required>
                        </div>
                        <div class=\"input\">
                          <input type=\"email\" placeholder=\"Email Address\" required>
                        </div>
                        <div class=\"input\">
                          <select name=\"country\" id=\"country\" class=\"country-area nice-select6\">
                            <option value=\"1\" data-display=\"Service Type\">Service Type</option>
                            <option value=\"\">Belgium</option>
                            <option value=\"\">Brezil</option>
                            <option value=\"\">Argentina</option>
                            <option value=\"\">Bangladesh</option>
                            <option value=\"\">Germany</option>
                          </select>
                        </div>
                        <div class=\"input\">
                          <textarea placeholder=\"Message\" required></textarea>
                        </div>
                        <div class=\"space32\"></div>
                        <div class=\"btn-area text-end\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                          <button type=\"submit\" class=\"vl-btn1\">submit now</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"bg-overlay\"></div>
  </div>
  <!--===== POPUP ENDS =======-->", "partials/popup.html.twig", "/home/nikunj/Desktop/WIP/Ovro_symfony/Ovro/templates/partials/popup.html.twig");
    }
}
