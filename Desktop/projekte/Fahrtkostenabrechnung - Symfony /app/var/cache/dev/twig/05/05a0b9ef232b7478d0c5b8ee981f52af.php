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

/* fahrtkosten/index.html.twig */
class __TwigTemplate_5a3259e6a1ff2ab26b27d8a10442f901 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fahrtkosten/index.html.twig", 1);
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
        echo "    <center> <h1> Übersicht aller Fahrtkosten </h1> </center>



    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Abteilung</th>
                <th>Datum der Reise</th>
                <th>Reisestart</th>
                <th>Reiseziel</th>
                <th>Kilometer</th>
                <th>Kosten </th>
                <th>Ausbezahlt </th>
                <th>Optionen </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fahrtkostens"]) || array_key_exists("fahrtkostens", $context) ? $context["fahrtkostens"] : (function () { throw new RuntimeError('Variable "fahrtkostens" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fahrtkosten"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "vorname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Nachname", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Abteilung", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "DatumReise", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "DatumReise", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Reisestart", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Reiseziel", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Kilometer", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Kilometer", [], "any", false, false, false, 37) * 0.4), "html", null, true);
            echo " € </td>
                <td class=\"is_it_empty\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "Ausbezahlt", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                <td>
                    <button id=\"overview_show\" onclick=\"window.open('";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "','_self')\"> Anzeigen </button>
                    <button id=\"overview_edit\" onclick=\"window.open('";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fahrtkosten"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "','_self')\"> Bearbeiten </button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fahrtkosten'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <br>

    <center> <button onclick=\"window.open('";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_new");
        echo "','_self')\"> Neuer Eintrag </button> </center>

    <script>




        // fucntions
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
        return "fahrtkosten/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  182 => 49,  173 => 45,  164 => 41,  160 => 40,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fahrtkosten index{% endblock %}

{% block body %}
    <center> <h1> Übersicht aller Fahrtkosten </h1> </center>



    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Abteilung</th>
                <th>Datum der Reise</th>
                <th>Reisestart</th>
                <th>Reiseziel</th>
                <th>Kilometer</th>
                <th>Kosten </th>
                <th>Ausbezahlt </th>
                <th>Optionen </th>
            </tr>
        </thead>
        <tbody>
        {% for fahrtkosten in fahrtkostens %}
            <tr>
                <td>{{ fahrtkosten.id }}</td>
                <td>{{ fahrtkosten.vorname }}</td>
                <td>{{ fahrtkosten.Nachname }}</td>
                <td>{{ fahrtkosten.Abteilung }}</td>
                <td>{{ fahrtkosten.DatumReise ? fahrtkosten.DatumReise|date('Y-m-d') : '' }}</td>
                <td>{{ fahrtkosten.Reisestart }}</td>
                <td>{{ fahrtkosten.Reiseziel }}</td>
                <td>{{ fahrtkosten.Kilometer }}</td>
                <td>{{ fahrtkosten.Kilometer * 0.4 }} € </td>
                <td class=\"is_it_empty\">{{ fahrtkosten.Ausbezahlt}} </td>
                <td>
                    <button id=\"overview_show\" onclick=\"window.open('{{ path('app_fahrtkosten_show', {'id': fahrtkosten.id}) }}','_self')\"> Anzeigen </button>
                    <button id=\"overview_edit\" onclick=\"window.open('{{ path('app_fahrtkosten_edit', {'id': fahrtkosten.id}) }}','_self')\"> Bearbeiten </button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <br>

    <center> <button onclick=\"window.open('{{ path('app_fahrtkosten_new') }}','_self')\"> Neuer Eintrag </button> </center>

    <script>




        // fucntions
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
", "fahrtkosten/index.html.twig", "/var/www/html/templates/fahrtkosten/index.html.twig");
    }
}
