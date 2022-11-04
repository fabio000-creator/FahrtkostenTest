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

/* base.html.twig */
class __TwigTemplate_d64e94df718e613b63b4a8d7f4ffa2c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <style>
            body {
                background-color:#3D5A80;
                color: white;
            }

            form {
                width: 330px;
                margin-left: 42.5vw;
                margin-top: 20vh;
                border: 8px double yellowgreen;

            }

            form > * {
                padding-left:30px;
            }

            button {
               margin-bottom: 15px;
               margin-left:10px;
            }


            .table {
                margin-left:2vw;
                width:90vw;
                border: solid #809da9;
            }



            td {
               padding-left: 47px;
            }

            tr:nth-child(even) {
                background-color: #707070;
            }

            #overview_show {
                margin-left: 0;
                width:80px;
            }

            #overview_edit {
                margin-left:0;
                width: 80px;
            }


            div {
                margin-top:20px;
            }

            #Log_in_Box {
                margin-top: 200px;
                width:400px;
                height:400px;
                background-color: blue;
                display:flex;
                flex-direction: column;

            }
            /* small screen */
            @media only screen and (min-width:1px) and (max-width: 1300px) {

                form {
                    margin-left:36.5vw;
                }


            }

            /* middle screen */
            @media only screen and (min-width:1301px) and (max-width: 1600px) {
                form {
                    margin-left:39.5vw;
                }
            }

            /*big screen is the norm*/

        </style>



    </head>
    <body>
        ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "        <script>
            // check globally if box is empty
            if (document.querySelector(\".is_it_empty\")) {
                const check_empty = document.querySelectorAll(\".is_it_empty\");

                check_empty.forEach(function (element) {
                    let only_text = element.textContent;

                    if (only_text === \" \") {
                        element.textContent = \"Nein\";
                    }

                    if (element.textContent === \"Nein\" || element.textContent === \"Nein \") {
                        element.setAttribute(\"style\", \"color:darkred\")
                    }

                    if (element.textContent === \"Ja\" || element.textContent === \"Ja \") {
                        element.setAttribute(\"style\", \"color:lightgreen\")
                    }



                })

                const ausbezahlt =  document.querySelectorAll(\".is_it_empty\"); //NodeList to check one by one

                const edit_options = document.querySelectorAll(\"#overview_edit\")// NodeList to delete



                for (let listElement = 0; listElement < ausbezahlt.length; listElement++) {

                    if (ausbezahlt[listElement].textContent === \"Ja\" || ausbezahlt[listElement].textContent === \"Ja \") {
                        edit_options[listElement].remove();
                    }

                }

                // put Ausbezahlt into array AND put edit options into querySelector-NodeList
                // for loop where if (array[0] === \"Ja\" || \"Ja \") in the other

            }
        </script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fahrtkostenabrechnung | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 97,  203 => 5,  148 => 98,  146 => 97,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Fahrtkostenabrechnung | {% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

        <style>
            body {
                background-color:#3D5A80;
                color: white;
            }

            form {
                width: 330px;
                margin-left: 42.5vw;
                margin-top: 20vh;
                border: 8px double yellowgreen;

            }

            form > * {
                padding-left:30px;
            }

            button {
               margin-bottom: 15px;
               margin-left:10px;
            }


            .table {
                margin-left:2vw;
                width:90vw;
                border: solid #809da9;
            }



            td {
               padding-left: 47px;
            }

            tr:nth-child(even) {
                background-color: #707070;
            }

            #overview_show {
                margin-left: 0;
                width:80px;
            }

            #overview_edit {
                margin-left:0;
                width: 80px;
            }


            div {
                margin-top:20px;
            }

            #Log_in_Box {
                margin-top: 200px;
                width:400px;
                height:400px;
                background-color: blue;
                display:flex;
                flex-direction: column;

            }
            /* small screen */
            @media only screen and (min-width:1px) and (max-width: 1300px) {

                form {
                    margin-left:36.5vw;
                }


            }

            /* middle screen */
            @media only screen and (min-width:1301px) and (max-width: 1600px) {
                form {
                    margin-left:39.5vw;
                }
            }

            /*big screen is the norm*/

        </style>



    </head>
    <body>
        {% block body %}{% endblock %}
        <script>
            // check globally if box is empty
            if (document.querySelector(\".is_it_empty\")) {
                const check_empty = document.querySelectorAll(\".is_it_empty\");

                check_empty.forEach(function (element) {
                    let only_text = element.textContent;

                    if (only_text === \" \") {
                        element.textContent = \"Nein\";
                    }

                    if (element.textContent === \"Nein\" || element.textContent === \"Nein \") {
                        element.setAttribute(\"style\", \"color:darkred\")
                    }

                    if (element.textContent === \"Ja\" || element.textContent === \"Ja \") {
                        element.setAttribute(\"style\", \"color:lightgreen\")
                    }



                })

                const ausbezahlt =  document.querySelectorAll(\".is_it_empty\"); //NodeList to check one by one

                const edit_options = document.querySelectorAll(\"#overview_edit\")// NodeList to delete



                for (let listElement = 0; listElement < ausbezahlt.length; listElement++) {

                    if (ausbezahlt[listElement].textContent === \"Ja\" || ausbezahlt[listElement].textContent === \"Ja \") {
                        edit_options[listElement].remove();
                    }

                }

                // put Ausbezahlt into array AND put edit options into querySelector-NodeList
                // for loop where if (array[0] === \"Ja\" || \"Ja \") in the other

            }
        </script>
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
