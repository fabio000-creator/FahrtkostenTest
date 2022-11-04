<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* fahrtkosten/no_admin.html.twig */
class __TwigTemplate_fa5678991dd908a3601d4a162761f952 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/no_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/no_admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fahrtkosten/no_admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fahrtkosten index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <center> <h1> Bitte log dich ein um die Tabelle einsehen zu können </h1> </center>
    <center>
    <main id=\"Log_in_Box\">
        <div>
        <label for=\"username\"> Name: </label>
        <input id=\"username\">
        </div>

        <div>
            <label for=\"password\"> Passwort: </label>
            <input id=\"password\">
        </div>

        <div>
            <button id=\"login\"> Einloggen </button>

        </div>
    </main>
    </center>


    <script>

        const login_btn = document.getElementById(\"login\");



        login_btn.addEventListener(\"click\", login);



        console.log(localStorage.getItem(\"admin\"));


            // functions

            // Here the name and password are set in \"name\" and \"password\"
            function login() {
                let name = \"Team23\";
                let password = \"Fahrtkostenabrechnung460\";

                let name_input = document.getElementById(\"username\").value;
                let password_input = document.getElementById(\"password\").value;

                if (name === name_input && password === password_input) {
                    window.open('";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_index");
        echo "','_self')
                } else {
                    let box = document.getElementById(\"Log_in_Box\");
                    addElement(\"p\", \"id\", \"error\", box)
                    addInputtoElement(\"error\", \"Name und/oder Passwort falsch\")

                    setTimeout(function (){
                        document.getElementById(\"error\").remove();
                    },1500);

                }

            }







            function addElement(element_to_add,attribute,attribute_value, source_to_attend) {
            let element = document.createElement(element_to_add);
            element.setAttribute(attribute, attribute_value);
            source_to_attend.append(element);
        }

        function addAttributetoElement(selected_element_by_id, attribute,attribute_value) {
            let select = document.getElementById(selected_element_by_id);
            select.setAttribute(attribute, attribute_value);
        }

        function removeAttribute(selected_element_by_id, attribute_to_remove) {
            document.getElementById(selected_element_by_id).removeAttribute(attribute_to_remove);
        }


        function addStyletoElement(selected_element_by_id, style) {
            let select = document.getElementById(selected_element_by_id);
            select.setAttribute(\"style\", style);
        }
        function getRandomArrayElement(array) {
            let random_num = Math.floor(Math.random() * array.length);
            return array[random_num];
        }

        function addInputtoElement(selected_element_by_id, text_to_add) {
            let select = document.getElementById(selected_element_by_id);
            let content = document.createTextNode(text_to_add);
            select.appendChild(content);
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "fahrtkosten/no_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 51,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fahrtkosten index{% endblock %}

{% block body %}
    <center> <h1> Bitte log dich ein um die Tabelle einsehen zu können </h1> </center>
    <center>
    <main id=\"Log_in_Box\">
        <div>
        <label for=\"username\"> Name: </label>
        <input id=\"username\">
        </div>

        <div>
            <label for=\"password\"> Passwort: </label>
            <input id=\"password\">
        </div>

        <div>
            <button id=\"login\"> Einloggen </button>

        </div>
    </main>
    </center>


    <script>

        const login_btn = document.getElementById(\"login\");



        login_btn.addEventListener(\"click\", login);



        console.log(localStorage.getItem(\"admin\"));


            // functions

            // Here the name and password are set in \"name\" and \"password\"
            function login() {
                let name = \"Team23\";
                let password = \"Fahrtkostenabrechnung460\";

                let name_input = document.getElementById(\"username\").value;
                let password_input = document.getElementById(\"password\").value;

                if (name === name_input && password === password_input) {
                    window.open('{{ path('app_fahrtkosten_index') }}','_self')
                } else {
                    let box = document.getElementById(\"Log_in_Box\");
                    addElement(\"p\", \"id\", \"error\", box)
                    addInputtoElement(\"error\", \"Name und/oder Passwort falsch\")

                    setTimeout(function (){
                        document.getElementById(\"error\").remove();
                    },1500);

                }

            }







            function addElement(element_to_add,attribute,attribute_value, source_to_attend) {
            let element = document.createElement(element_to_add);
            element.setAttribute(attribute, attribute_value);
            source_to_attend.append(element);
        }

        function addAttributetoElement(selected_element_by_id, attribute,attribute_value) {
            let select = document.getElementById(selected_element_by_id);
            select.setAttribute(attribute, attribute_value);
        }

        function removeAttribute(selected_element_by_id, attribute_to_remove) {
            document.getElementById(selected_element_by_id).removeAttribute(attribute_to_remove);
        }


        function addStyletoElement(selected_element_by_id, style) {
            let select = document.getElementById(selected_element_by_id);
            select.setAttribute(\"style\", style);
        }
        function getRandomArrayElement(array) {
            let random_num = Math.floor(Math.random() * array.length);
            return array[random_num];
        }

        function addInputtoElement(selected_element_by_id, text_to_add) {
            let select = document.getElementById(selected_element_by_id);
            let content = document.createTextNode(text_to_add);
            select.appendChild(content);
        }
    </script>

{% endblock %}", "fahrtkosten/no_admin.html.twig", "/var/www/html/templates/fahrtkosten/no_admin.html.twig");
    }
}
