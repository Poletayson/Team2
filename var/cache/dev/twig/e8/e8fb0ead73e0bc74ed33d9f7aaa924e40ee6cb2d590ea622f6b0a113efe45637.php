<?php

/* oneNodeInList.html.twig */
class __TwigTemplate_e874991a45504843dd2d03ddee2a900a5b39abea5127c64be98c1152ec1e2f2e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oneIntem' => [$this, 'block_oneIntem'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "oneNodeInList.html.twig"));

        // line 1
        $this->displayBlock('oneIntem', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_oneIntem($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oneIntem"));

        // line 2
        echo "    <li>
        <button class=\"w-100 row  p-1 mx-auto\" onclick=\"addInMap(";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new Twig_Error_Runtime('Variable "material" does not exist.', 3, $this->source); })()), "getId", [], "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 3, $this->source); })()), "getTechnologyMap", []), "getId", [], "method"), "html", null, true);
        echo " )\">

            <div class=\" row col-lg-4  d-inline my-auto\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new Twig_Error_Runtime('Variable "material" does not exist.', 6, $this->source); })()), "getImg", [], "method")), "html", null, true);
        echo "\" class=\"img-fluid\">
            </div>

            <div class=\"row col-lg-9 d-inline\">

                <div class=\"col-lg-11 d-block col-12\">
                    <p class=\"myTextFont h4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new Twig_Error_Runtime('Variable "material" does not exist.', 12, $this->source); })()), "getTitle", [], "method"), "html", null, true);
        echo "</p>
                </div>

                <div class=\"d-block col-11\">
                    <div class=\"col-lg-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                    </div>
                    <div class=\"col-lg-4 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new Twig_Error_Runtime('Variable "material" does not exist.', 20, $this->source); })()), "getCodeMaterial", [], "method"), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div class=\"d-block col-11\">

                    <div class=\"col-lg-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Остаток на складе: </span>
                    </div>

                    <div class=\"col-lg-4 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new Twig_Error_Runtime('Variable "material" does not exist.', 31, $this->source); })()), "getBalance", [], "method"), "html", null, true);
        echo "</span>
                    </div>

                </div>

            </div>

        </button>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "oneNodeInList.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  70 => 20,  59 => 12,  50 => 6,  42 => 3,  39 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block oneIntem %}
    <li>
        <button class=\"w-100 row  p-1 mx-auto\" onclick=\"addInMap({{material.getId()}}, {{positionMap.getTechnologyMap.getId()}} )\">

            <div class=\" row col-lg-4  d-inline my-auto\">
                <img src=\"{{  asset( material.getImg() ) }}\" class=\"img-fluid\">
            </div>

            <div class=\"row col-lg-9 d-inline\">

                <div class=\"col-lg-11 d-block col-12\">
                    <p class=\"myTextFont h4\">{{ material.getTitle() }}</p>
                </div>

                <div class=\"d-block col-11\">
                    <div class=\"col-lg-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                    </div>
                    <div class=\"col-lg-4 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">{{ material.getCodeMaterial() }}</span>
                    </div>
                </div>

                <div class=\"d-block col-11\">

                    <div class=\"col-lg-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Остаток на складе: </span>
                    </div>

                    <div class=\"col-lg-4 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">{{  material.getBalance() }}</span>
                    </div>

                </div>

            </div>

        </button>
    </li>
{% endblock %}", "oneNodeInList.html.twig", "W:\\domains\\teamSymfony\\templates\\oneNodeInList.html.twig");
    }
}
