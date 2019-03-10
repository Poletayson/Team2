<?php

/* web/myStyle.css */
class __TwigTemplate_c90c8c309de7f529ad0af2f6ba39328125716a9b3c54bfb9af52deba73557805 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/myStyle.css"));

        // line 1
        echo ".myColorElem{
    background-color : rgba(237, 237, 237, 0.82);
}
.myTextColorSpecification{
    color : rgba(96, 96, 96, 0.82);
}
.myTextFont{
    font-family: \"PTSans\",\"Helvetica\",\"Arial\",sans-serif;
}
.myTextSizeSpecification{
    font-size: 14px;
}
A.myHref{
    text-decoration: none;
    color : black;
}
A.myHref:hover{
    text-decoration: none;
    color : #1d6e66;
}
@media (min-width: 1200px) {
   .mySizePrice {
        font-size: 30px;
    }
}
@media (max-width: 1200px) {
    .mySizePrice {
        font-size: 25px;
    }
}

.myOtstup{
    .mt-3;
    .mx-1;
}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "web/myStyle.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(".myColorElem{
    background-color : rgba(237, 237, 237, 0.82);
}
.myTextColorSpecification{
    color : rgba(96, 96, 96, 0.82);
}
.myTextFont{
    font-family: \"PTSans\",\"Helvetica\",\"Arial\",sans-serif;
}
.myTextSizeSpecification{
    font-size: 14px;
}
A.myHref{
    text-decoration: none;
    color : black;
}
A.myHref:hover{
    text-decoration: none;
    color : #1d6e66;
}
@media (min-width: 1200px) {
   .mySizePrice {
        font-size: 30px;
    }
}
@media (max-width: 1200px) {
    .mySizePrice {
        font-size: 25px;
    }
}

.myOtstup{
    .mt-3;
    .mx-1;
}", "web/myStyle.css", "C:\\Program Files\\OpenServer\\OSPanel\\domains\\quick\\templates\\web\\myStyle.css");
    }
}
