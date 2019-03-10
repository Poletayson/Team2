<?php

/* test.html.twig */
class __TwigTemplate_519bbcf32adcb8073ec8fe336eb1376d9cbb723d473088b10c85030794f31322 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("product.html.twig", "test.html.twig", 3);
        $_trait_0 = $this->loadTemplate("oneNodeInList.html.twig", "test.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."oneNodeInList.html.twig".'" cannot be used as a trait.', 4, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'content' => [$this, 'block_content'],
                'oneIntem' => [$this, 'block_oneIntem'],
                'javascripts' => [$this, 'block_javascripts'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "product.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <div id=\"content-wrapper\" class=\"myColorElem\" >

        <div class=\"row\">
            <span class=\"lg-col-12 sm-col-4 h1 ml-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "title", []), "html", null, true);
        echo "</span>
        </div>

        <div class=\"row bg-white m-3 p-2\">

            <div class=\"d-inline col-md-4 col-sm-12\">

                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()), "image", [])), "html", null, true);
        echo "\" alt=\"Example\" class=\"img-fluid\"/>

            </div>

            <div class=\"d-inline col-md-8 col-sm-12\">
                <div class=\"row-centered\">
                    <div class=\"sm-col-12 lg-col-8 mx-auto\">
                        <input type=\"checkbox\" id=\"hd-1\" class=\"hide\"/>
                        <label for=\"hd-1\" class=\"h3\">Характеристики</label>
                        <div class=\"row\">
                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Название</label>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"title\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 32, $this->source); })()), "title", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"code\" placeholder=\"000000\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 37, $this->source); })()), "code", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"balance\" placeholder=\"0\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->source); })()), "balance", []), "html", null, true);
        echo "\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Описание товара</label>
                            <div class=\"col-sm-12\">
                                  <textarea id=\"description\" class=\"form-control text-justify\"  rows=\"5\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->source); })()), "description", []), "html", null, true);
        echo "</textarea>
                            </div>

                            <div class=\"col-sm-12 text-center\">

                                ";
        // line 53
        echo "                                    <input type=\"submit\" class=\"btn btn-success my-2\" onclick=\"saveInfo( ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 53, $this->source); })()), "id", []), "html", null, true);
        echo ")\" name=\"name\" value=\"Применить\" />
                                ";
        // line 55
        echo "
                            </div>

                        </div>
                        <br/>
                        <input type=\"checkbox\" id=\"hd-2\" class=\"hide\"/>
                        <label for=\"hd-2\" class=\"h3\">Технологическая карта</label>
                        <div>
                            <button type=\"button\" class=\"btn btn-success w-100\" data-toggle=\"dropdown\">
                                <span class=\"lg-col-12 sm-col-4 h1\"> <i class=\"fas fa-plus-circle\"></i> Добавить материал</span>
                            </button>
                            <ul class=\"dropdown-menu scrollable-menu w-50\" role=\"menu\">

                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new Twig_Error_Runtime('Variable "materials" does not exist.', 68, $this->source); })()));
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
            // line 69
            echo "
                                    ";
            // line 70
            $context["material"] = $context["currentMaterial"];
            // line 71
            echo "                                    ";
            // line 72
            echo "                                    ";
            // line 73
            echo "
                                    ";
            // line 74
            $this->displayBlock('oneIntem', $context, $blocks);
            // line 79
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
        // line 81
        echo "                                ";
        // line 82
        echo "                                    ";
        // line 83
        echo "                                        ";
        // line 84
        echo "                                            ";
        // line 85
        echo "                                        ";
        // line 86
        echo "
                                        ";
        // line 88
        echo "                                            ";
        // line 89
        echo "                                                ";
        // line 90
        echo "                                                    ";
        // line 91
        echo "                                                ";
        // line 92
        echo "                                            ";
        // line 93
        echo "
                                            ";
        // line 95
        echo "                                                ";
        // line 96
        echo "                                                    ";
        // line 97
        echo "                                                ";
        // line 98
        echo "                                                ";
        // line 99
        echo "                                                    ";
        // line 100
        echo "                                                ";
        // line 101
        echo "                                            ";
        // line 102
        echo "
                                            ";
        // line 104
        echo "                                                ";
        // line 105
        echo "                                                    ";
        // line 106
        echo "                                                ";
        // line 107
        echo "                                                ";
        // line 108
        echo "                                                    ";
        // line 109
        echo "                                                ";
        // line 110
        echo "                                            ";
        // line 111
        echo "                                        ";
        // line 112
        echo "                                    ";
        // line 113
        echo "                                ";
        // line 114
        echo "
                                ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                        ";
        // line 118
        echo "                                            ";
        // line 119
        echo "                                        ";
        // line 120
        echo "
                                        ";
        // line 122
        echo "                                            ";
        // line 123
        echo "                                                ";
        // line 124
        echo "                                                    ";
        // line 125
        echo "                                                ";
        // line 126
        echo "                                            ";
        // line 127
        echo "
                                            ";
        // line 129
        echo "                                                ";
        // line 130
        echo "                                                    ";
        // line 131
        echo "                                                ";
        // line 132
        echo "                                                ";
        // line 133
        echo "                                                    ";
        // line 134
        echo "                                                ";
        // line 135
        echo "                                            ";
        // line 136
        echo "
                                            ";
        // line 138
        echo "                                                ";
        // line 139
        echo "                                                    ";
        // line 140
        echo "                                                ";
        // line 141
        echo "                                                ";
        // line 142
        echo "                                                    ";
        // line 143
        echo "                                                ";
        // line 144
        echo "                                            ";
        // line 145
        echo "                                        ";
        // line 146
        echo "                                    ";
        // line 147
        echo "                                ";
        // line 148
        echo "                            </ul>

                            <ul class=\"list-group\">

                                <li class=\"list-group-item text-center\">
                                    <div class=\"row\">
                                        <div class=\"w-100 col-lg-10 col-md-12 row\">
                                            <div class=\"col-lg-2  d-inline\">
                                                <img src=\"img/catalog/1.jpg\" class=\"img-fluid\">
                                            </div>

                                            <div class=\"row col-lg-10 d-inline ml-2\">
                                                <div class=\"col-lg-11 d-block col-12\">
                                                    <p class=\"myTextFont h3\">
                                                        Белая краска
                                                    </p>
                                                </div>

                                                <div class=\"d-block col-11\">
                                                    <div class=\"col-lg-5 d-inline col-5\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                                                    </div>
                                                    <div class=\"col-lg-4 d-inline col-4\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">654045</span>
                                                    </div>
                                                </div>

                                                <div class=\"d-block col-11\">
                                                    <div class=\"col-lg-5 d-inline col-5\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Требуется: </span>
                                                    </div>
                                                    <div class=\"col-lg-4 d-inline col-4\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 1 кг.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-lg-2 col-md-12 col-sm-12\">
                                            <p class=\"myTextFont h5\">
                                                Количество:
                                            </p>
                                            <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"2\">
                                        </div>

                                    </div>
                                </li>
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

    // line 74
    public function block_oneIntem($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oneIntem"));

        // line 75
        echo "
                                        ";
        // line 76
        $this->displayParentBlock("oneIntem", $context, $blocks);
        echo "

                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 218
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
        return array (  419 => 218,  414 => 217,  408 => 216,  398 => 76,  395 => 75,  389 => 74,  316 => 148,  314 => 147,  312 => 146,  310 => 145,  308 => 144,  306 => 143,  304 => 142,  302 => 141,  300 => 140,  298 => 139,  296 => 138,  293 => 136,  291 => 135,  289 => 134,  287 => 133,  285 => 132,  283 => 131,  281 => 130,  279 => 129,  276 => 127,  274 => 126,  272 => 125,  270 => 124,  268 => 123,  266 => 122,  263 => 120,  261 => 119,  259 => 118,  257 => 117,  255 => 116,  252 => 114,  250 => 113,  248 => 112,  246 => 111,  244 => 110,  242 => 109,  240 => 108,  238 => 107,  236 => 106,  234 => 105,  232 => 104,  229 => 102,  227 => 101,  225 => 100,  223 => 99,  221 => 98,  219 => 97,  217 => 96,  215 => 95,  212 => 93,  210 => 92,  208 => 91,  206 => 90,  204 => 89,  202 => 88,  199 => 86,  197 => 85,  195 => 84,  193 => 83,  191 => 82,  189 => 81,  174 => 79,  172 => 74,  169 => 73,  167 => 72,  165 => 71,  163 => 70,  160 => 69,  143 => 68,  128 => 55,  123 => 53,  115 => 47,  107 => 42,  99 => 37,  91 => 32,  75 => 19,  65 => 12,  59 => 8,  53 => 7,  38 => 3,  18 => 4,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"product.html.twig\" %}
{% use \"oneNodeInList.html.twig\" %}


{% block content%}

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

                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"title\" value=\"{{ product.title }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"code\" placeholder=\"000000\" value=\"{{ product.code }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control form-control-sm\" id=\"balance\" placeholder=\"0\" value=\"{{ product.balance }}\">
                            </div>

                            <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Описание товара</label>
                            <div class=\"col-sm-12\">
                                  <textarea id=\"description\" class=\"form-control text-justify\"  rows=\"5\">{{ product.description }}</textarea>
                            </div>

                            <div class=\"col-sm-12 text-center\">

                                {#<form name=\"test\">#}
                                    <input type=\"submit\" class=\"btn btn-success my-2\" onclick=\"saveInfo( {{ product.id }})\" name=\"name\" value=\"Применить\" />
                                {#</form>#}

                            </div>

                        </div>
                        <br/>
                        <input type=\"checkbox\" id=\"hd-2\" class=\"hide\"/>
                        <label for=\"hd-2\" class=\"h3\">Технологическая карта</label>
                        <div>
                            <button type=\"button\" class=\"btn btn-success w-100\" data-toggle=\"dropdown\">
                                <span class=\"lg-col-12 sm-col-4 h1\"> <i class=\"fas fa-plus-circle\"></i> Добавить материал</span>
                            </button>
                            <ul class=\"dropdown-menu scrollable-menu w-50\" role=\"menu\">

                                {% for currentMaterial in materials %}

                                    {% set material = currentMaterial %}
                                    {#{% set code_material = currentMaterial.getCodeMaterial() %}#}
                                    {#{% set img_material = currentMaterial.getImg() %}#}

                                    {% block oneIntem %}

                                        {{ parent()}}

                                    {% endblock %}

                                {% endfor %}
                                {#<li>#}
                                    {#<button class=\"w-100 row  p-2 mx-auto\">#}
                                        {#<div class=\"col-lg-2  d-inline\">#}
                                            {#<img src=\"img/catalog/1.jpg\" class=\"img-fluid\">#}
                                        {#</div>#}

                                        {#<div class=\"row col-lg-10 d-inline ml-2\">#}
                                            {#<div class=\"col-lg-11 d-block col-12\">#}
                                                {#<p class=\"myTextFont h3\">#}
                                                    {#Ножки#}
                                                {#</p>#}
                                            {#</div>#}

                                            {#<div class=\"d-block col-11\">#}
                                                {#<div class=\"col-lg-5 d-inline col-5\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>#}
                                                {#</div>#}
                                                {#<div class=\"col-lg-4 d-inline col-4\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">654045</span>#}
                                                {#</div>#}
                                            {#</div>#}

                                            {#<div class=\"d-block col-11\">#}
                                                {#<div class=\"col-lg-5 d-inline col-5\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Требуется: </span>#}
                                                {#</div>#}
                                                {#<div class=\"col-lg-4 d-inline col-4\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 4 шт.</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</div>#}
                                    {#</button>#}
                                {#</li>#}

                                {#<li>#}
                                    {#<button class=\"w-100 row p-2 mx-auto\">#}
                                        {#<div class=\"col-lg-2  d-inline\">#}
                                            {#<img src=\"img/catalog/1.jpg\" class=\"img-fluid\">#}
                                        {#</div>#}

                                        {#<div class=\"row col-lg-10 d-inline ml-2\">#}
                                            {#<div class=\"col-lg-11 d-block col-12\">#}
                                                {#<p class=\"myTextFont h3\">#}
                                                    {#Белая краска#}
                                                {#</p>#}
                                            {#</div>#}

                                            {#<div class=\"d-block col-11\">#}
                                                {#<div class=\"col-lg-5 d-inline col-5\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>#}
                                                {#</div>#}
                                                {#<div class=\"col-lg-4 d-inline col-4\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">654045</span>#}
                                                {#</div>#}
                                            {#</div>#}

                                            {#<div class=\"d-block col-11\">#}
                                                {#<div class=\"col-lg-5 d-inline col-5\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Требуется: </span>#}
                                                {#</div>#}
                                                {#<div class=\"col-lg-4 d-inline col-4\">#}
                                                    {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 1 кг.</span>#}
                                                {#</div>#}
                                            {#</div>#}
                                        {#</div>#}
                                    {#</button>#}
                                {#</li>#}
                            </ul>

                            <ul class=\"list-group\">

                                <li class=\"list-group-item text-center\">
                                    <div class=\"row\">
                                        <div class=\"w-100 col-lg-10 col-md-12 row\">
                                            <div class=\"col-lg-2  d-inline\">
                                                <img src=\"img/catalog/1.jpg\" class=\"img-fluid\">
                                            </div>

                                            <div class=\"row col-lg-10 d-inline ml-2\">
                                                <div class=\"col-lg-11 d-block col-12\">
                                                    <p class=\"myTextFont h3\">
                                                        Белая краска
                                                    </p>
                                                </div>

                                                <div class=\"d-block col-11\">
                                                    <div class=\"col-lg-5 d-inline col-5\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Код товара: </span>
                                                    </div>
                                                    <div class=\"col-lg-4 d-inline col-4\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\">654045</span>
                                                    </div>
                                                </div>

                                                <div class=\"d-block col-11\">
                                                    <div class=\"col-lg-5 d-inline col-5\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> Требуется: </span>
                                                    </div>
                                                    <div class=\"col-lg-4 d-inline col-4\">
                                                        <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 1 кг.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-lg-2 col-md-12 col-sm-12\">
                                            <p class=\"myTextFont h5\">
                                                Количество:
                                            </p>
                                            <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"2\">
                                        </div>

                                    </div>
                                </li>
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
{% endblock %}", "test.html.twig", "W:\\domains\\quick\\templates\\test.html.twig");
    }
}
