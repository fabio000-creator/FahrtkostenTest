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

/* fahrtkosten/edit.html.twig */
class __TwigTemplate_d9e515d7454bffefb70fe2f3481d88de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fahrtkosten/edit.html.twig", 1);
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

        echo "Edit Fahrtkosten";
        
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
        echo "    <center> <h1> Fahrtkosten bearbeiten </h1> </center>

    ";
        // line 8
        echo twig_include($this->env, $context, "fahrtkosten/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <button id=\"overview_btn\" onclick=\"window.open('";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "','_self')\"> Zurück zur Übersicht </button>

    ";
        // line 12
        echo twig_include($this->env, $context, "fahrtkosten/_delete_form.html.twig");
        echo "

    <script>
        const overview_btn = document.getElementById(\"overview_btn\");
        const delete_btn = document.querySelectorAll(\".btn\")[1];
        const form = document.getElementsByName(\"fahrtkosten\")[0];
        console.log(delete_btn)

        form.appendChild(overview_btn);
        form.appendChild(delete_btn);

        let form2 = document.getElementsByTagName(\"form\")[1];
        form2.remove();

        // move \"Ausbezahlt\" text field away
        const paid_input = document.getElementById(\"fahrtkosten_Ausbezahlt\");
        addStyletoElement(\"fahrtkosten_Ausbezahlt\", \"position:absolute; right:300px\");

        //link it to radio buttons (Ja / Nein )
        const place_to_add = document.getElementsByTagName(\"div\")[9];

        addElement(\"label\", \"id\", \"yes_label\", place_to_add);
        addInputtoElement(\"yes_label\", \" Ja \");


        addElement(\"input\", \"id\", \"yes\", place_to_add);
        addAttributetoElement(\"yes\", \"type\", \"radio\");
        addAttributetoElement(\"yes\", \"name\", \"selection\")

        addElement(\"label\", \"id\", \"no_label\", place_to_add);
        addInputtoElement(\"no_label\", \" Nein \");

        addElement(\"input\", \"id\", \"no\", place_to_add);
        addAttributetoElement(\"no\", \"type\", \"radio\");
        addAttributetoElement(\"no\", \"name\", \"selection\");

        const yes_btn = document.getElementById(\"yes\");
        const no_btn = document.getElementById(\"no\");

        yes_btn.addEventListener(\"click\", function() {
            let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
            database_field.value = \"Ja\";
        });

        no_btn.addEventListener(\"click\", function() {
            let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
            database_field.value = \"Nein\";
        })

        let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
        addStyletoElement(\"fahrtkosten_Ausbezahlt\", \"visibility:hidden; position:absolute\");

        //=> hide the \"Ausbezahlt\" field

        //functions
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
        return "fahrtkosten/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Fahrtkosten{% endblock %}

{% block body %}
    <center> <h1> Fahrtkosten bearbeiten </h1> </center>

    {{ include('fahrtkosten/_form.html.twig', {'button_label': 'Update'}) }}

    <button id=\"overview_btn\" onclick=\"window.open('{{ path('app_fahrtkosten_index', {'id': fahrtkosten.id}) }}','_self')\"> Zurück zur Übersicht </button>

    {{ include('fahrtkosten/_delete_form.html.twig') }}

    <script>
        const overview_btn = document.getElementById(\"overview_btn\");
        const delete_btn = document.querySelectorAll(\".btn\")[1];
        const form = document.getElementsByName(\"fahrtkosten\")[0];
        console.log(delete_btn)

        form.appendChild(overview_btn);
        form.appendChild(delete_btn);

        let form2 = document.getElementsByTagName(\"form\")[1];
        form2.remove();

        // move \"Ausbezahlt\" text field away
        const paid_input = document.getElementById(\"fahrtkosten_Ausbezahlt\");
        addStyletoElement(\"fahrtkosten_Ausbezahlt\", \"position:absolute; right:300px\");

        //link it to radio buttons (Ja / Nein )
        const place_to_add = document.getElementsByTagName(\"div\")[9];

        addElement(\"label\", \"id\", \"yes_label\", place_to_add);
        addInputtoElement(\"yes_label\", \" Ja \");


        addElement(\"input\", \"id\", \"yes\", place_to_add);
        addAttributetoElement(\"yes\", \"type\", \"radio\");
        addAttributetoElement(\"yes\", \"name\", \"selection\")

        addElement(\"label\", \"id\", \"no_label\", place_to_add);
        addInputtoElement(\"no_label\", \" Nein \");

        addElement(\"input\", \"id\", \"no\", place_to_add);
        addAttributetoElement(\"no\", \"type\", \"radio\");
        addAttributetoElement(\"no\", \"name\", \"selection\");

        const yes_btn = document.getElementById(\"yes\");
        const no_btn = document.getElementById(\"no\");

        yes_btn.addEventListener(\"click\", function() {
            let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
            database_field.value = \"Ja\";
        });

        no_btn.addEventListener(\"click\", function() {
            let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
            database_field.value = \"Nein\";
        })

        let database_field = document.getElementById(\"fahrtkosten_Ausbezahlt\");
        addStyletoElement(\"fahrtkosten_Ausbezahlt\", \"visibility:hidden; position:absolute\");

        //=> hide the \"Ausbezahlt\" field

        //functions
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


{% endblock %}
", "fahrtkosten/edit.html.twig", "/var/www/html/templates/fahrtkosten/edit.html.twig");
    }
}
