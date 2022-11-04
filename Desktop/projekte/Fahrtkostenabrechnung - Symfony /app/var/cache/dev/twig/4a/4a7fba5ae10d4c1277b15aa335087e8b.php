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

/* fahrtkosten/new.html.twig */
class __TwigTemplate_e8a8ab9590c0943a1bf31031c842880c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fahrtkosten/new.html.twig", 1);
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

        echo "New Fahrtkosten";
        
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
        echo "    <center> <h1> <u> Trage deine Fahrtkosten ein </u> </h1> </center>

    ";
        // line 8
        echo twig_include($this->env, $context, "fahrtkosten/_form.html.twig");
        echo "

    <button id=\"oversight\" onclick=\"window.open('";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_auth", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "','_self')\"> Zurück zur Übersicht </button>

    <script>
        // ajust the date label to fit better
        const all_label = document.querySelectorAll(\".required\");
        const date_label = all_label[3];
        const date_label_new_position = document.getElementById(\"fahrtkosten_Datum_Reise\");

        //date_label.innerHTML = \"Datum der Reise :\";
        date_label.remove();
        // add it before the selecction
        date_label_new_position.prepend(\"Datum Fahrt\");


         const form = document.getElementsByName(\"fahrtkosten\")[0];
         const oversight_btn = document.getElementById('oversight');

         form.appendChild(oversight_btn);

        // user shouldnt be able to edit this => unable to remove unless you wanna remove it everywhere
         const already_paid = document.getElementById(\"fahrtkosten\").childNodes[7];

         already_paid.remove();




        // functions
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
        return "fahrtkosten/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Fahrtkosten{% endblock %}

{% block body %}
    <center> <h1> <u> Trage deine Fahrtkosten ein </u> </h1> </center>

    {{ include('fahrtkosten/_form.html.twig') }}

    <button id=\"oversight\" onclick=\"window.open('{{ path('app_fahrtkosten_auth', {'id': fahrtkosten.id}) }}','_self')\"> Zurück zur Übersicht </button>

    <script>
        // ajust the date label to fit better
        const all_label = document.querySelectorAll(\".required\");
        const date_label = all_label[3];
        const date_label_new_position = document.getElementById(\"fahrtkosten_Datum_Reise\");

        //date_label.innerHTML = \"Datum der Reise :\";
        date_label.remove();
        // add it before the selecction
        date_label_new_position.prepend(\"Datum Fahrt\");


         const form = document.getElementsByName(\"fahrtkosten\")[0];
         const oversight_btn = document.getElementById('oversight');

         form.appendChild(oversight_btn);

        // user shouldnt be able to edit this => unable to remove unless you wanna remove it everywhere
         const already_paid = document.getElementById(\"fahrtkosten\").childNodes[7];

         already_paid.remove();




        // functions
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
", "fahrtkosten/new.html.twig", "/var/www/html/templates/fahrtkosten/new.html.twig");
    }
}
