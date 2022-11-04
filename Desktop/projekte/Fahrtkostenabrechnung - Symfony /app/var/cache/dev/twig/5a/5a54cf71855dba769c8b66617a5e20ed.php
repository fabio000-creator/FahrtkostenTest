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

/* fahrtkosten/show.html.twig */
class __TwigTemplate_406a0b4c690b0e5bf4f4195baaefae7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fahrtkosten/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fahrtkosten/show.html.twig", 1);
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

        echo "Fahrtkosten";
        
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
        echo "    <h1>Fahrtkosten</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 16, $this->source); })()), "vorname", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nachname</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 20, $this->source); })()), "Nachname", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abteilung</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 24, $this->source); })()), "Abteilung", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datum_Reise</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 28, $this->source); })()), "DatumReise", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 28, $this->source); })()), "DatumReise", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Reisestart</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 32, $this->source); })()), "Reisestart", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reiseziel</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 36, $this->source); })()), "Reiseziel", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kilometer</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 40, $this->source); })()), "Kilometer", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th> Kosten </th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 44, $this->source); })()), "Kilometer", [], "any", false, false, false, 44) * 0.4), "html", null, true);
        echo " € </td>
            </tr>
            <tr>
                <th> Ausbezahlt </th>
                <td class=\"is_it_empty\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 48, $this->source); })()), "Ausbezahlt", [], "any", false, false, false, 48), "html", null, true);
        echo " </td>
            </tr>
        </tbody>
    </table>


    <button onclick=\"window.open('";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_index");
        echo "','_self')\"> Zurück zur Übersicht </button>


    <button onclick=\"window.open('";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fahrtkosten_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fahrtkosten"]) || array_key_exists("fahrtkosten", $context) ? $context["fahrtkosten"] : (function () { throw new RuntimeError('Variable "fahrtkosten" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "','_self')\"> Bearbeiten </button>


    ";
        // line 60
        echo twig_include($this->env, $context, "fahrtkosten/_delete_form.html.twig");
        echo "



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "fahrtkosten/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 60,  174 => 57,  168 => 54,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fahrtkosten{% endblock %}

{% block body %}
    <h1>Fahrtkosten</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fahrtkosten.id }}</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>{{ fahrtkosten.vorname }}</td>
            </tr>
            <tr>
                <th>Nachname</th>
                <td>{{ fahrtkosten.Nachname }}</td>
            </tr>
            <tr>
                <th>Abteilung</th>
                <td>{{ fahrtkosten.Abteilung }}</td>
            </tr>
            <tr>
                <th>Datum_Reise</th>
                <td>{{ fahrtkosten.DatumReise ? fahrtkosten.DatumReise|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Reisestart</th>
                <td>{{ fahrtkosten.Reisestart }}</td>
            </tr>
            <tr>
                <th>Reiseziel</th>
                <td>{{ fahrtkosten.Reiseziel }}</td>
            </tr>
            <tr>
                <th>Kilometer</th>
                <td>{{ fahrtkosten.Kilometer }}</td>
            </tr>
            <tr>
                <th> Kosten </th>
                <td>{{ fahrtkosten.Kilometer * 0.4}} € </td>
            </tr>
            <tr>
                <th> Ausbezahlt </th>
                <td class=\"is_it_empty\">{{ fahrtkosten.Ausbezahlt }} </td>
            </tr>
        </tbody>
    </table>


    <button onclick=\"window.open('{{ path('app_fahrtkosten_index') }}','_self')\"> Zurück zur Übersicht </button>


    <button onclick=\"window.open('{{ path('app_fahrtkosten_edit', {'id': fahrtkosten.id}) }}','_self')\"> Bearbeiten </button>


    {{ include('fahrtkosten/_delete_form.html.twig') }}



{% endblock %}
", "fahrtkosten/show.html.twig", "/var/www/html/templates/fahrtkosten/show.html.twig");
    }
}
