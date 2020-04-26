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

/* Advert/view.html.twig */
class __TwigTemplate_200760616c031c6bc76d948fb686e9908e55779ee85a28152edf8b924d275ab8 extends \Twig\Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Advert/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Advert/view.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Advert/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8))) {
            // line 9
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), "url", [], "any", false, false, false, 9), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), "alt", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
";
        }
        // line 11
        echo "
  <h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 13, $this->source); })()), "author", [], "any", false, false, false, 13), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 16, $this->source); })()), "content", [], "any", false, false, false, 16), "html", null, true);
        echo "
  </div>

  ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new RuntimeError('Variable "listAdvertSkills" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) || array_key_exists("listAdvertSkills", $context) ? $context["listAdvertSkills"] : (function () { throw new RuntimeError('Variable "listAdvertSkills" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 24
                echo "        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["advertSkill"], "skill", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advertSkill"], "level", [], "any", false, false, false, 24), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>
  </div>
  ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 30, $this->source); })()), "categories", [], "any", false, false, false, 30), "empty", [], "any", false, false, false, 30)) {
            // line 31
            echo "  <p>
    Cette annonce est parue dans les catégories suivantes :
    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 33, $this->source); })()), "categories", [], "any", false, false, false, 33));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) {
                    echo ", ";
                }
                // line 35
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "  </p>
";
        }
        // line 38
        echo "
  <div>
    <ul>
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) || array_key_exists("listApplications", $context) ? $context["listApplications"] : (function () { throw new RuntimeError('Variable "listApplications" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["mmb"]) {
            // line 42
            echo "        <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mmb"], "author", [], "any", false, false, false, 42), "html", null, true);
            echo " a dit : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mmb"], "content", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "        <li> Aucun commentaire. </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mmb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </ul>
  </div>

  <p>
    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_advert_index");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_advert_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oc_advert_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new RuntimeError('Variable "advert" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 58,  238 => 54,  231 => 50,  225 => 46,  218 => 44,  208 => 42,  203 => 41,  198 => 38,  194 => 36,  180 => 35,  174 => 34,  157 => 33,  153 => 31,  151 => 30,  148 => 29,  143 => 26,  132 => 24,  128 => 23,  123 => 20,  121 => 19,  115 => 16,  109 => 13,  105 => 12,  102 => 11,  94 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block body %}
{% if advert.image is not null %}
  <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
{% endif %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  {% if listAdvertSkills|length > 0 %}
  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      {% for advertSkill in listAdvertSkills %}
        <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
      {% endfor %}
    </ul>
  </div>
  {% endif %}

    {% if not advert.categories.empty %}
  <p>
    Cette annonce est parue dans les catégories suivantes :
    {% for category in advert.categories %}
      {{ category.name }}{% if not loop.last %}, {% endif %}
    {% endfor %}
  </p>
{% endif %}

  <div>
    <ul>
    {% for mmb in listApplications %}
        <li> {{ mmb.author }} a dit : {{ mmb.content }}</li>
      {% else %}
        <li> Aucun commentaire. </li>
    {% endfor %}
    </ul>
  </div>

  <p>
    <a href=\"{{ path('oc_advert_index') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_advert_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_advert_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}", "Advert/view.html.twig", "/home/user42/Bureau/tuto_symfony/templates/Advert/view.html.twig");
    }
}
