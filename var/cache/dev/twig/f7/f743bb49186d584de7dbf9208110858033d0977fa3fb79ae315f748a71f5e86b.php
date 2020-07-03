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

/* location/create.html.twig */
class __TwigTemplate_90bf30820ea0f74d2e09891b4c327689c8a810101d04ba617bfe36b8a29fc35e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/create.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
input[type=date], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<head>
<title>Ajouter une location</title>
</head>
<body>

<h1>Ajouter une location</h1>

<form method=\"POST\">
  <label for=\"fname\">Numero de chambre:</label><br>
  <input type=\"text\" id=\"idChambre\" name=\"idChambre\"><br><br>

  <label for=\"lname\">Nom du locataire:</label><br>
  <input type=\"text\" id=\"nom\" name=\"nom\"><br><br>

  <label for=\"lname\">Prenom du locataire:</label><br>
  <input type=\"text\" id=\"prenom\" name=\"prenom\"><br><br>

  <label for=\"lname\">Telephone du locataire:</label><br>
  <input type=\"text\" id=\"telephone\" name=\"telephone\"><br><br>

  <label for=\"lname\">Date du debut du sejour:</label><br>
  <input type=\"date\" id=\"dateDeb\" name=\"dateDeb\"><br><br>

  <label for=\"lname\">Date de fin de sejour:</label><br>
  <input type=\"date\" id=\"dateFin\" name=\"dateFin\"><br><br>

  <input type=\"submit\" value=\"Ajouter\">
</form>

</body>
</html>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "location/create.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
input[type=date], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<head>
<title>Ajouter une location</title>
</head>
<body>

<h1>Ajouter une location</h1>

<form method=\"POST\">
  <label for=\"fname\">Numero de chambre:</label><br>
  <input type=\"text\" id=\"idChambre\" name=\"idChambre\"><br><br>

  <label for=\"lname\">Nom du locataire:</label><br>
  <input type=\"text\" id=\"nom\" name=\"nom\"><br><br>

  <label for=\"lname\">Prenom du locataire:</label><br>
  <input type=\"text\" id=\"prenom\" name=\"prenom\"><br><br>

  <label for=\"lname\">Telephone du locataire:</label><br>
  <input type=\"text\" id=\"telephone\" name=\"telephone\"><br><br>

  <label for=\"lname\">Date du debut du sejour:</label><br>
  <input type=\"date\" id=\"dateDeb\" name=\"dateDeb\"><br><br>

  <label for=\"lname\">Date de fin de sejour:</label><br>
  <input type=\"date\" id=\"dateFin\" name=\"dateFin\"><br><br>

  <input type=\"submit\" value=\"Ajouter\">
</form>

</body>
</html>



", "location/create.html.twig", "C:\\Users\\21261\\Desktop\\exam-symf\\templates\\location\\create.html.twig");
    }
}
