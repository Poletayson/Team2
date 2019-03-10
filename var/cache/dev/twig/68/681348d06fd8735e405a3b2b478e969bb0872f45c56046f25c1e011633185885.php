<?php

/* product.html.twig */
class __TwigTemplate_91897fc19e10a167917f22641d52cccce57fedad02dce5a83456e317557a72b0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "
</head>

<body id=\"page-top\">

";
        // line 38
        $this->displayBlock('navbar', $context, $blocks);
        // line 94
        echo "

<div id=\"wrapper\">

    <!-- Sidebar -->
    <!--toggled =----------------------------------------------------------------------------------------=====-->
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

    ";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "

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
        // line 162
        $this->displayBlock('javascripts', $context, $blocks);
        // line 172
        echo "
</div>

</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
        <!-- Page level plugin CSS-->
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "        <title>Описание товара</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
                  integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
                  integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">

            <!--Мои стили -->
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/myStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mihailStyle.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 39
        echo "    <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

        <a class=\"navbar-brand mr-1\" href=\"index\">Hello world</a>

        <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
            <i class=\"fas fa-bars\"></i>
        </button>

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 132
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 163
        echo "
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/myJs.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 169,  319 => 168,  315 => 167,  311 => 166,  307 => 165,  303 => 164,  300 => 163,  294 => 162,  287 => 132,  281 => 131,  220 => 39,  214 => 38,  204 => 28,  200 => 27,  194 => 24,  187 => 19,  181 => 18,  173 => 14,  167 => 13,  159 => 31,  157 => 18,  153 => 16,  151 => 13,  142 => 6,  136 => 5,  123 => 172,  121 => 162,  90 => 133,  88 => 131,  49 => 94,  47 => 38,  40 => 33,  38 => 5,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
    {% block head %}

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    {% block title %}
        <title>Описание товара</title>
    {% endblock %}

        <!-- Page level plugin CSS-->
        {%  block stylesheets %}

            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
                  integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
                  integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
            <link href=\"{{ asset('css/sb-admin.css') }} \" rel=\"stylesheet\">

            <!--Мои стили -->
            <link href=\"{{ asset('css/myStyle.css') }}\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/mihailStyle.css') }}\" />

        {% endblock %}

    {% endblock%}

</head>

<body id=\"page-top\">

{% block navbar %}
    <nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

        <a class=\"navbar-brand mr-1\" href=\"index\">Hello world</a>

        <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
            <i class=\"fas fa-bars\"></i>
        </button>

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
{% endblock%}


<div id=\"wrapper\">

    <!-- Sidebar -->
    <!--toggled =----------------------------------------------------------------------------------------=====-->
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

    {% block content%}
    {% endblock%}


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


    {% block javascripts %}

        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.easing.min.js') }}\"></script>
        <script src=\"{{ asset ('js/Chart.min.js' )}}\"></script>
        <script src=\"{{ asset('js/sb-admin.min.js') }}\"></script>
        <script src=\"{{asset('js/myJs.js')}}\"></script>

    {% endblock %}

</div>

</body>

</html>
", "product.html.twig", "W:\\domains\\quick\\templates\\product.html.twig");
    }
}
