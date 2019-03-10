<?php

/* product.html.twig */
class __TwigTemplate_ba16a8b57576500d2a3bc131ca86a17d7bf56a3c170ad08f08380f7b9e07573c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Описание товара</title>


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
          integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">


    <!-- Custom fonts for this template-->
    ";
        // line 21
        echo "
    <!-- Page level plugin CSS-->
    ";
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
   ";
        // line 37
        echo "
</head>

<body id=\"page-top\">

<nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

    <a class=\"navbar-brand mr-1\" href=\"index.html\">Hello world</a>

    <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->

    <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown no-arrow mx-1\">

            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <span class=\"badge badge-danger\">9+</span>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"alertsDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <span class=\"badge badge-danger\">7</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"messagesDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>

        <!--Логин -->

        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link \" href=\"login.html\" id=\"userDropdown\" role=\"button\" >
                <i class=\"fas fa-user-circle fa-fw\"> </i>LogIn
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Settings</a>
                <a class=\"dropdown-item\" href=\"#\">Activity Log</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <!--toggled =---------------------------------------------------------------------------------------------------------------------=====-->
    <ul class=\"sidebar navbar-nav toggled\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"appMaterial.html\">
                <i class=\"fas fa-fw fa-file-contract\"></i>
                <span>АПП материалов</span>
            </a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"appProduct.html\">
                <i class=\"fas fa-fw fa-file-contract\"></i>
                <span>Апп продуктов</span></a>
        </li>
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"tablesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span>
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"tablesDropdown\">
                <h6 class=\"dropdown-header\">Таблицы:</h6>
                <a class=\"dropdown-item\" href=\"login.html\">раз</a>
                <a class=\"dropdown-item\" href=\"register.php\">два</a>
                <a class=\"dropdown-item\" href=\"forgot-password.html\">три</a>
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"dropdown-header\">Еще чето:</h6>
                <a class=\"dropdown-item\" href=\"404.html\">1</a>
                <a class=\"dropdown-item\" href=\"blank.html\">2</a>
            </div>
        </li>

    </ul>

        <div id=\"content-wrapper\" class=\"myColorElem\" >
            
            <div class=\"row\">
                <span class=\"lg-col-12 sm-col-4 h1 ml-4\">Стул деревянный белый</span>
            </div>

            <div class=\"row bg-white m-3 p-2\">

                <div class=\"d-inline col-lg-4 col-sm-12\">
                    ";
        // line 145
        echo "                    <img src=\"img/1.jpg\" class=\"img-fluid\">
                </div>
                
                <div class=\"d-inline col-lg-8 col-sm-12\">
                    <div class=\"row-centered\">
                        <div class=\"sm-col-12 lg-col-8 mx-auto\">
                            <input type=\"checkbox\" id=\"hd-1\" class=\"hide\"/>
                            <label for=\"hd-1\" class=\"h3\">Характеристики</label>
                            <div class=\"row\">
                                <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Название</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"Стул белый деревянный\">
                                </div>

                                <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"111\">
                                </div>

                                <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"2\">
                                </div>
                                
                                <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label  col-form-label-sm\">Описание товара</label>
                                <div class=\"col-sm-12\">
                                  <textarea id=\"myTextarea2\" class=\"form-control text-justify\"  rows=\"5\">";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["opisanieTovara"]) || array_key_exists("opisanieTovara", $context) ? $context["opisanieTovara"] : (function () { throw new Twig_Error_Runtime('Variable "opisanieTovara" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "
                                  </textarea>  
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
        // line 185
        echo "                                            ";
        // line 186
        echo "                                                ";
        // line 187
        echo "                                                    ";
        // line 188
        echo "                                                ";
        // line 189
        echo "
                                                ";
        // line 191
        echo "                                                    ";
        // line 192
        echo "                                                        ";
        // line 193
        echo "                                                            ";
        // line 194
        echo "                                                        ";
        // line 195
        echo "                                                    ";
        // line 196
        echo "
                                                    ";
        // line 198
        echo "                                                        ";
        // line 199
        echo "                                                            ";
        // line 200
        echo "                                                        ";
        // line 201
        echo "                                                        ";
        // line 202
        echo "                                                            ";
        // line 203
        echo "                                                        ";
        // line 204
        echo "                                                    ";
        // line 205
        echo "
                                                    ";
        // line 207
        echo "                                                        ";
        // line 208
        echo "                                                            ";
        // line 209
        echo "                                                        ";
        // line 210
        echo "                                                        ";
        // line 211
        echo "                                                            ";
        // line 212
        echo "                                                        ";
        // line 213
        echo "                                                    ";
        // line 214
        echo "                                                ";
        // line 215
        echo "                                            ";
        // line 216
        echo "                                        ";
        // line 217
        echo "
                                        <li>
                                            <button class=\"w-100 row  p-2 mx-auto\">
                                                <div class=\"col-lg-2  d-inline\"> 
                                                    <img src=\"img/catalog/1.jpg\" class=\"img-fluid\"> 
                                                </div> 

                                                <div class=\"row col-lg-10 d-inline ml-2\"> 
                                                    <div class=\"col-lg-11 d-block col-12\"> 
                                                        <p class=\"myTextFont h3\"> 
                                                            Ножки
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
                                                            <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 4 шт.</span> 
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </button>
                                        </li>

                                        <li>
                                            <button class=\"w-100 row p-2 mx-auto\">
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
                                            </button>
                                        </li>
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
            <div class=\"row\"></div>
            
        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>



";
        // line 390
        echo "
";
        // line 393
        echo "
<!-- Custom scripts for all pages-->

";
        // line 397
        echo "
    <!-- Bootstrap core JavaScript-->

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
            integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
            integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
            crossorigin=\"anonymous\"></script>

    ";
        // line 411
        echo "    ";
        // line 412
        echo "    ";
        // line 413
        echo "            ";
        // line 414
        echo "            ";
        // line 415
        echo "</div>>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "        ";
        // line 31
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/myStyle.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mihailStyle.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 33,  508 => 32,  503 => 31,  501 => 30,  495 => 29,  484 => 415,  482 => 414,  480 => 413,  478 => 412,  476 => 411,  461 => 397,  456 => 393,  453 => 390,  280 => 217,  278 => 216,  276 => 215,  274 => 214,  272 => 213,  270 => 212,  268 => 211,  266 => 210,  264 => 209,  262 => 208,  260 => 207,  257 => 205,  255 => 204,  253 => 203,  251 => 202,  249 => 201,  247 => 200,  245 => 199,  243 => 198,  240 => 196,  238 => 195,  236 => 194,  234 => 193,  232 => 192,  230 => 191,  227 => 189,  225 => 188,  223 => 187,  221 => 186,  219 => 185,  203 => 171,  175 => 145,  66 => 37,  63 => 35,  60 => 29,  57 => 27,  55 => 26,  52 => 24,  48 => 21,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Описание товара</title>


    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
          integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">


    <!-- Custom fonts for this template-->
    {#<link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">#}

    <!-- Page level plugin CSS-->
    {#<link href=\"vendor/datatables/dataTables.bootstrap4.css\" rel=\"stylesheet\">#}

    {#<!-- Custom styles for this template-->#}
    {#<link href=\"css/sb-admin.css\" rel=\"stylesheet\">#}

    {#<!--Мои стили -->#}
    {%  block stylesheets %}
        {#<link rel=\"stylesheet\" href=\"{{  }}\">#}
        <link rel=\"stylesheet\" href=\"{{ asset('css/myStyle.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/mihailStyle.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin.css') }}\" />
    {% endblock %}

   {#<link href=\"web/myStyle.css\" rel=\"stylesheet\">#}

</head>

<body id=\"page-top\">

<nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

    <a class=\"navbar-brand mr-1\" href=\"index.html\">Hello world</a>

    <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->

    <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown no-arrow mx-1\">

            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <span class=\"badge badge-danger\">9+</span>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"alertsDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>
        <li class=\"nav-item dropdown no-arrow mx-1\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <span class=\"badge badge-danger\">7</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"messagesDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>

        <!--Логин -->

        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link \" href=\"login.html\" id=\"userDropdown\" role=\"button\" >
                <i class=\"fas fa-user-circle fa-fw\"> </i>LogIn
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Settings</a>
                <a class=\"dropdown-item\" href=\"#\">Activity Log</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <!--toggled =---------------------------------------------------------------------------------------------------------------------=====-->
    <ul class=\"sidebar navbar-nav toggled\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"appMaterial.html\">
                <i class=\"fas fa-fw fa-file-contract\"></i>
                <span>АПП материалов</span>
            </a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"appProduct.html\">
                <i class=\"fas fa-fw fa-file-contract\"></i>
                <span>Апп продуктов</span></a>
        </li>
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"tablesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span>
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"tablesDropdown\">
                <h6 class=\"dropdown-header\">Таблицы:</h6>
                <a class=\"dropdown-item\" href=\"login.html\">раз</a>
                <a class=\"dropdown-item\" href=\"register.php\">два</a>
                <a class=\"dropdown-item\" href=\"forgot-password.html\">три</a>
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"dropdown-header\">Еще чето:</h6>
                <a class=\"dropdown-item\" href=\"404.html\">1</a>
                <a class=\"dropdown-item\" href=\"blank.html\">2</a>
            </div>
        </li>

    </ul>

        <div id=\"content-wrapper\" class=\"myColorElem\" >
            
            <div class=\"row\">
                <span class=\"lg-col-12 sm-col-4 h1 ml-4\">Стул деревянный белый</span>
            </div>

            <div class=\"row bg-white m-3 p-2\">

                <div class=\"d-inline col-lg-4 col-sm-12\">
                    {#<link rel=\"stylesheet\" href=\"{{ asset('css/sb-admin.css') }}\" />#}
                    <img src=\"img/1.jpg\" class=\"img-fluid\">
                </div>
                
                <div class=\"d-inline col-lg-8 col-sm-12\">
                    <div class=\"row-centered\">
                        <div class=\"sm-col-12 lg-col-8 mx-auto\">
                            <input type=\"checkbox\" id=\"hd-1\" class=\"hide\"/>
                            <label for=\"hd-1\" class=\"h3\">Характеристики</label>
                            <div class=\"row\">
                                <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Название</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"Стул белый деревянный\">
                                </div>

                                <label for=\"colFormLabelSm\" class=\"col-sm-2 col-form-label col-form-label-sm\">Код товара</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"111\">
                                </div>

                                <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label col-form-label-sm\">Количество на складе</label>
                                <div class=\"col-sm-5\">
                                  <input type=\"email\" class=\"form-control form-control-sm\" id=\"colFormLabelSm\" placeholder=\"2\">
                                </div>
                                
                                <label for=\"colFormLabelSm\" class=\"col-sm-5 col-form-label  col-form-label-sm\">Описание товара</label>
                                <div class=\"col-sm-12\">
                                  <textarea id=\"myTextarea2\" class=\"form-control text-justify\"  rows=\"5\">{{ opisanieTovara }}
                                  </textarea>  
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
                                        {#<li>#}
                                            {#<a href=\"#\" class=\"w-100 row p-2\">#}
                                                {#<div class=\"col-lg-2  d-inline\">#}
                                                    {#<img src=\"img/catalog/1.jpg\" class=\"img-fluid\">#}
                                                {#</div>#}

                                                {#<div class=\"row col-lg-10 d-inline ml-2\">#}
                                                    {#<div class=\"col-lg-11 d-block col-12\">#}
                                                        {#<p class=\"myTextFont h3\">#}
                                                            {#Сосновое основание#}
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
                                                            {#<span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 2 шт.</span>#}
                                                        {#</div>#}
                                                    {#</div>#}
                                                {#</div>#}
                                            {#</a>#}
                                        {#</li>#}

                                        <li>
                                            <button class=\"w-100 row  p-2 mx-auto\">
                                                <div class=\"col-lg-2  d-inline\"> 
                                                    <img src=\"img/catalog/1.jpg\" class=\"img-fluid\"> 
                                                </div> 

                                                <div class=\"row col-lg-10 d-inline ml-2\"> 
                                                    <div class=\"col-lg-11 d-block col-12\"> 
                                                        <p class=\"myTextFont h3\"> 
                                                            Ножки
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
                                                            <span class=\"myTextColorSpecification myTextFont myTextSizeSpecification\"> 4 шт.</span> 
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </button>
                                        </li>

                                        <li>
                                            <button class=\"w-100 row p-2 mx-auto\">
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
                                            </button>
                                        </li>
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
            <div class=\"row\"></div>
            
        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class=\"sticky-footer\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>



{#<!-- Core plugin JavaScript-->#}
{#<script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>#}

{#<!-- Page level plugin JavaScript-->#}
{#<script src=\"vendor/chart.js/Chart.min.js\"></script>#}

<!-- Custom scripts for all pages-->

{#<script src=\"js/sb-admin.min.js\"></script>#}

    <!-- Bootstrap core JavaScript-->

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"
            integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"
            integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\"
            crossorigin=\"anonymous\"></script>

    {#<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>#}
    {#</script>#}
    {#<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"#}
            {#integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\"#}
            {#crossorigin=\"anonymous\"></script>#}
</div>>
</body>

</html>
", "product.html.twig", "W:\\domains\\quick\\templates\\product.html.twig");
    }
}
