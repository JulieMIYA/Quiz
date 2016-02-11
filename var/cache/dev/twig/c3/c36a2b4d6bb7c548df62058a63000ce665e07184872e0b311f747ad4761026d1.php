<?php

/* test/question.html.twig */
class __TwigTemplate_be37800575a319cf5dcb8b5626e31b9bb2868a20510266d3a918dc0c3dd0cfe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/question.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d68ab412c298318356f66e3a8eed9a9cfe992280182342506aafbaf3a94f89 = $this->env->getExtension("native_profiler");
        $__internal_39d68ab412c298318356f66e3a8eed9a9cfe992280182342506aafbaf3a94f89->enter($__internal_39d68ab412c298318356f66e3a8eed9a9cfe992280182342506aafbaf3a94f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/question.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d68ab412c298318356f66e3a8eed9a9cfe992280182342506aafbaf3a94f89->leave($__internal_39d68ab412c298318356f66e3a8eed9a9cfe992280182342506aafbaf3a94f89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d72feb927a72868c4799e3770864e48855b43ab744fd86c7a82c095742bed36d = $this->env->getExtension("native_profiler");
        $__internal_d72feb927a72868c4799e3770864e48855b43ab744fd86c7a82c095742bed36d->enter($__internal_d72feb927a72868c4799e3770864e48855b43ab744fd86c7a82c095742bed36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Welcome to test!
";
        
        $__internal_d72feb927a72868c4799e3770864e48855b43ab744fd86c7a82c095742bed36d->leave($__internal_d72feb927a72868c4799e3770864e48855b43ab744fd86c7a82c095742bed36d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7817e9836c6a46c2c4846475442aa775c29dba0f4fac50b15c634d39f2a2d1a = $this->env->getExtension("native_profiler");
        $__internal_e7817e9836c6a46c2c4846475442aa775c29dba0f4fac50b15c634d39f2a2d1a->enter($__internal_e7817e9836c6a46c2c4846475442aa775c29dba0f4fac50b15c634d39f2a2d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>QUIZ</h1>
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "content", array(), "array"), "html", null, true);
        echo " </h2>
            <ul class=\"optionLs\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "choices", array(), "array"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "                    <li>
                        <input type=\"checkbox\">";
            // line 15
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</input>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
            </ul>

            ";
        // line 21
        if ((isset($context["isEnd"]) ? $context["isEnd"] : $this->getContext($context, "isEnd"))) {
            // line 22
            echo "                <button>Opps! C'est la fin.</button>
            ";
        } else {
            // line 24
            echo "                <a href=\"/questions/";
            echo twig_escape_filter($this->env, ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1), "html", null, true);
            echo "\"><button>Suivant</button></a>
            ";
        }
        // line 26
        echo "        </div>
    </div>

";
        
        $__internal_e7817e9836c6a46c2c4846475442aa775c29dba0f4fac50b15c634d39f2a2d1a->leave($__internal_e7817e9836c6a46c2c4846475442aa775c29dba0f4fac50b15c634d39f2a2d1a_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9e065d217b8871478db44b7f52e4e493c2b687651dd511080e1ff97ec3f6eb7 = $this->env->getExtension("native_profiler");
        $__internal_f9e065d217b8871478db44b7f52e4e493c2b687651dd511080e1ff97ec3f6eb7->enter($__internal_f9e065d217b8871478db44b7f52e4e493c2b687651dd511080e1ff97ec3f6eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "    <style>
        body {
            display: block;
            margin: 0px;
            height:100vh;
        }
        #wrapper {
            background:linear-gradient(to bottom right,#D0E6F3,#FBFBFB, #F7F4E5);
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            height:100%;
        }
        #container {
            padding:2em;

        }
        #container h1{
            text-align: center;
        }
        .optionLs {  list-style-type: none;}

        button{ }
    </style>



";
        
        $__internal_f9e065d217b8871478db44b7f52e4e493c2b687651dd511080e1ff97ec3f6eb7->leave($__internal_f9e065d217b8871478db44b7f52e4e493c2b687651dd511080e1ff97ec3f6eb7_prof);

    }

    public function getTemplateName()
    {
        return "test/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  111 => 31,  101 => 26,  95 => 24,  91 => 22,  89 => 21,  84 => 18,  73 => 15,  70 => 14,  66 => 13,  61 => 11,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Welcome to test!*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <h1>QUIZ</h1>*/
/*             <h2>{{ question['content'] }} </h2>*/
/*             <ul class="optionLs">*/
/*                 {% for key,value  in question['choices'] %}*/
/*                     <li>*/
/*                         <input type="checkbox">{{ key }}: {{ value }}</input>*/
/*                     </li>*/
/*                 {% endfor %}*/
/* */
/*             </ul>*/
/* */
/*             {% if isEnd %}*/
/*                 <button>Opps! C'est la fin.</button>*/
/*             {% else  %}*/
/*                 <a href="/questions/{{ index+1 }}"><button>Suivant</button></a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         body {*/
/*             display: block;*/
/*             margin: 0px;*/
/*             height:100vh;*/
/*         }*/
/*         #wrapper {*/
/*             background:linear-gradient(to bottom right,#D0E6F3,#FBFBFB, #F7F4E5);*/
/*             margin: 1em auto;*/
/*             max-width: 800px;*/
/*             width: 95%;*/
/*             height:100%;*/
/*         }*/
/*         #container {*/
/*             padding:2em;*/
/* */
/*         }*/
/*         #container h1{*/
/*             text-align: center;*/
/*         }*/
/*         .optionLs {  list-style-type: none;}*/
/* */
/*         button{ }*/
/*     </style>*/
/* */
/* */
/* */
/* {% endblock %}*/
