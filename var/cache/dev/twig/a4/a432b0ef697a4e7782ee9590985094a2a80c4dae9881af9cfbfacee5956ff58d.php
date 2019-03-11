<?php

/* test.html.twig */
class __TwigTemplate_4e618b98b8a5922542498ae7924d431d248ad77d38ca9e6d432fe5a90a3fb077 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("product.html.twig", "test.html.twig", 1);
        $_trait_0 = $this->loadTemplate("oneNodeInList.html.twig", "test.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."oneNodeInList.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("onePositionMap.html.twig", "test.html.twig", 3);
        // line 3
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."onePositionMap.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'content' => [$this, 'block_content'],
                'oneIntem' => [$this, 'block_oneIntem'],
                'positionOnMap' => [$this, 'block_positionOnMap'],
                'javascripts' => [$this, 'block_javascripts'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "product.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 8
        echo "    <div id=\"content-wrapper\" class=\"myColorElem\" >

        <div class=\"row\">
            <span class=\"lg-col-12 sm-col-4 h1 ml-4\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->source); })()), "title", []), "html", null, true);
        echo "</span>
        </div>

        <div class=\"row bg-white m-3 p-2\">

            <div class=\"d-inline col-md-4 col-sm-12\">

                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->source); })()), "image", [])), "html", null, true);
        echo "\" alt=\"Example\" class=\"img-fluid\"/>

            </div>

            <div class=\"d-inline col-md-8 col-sm-12\">
                <div class=\"row-centered\">
                    <div class=\"sm-col-12 lg-col-8 mx-auto\">
                        <input type=\"checkbox\" id=\"hd-1\" class=\"hide\"/>
                        <label for=\"hd-1\" class=\"h3\">Характеристики</label>
                        <div class=\"row\">
                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Название</label>

                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"title\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 31, $this->source); })()), "title", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"code\" placeholder=\"000000\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 36, $this->source); })()), "code", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"balance\" placeholder=\"0\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 41, $this->source); })()), "balance", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Описание товара</label>
                            <div class=\"col-sm-12\">
                                  <textarea id=\"description\" class=\"form-control text-justify\"  rows=\"5\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 46, $this->source); })()), "description", []), "html", null, true);
        echo "</textarea>
                            </div>

                            <div class=\"col-sm-12 text-center\">

                                ";
        // line 51
        echo "#}
                                    <input type=\"submit\" class=\"btn btn-success my-2\" onclick=\"saveInfo( ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 52, $this->source); })()), "id", []), "html", null, true);
        echo ")\" name=\"name\" value=\"Применить\" />
                                ";
        // line 54
        echo "
                            </div>

                        </div>
                        <br/>
                        <input type=\"checkbox\" checked=\"true\" id=\"hd-2\" class=\"hide\"/>
                        <label for=\"hd-2\" class=\"h3\">Технологическая карта</label>
                        <div>
                            <button type=\"button\" class=\"btn btn-success w-100\" data-toggle=\"dropdown\">
                                <span class=\"lg-col-12 sm-col-4 h1\"> <i class=\"fas fa-plus-circle\"></i> Добавить материал</span>
                            </button>
                            <ul class=\"dropdown-menu scrollable-menu w-50\" role=\"menu\">

                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new Twig_Error_Runtime('Variable "materials" does not exist.', 67, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["currentMaterial"]) {
            // line 68
            echo "
                                    ";
            // line 69
            $context["material"] = $context["currentMaterial"];
            // line 70
            echo "
                                    ";
            // line 71
            $context["positionMap"] = twig_get_attribute($this->env, $this->source, (isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new Twig_Error_Runtime('Variable "positions" does not exist.', 71, $this->source); })()), 0, [], "array");
            // line 72
            echo "
                                    ";
            // line 73
            $this->displayBlock('oneIntem', $context, $blocks);
            // line 78
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentMaterial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                            </ul>

                            <ul class=\"list-group\" id=\"map\">

                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) || array_key_exists("positions", $context) ? $context["positions"] : (function () { throw new Twig_Error_Runtime('Variable "positions" does not exist.', 85, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["currentPosition"]) {
            // line 86
            echo "
                                    ";
            // line 87
            $context["positionMap"] = $context["currentPosition"];
            // line 88
            echo "
                                    ";
            // line 89
            $this->displayBlock('positionOnMap', $context, $blocks);
            // line 92
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentPosition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"bg-white mx-2 \">
            <div class=\"row\">

            </div>


        </div>
        <!-- /.content-wrapper -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_oneIntem($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oneIntem"));

        // line 74
        echo "
                                        ";
        // line 75
        $this->displayParentBlock("oneIntem", $context, $blocks);
        echo "

                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_positionOnMap($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "positionOnMap"));

        // line 90
        echo "                                        ";
        $this->displayParentBlock("positionOnMap", $context, $blocks);
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editButton/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 118,  322 => 117,  316 => 116,  306 => 90,  300 => 89,  290 => 75,  287 => 74,  281 => 73,  254 => 94,  239 => 92,  237 => 89,  234 => 88,  232 => 87,  229 => 86,  212 => 85,  205 => 80,  190 => 78,  188 => 73,  185 => 72,  183 => 71,  180 => 70,  178 => 69,  175 => 68,  158 => 67,  143 => 54,  139 => 52,  136 => 51,  128 => 46,  120 => 41,  112 => 36,  104 => 31,  88 => 18,  78 => 11,  73 => 8,  70 => 6,  64 => 5,  49 => 1,  25 => 3,  18 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"product.html.twig\" %}
{% use \"oneNodeInList.html.twig\" %}
{% use \"onePositionMap.html.twig\" %}

{% block content%}

    {#<input id=\"technology_map_id\" value=\"\"#}
    <div id=\"content-wrapper\" class=\"myColorElem\" >

        <div class=\"row\">
            <span class=\"lg-col-12 sm-col-4 h1 ml-4\">{{ product.title }}</span>
        </div>

        <div class=\"row bg-white m-3 p-2\">

            <div class=\"d-inline col-md-4 col-sm-12\">

                <img src=\"{{ asset( product.image ) }}\" alt=\"Example\" class=\"img-fluid\"/>

            </div>

            <div class=\"d-inline col-md-8 col-sm-12\">
                <div class=\"row-centered\">
                    <div class=\"sm-col-12 lg-col-8 mx-auto\">
                        <input type=\"checkbox\" id=\"hd-1\" class=\"hide\"/>
                        <label for=\"hd-1\" class=\"h3\">Характеристики</label>
                        <div class=\"row\">
                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Название</label>

                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"title\" value=\"{{ product.title }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"code\" placeholder=\"000000\" value=\"{{ product.code }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                            <div class=\"col-sm-12\">
                                <input class=\"form-control form-control-sm\" id=\"balance\" placeholder=\"0\" value=\"{{ product.balance }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Описание товара</label>
                            <div class=\"col-sm-12\">
                                  <textarea id=\"description\" class=\"form-control text-justify\"  rows=\"5\">{{ product.description }}</textarea>
                            </div>

                            <div class=\"col-sm-12 text-center\">

                                {#<form name=\"test\">#}#}
                                    <input type=\"submit\" class=\"btn btn-success my-2\" onclick=\"saveInfo( {{ product.id }})\" name=\"name\" value=\"Применить\" />
                                {#</form>#}

                            </div>

                        </div>
                        <br/>
                        <input type=\"checkbox\" checked=\"true\" id=\"hd-2\" class=\"hide\"/>
                        <label for=\"hd-2\" class=\"h3\">Технологическая карта</label>
                        <div>
                            <button type=\"button\" class=\"btn btn-success w-100\" data-toggle=\"dropdown\">
                                <span class=\"lg-col-12 sm-col-4 h1\"> <i class=\"fas fa-plus-circle\"></i> Добавить материал</span>
                            </button>
                            <ul class=\"dropdown-menu scrollable-menu w-50\" role=\"menu\">

                                {% for currentMaterial in materials %}

                                    {% set material = currentMaterial %}

                                    {% set positionMap = positions[0] %}

                                    {% block oneIntem %}

                                        {{ parent()}}

                                    {% endblock %}

                                {% endfor %}

                            </ul>

                            <ul class=\"list-group\" id=\"map\">

                                {% for currentPosition in positions %}

                                    {% set positionMap = currentPosition %}

                                    {% block positionOnMap %}
                                        {{ parent()}}
                                    {% endblock %}

                                {% endfor %}

                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"bg-white mx-2 \">
            <div class=\"row\">

            </div>


        </div>
        <!-- /.content-wrapper -->
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/editButton/product.js') }}\"></script>
{% endblock %}", "test.html.twig", "C:\\OSPanel\\domains\\Team2\\templates\\test.html.twig");
    }
}
