<?php

/* web/mihailStyle.css */
class __TwigTemplate_51132e520b8aaf2a4ce618cd20e80aa39ff9fb853f4a51bc030a8798f8ff6f7f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/mihailStyle.css"));

        // line 1
        echo ".title{
\tmargin-left: 
}

#edit_button{
\talign-content: center;
}

/* скрываем чекбоксы и блоки с содержанием */
.hide {
    display: none; 
}
.hide + label ~ div{
    display: none;
}
/* оформляем текст label */
.hide + label {
    border-bottom: 1px dotted #343a40;
    padding: 0;
    color: #343a40;
    cursor: pointer;
    display: inline-block; 
}
/* вид текста label при активном переключателе */
.hide:checked + label {
    color: gray;
    border-bottom: 0;
}
/* когда чекбокс активен показываем блоки с содержанием  */
.hide:checked + label + div {
    display: block; 
    background: #efefef;
    -moz-box-shadow: inset 3px 3px 10px #7d8e8f;
    -webkit-box-shadow: inset 3px 3px 10px #7d8e8f;
    box-shadow: inset 3px 3px 10px #7d8e8f;
    padding: 10px; 
}

/* FADE OVERLAY FOR SCROLLING LISTS */
.scrollable-menu {
    height: auto;
    max-height: 300px;
    overflow-x: hidden;
}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "web/mihailStyle.css";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(".title{
\tmargin-left: 
}

#edit_button{
\talign-content: center;
}

/* скрываем чекбоксы и блоки с содержанием */
.hide {
    display: none; 
}
.hide + label ~ div{
    display: none;
}
/* оформляем текст label */
.hide + label {
    border-bottom: 1px dotted #343a40;
    padding: 0;
    color: #343a40;
    cursor: pointer;
    display: inline-block; 
}
/* вид текста label при активном переключателе */
.hide:checked + label {
    color: gray;
    border-bottom: 0;
}
/* когда чекбокс активен показываем блоки с содержанием  */
.hide:checked + label + div {
    display: block; 
    background: #efefef;
    -moz-box-shadow: inset 3px 3px 10px #7d8e8f;
    -webkit-box-shadow: inset 3px 3px 10px #7d8e8f;
    box-shadow: inset 3px 3px 10px #7d8e8f;
    padding: 10px; 
}

/* FADE OVERLAY FOR SCROLLING LISTS */
.scrollable-menu {
    height: auto;
    max-height: 300px;
    overflow-x: hidden;
}", "web/mihailStyle.css", "C:\\Program Files\\OpenServer\\OSPanel\\domains\\quick\\templates\\web\\mihailStyle.css");
    }
}
