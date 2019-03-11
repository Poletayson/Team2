<?php

/* onePositionMap.html.twig */
class __TwigTemplate_e4a633ebf1ddaec0e3b97b918346a5c2fba714894841c97101267298de56a3a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'positionOnMap' => [$this, 'block_positionOnMap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "onePositionMap.html.twig"));

        // line 1
        $this->displayBlock('positionOnMap', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_positionOnMap($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "positionOnMap"));

        // line 2
        echo "<li class=\"list-group-item text-center\">
    <div class=\"row\">
        <div class=\"w-100 row mx-auto\">
            <div class=\"col-lg-2 col-md-4 d-inline\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 6, $this->source); })()), "getMaterial", [], "method"), "getImg", [], "method")), "html", null, true);
        echo "\" class=\"img-fluid\">
            </div>

            <div class=\"row col-lg-8 col-md-8 d-inline ml-2\">

                <div class=\"col-md-11 d-block col-12\">
                    <p class=\"myTextFont h3\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 13, $this->source); })()), "getMaterial", [], "method"), "getTitle", [], "method"), "html", null, true);
        echo "
                    </p>
                </div>

                <div class=\"d-block col-11\">

                    <div class=\"col-md-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                    </div>

                    <div class=\"col-md-2 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 24, $this->source); })()), "getMaterial", [], "method"), "getCodeMaterial", []), "html", null, true);
        echo "</span>
                    </div>

                </div>

                ";
        // line 30
        echo "                    ";
        // line 31
        echo "                        ";
        // line 32
        echo "                    ";
        // line 33
        echo "                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                    ";
        // line 36
        echo "                ";
        // line 37
        echo "
            </div>
            <div class=\"col-lg-2  col-md-12 d-inline\">
                <p class=\"myTextFont h5\">Кол-во:</p>
                <input id=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 41, $this->source); })()), "getId", [], "method"), "html", null, true);
        echo "\" onchange=\"changeAmountMaterial( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 41, $this->source); })()), "getId", [], "method"), "html", null, true);
        echo " )\"
                       class=\"form-control form-control-sm\" width=100 value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["positionMap"]) || array_key_exists("positionMap", $context) ? $context["positionMap"] : (function () { throw new Twig_Error_Runtime('Variable "positionMap" does not exist.', 42, $this->source); })()), "getAmount", [], "method"), "html", null, true);
        echo "\" />
            </div>

        </div>

    </div>
</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "onePositionMap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  97 => 41,  91 => 37,  89 => 36,  87 => 35,  85 => 34,  83 => 33,  81 => 32,  79 => 31,  77 => 30,  69 => 24,  55 => 13,  45 => 6,  39 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block positionOnMap %}
<li class=\"list-group-item text-center\">
    <div class=\"row\">
        <div class=\"w-100 row mx-auto\">
            <div class=\"col-lg-2 col-md-4 d-inline\">
                <img src=\"{{  asset( positionMap.getMaterial().getImg() ) }}\" class=\"img-fluid\">
            </div>

            <div class=\"row col-lg-8 col-md-8 d-inline ml-2\">

                <div class=\"col-md-11 d-block col-12\">
                    <p class=\"myTextFont h3\">
                        {{ positionMap.getMaterial().getTitle() }}
                    </p>
                </div>

                <div class=\"d-block col-11\">

                    <div class=\"col-md-5 d-inline col-5\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                    </div>

                    <div class=\"col-md-2 d-inline col-4\">
                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">{{ positionMap.getMaterial().getCodeMaterial }}</span>
                    </div>

                </div>

                {#<div class=\"d-block col-11\">#}
                    {#<div class=\"col-lg-5 d-inline col-5\">#}
                        {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Требуется: </span>#}
                    {#</div>#}
                    {#<div class=\"col-lg-4 d-inline col-4\">#}
                        {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 1 кг.</span>#}
                    {#</div>#}
                {#</div>#}

            </div>
            <div class=\"col-lg-2  col-md-12 d-inline\">
                <p class=\"myTextFont h5\">Кол-во:</p>
                <input id=\"{{ positionMap.getId() }}\" onchange=\"changeAmountMaterial( {{ positionMap.getId() }} )\"
                       class=\"form-control form-control-sm\" width=100 value=\"{{ positionMap.getAmount() }}\" />
            </div>

        </div>

    </div>
</li>
{% endblock %}", "onePositionMap.html.twig", "C:\\OSPanel\\domains\\Team2\\templates\\onePositionMap.html.twig");
    }
}
