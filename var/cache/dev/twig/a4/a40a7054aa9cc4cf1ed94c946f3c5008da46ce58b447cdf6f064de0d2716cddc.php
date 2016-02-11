<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_40e2553255b5489295332cf2eedc0ec752061261a0eeb6dd5703d41e93102d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660d6c2faeffe477fa66ab4f253fa06c4b3bf44a9b8100dd468be256a0abb0f0 = $this->env->getExtension("native_profiler");
        $__internal_660d6c2faeffe477fa66ab4f253fa06c4b3bf44a9b8100dd468be256a0abb0f0->enter($__internal_660d6c2faeffe477fa66ab4f253fa06c4b3bf44a9b8100dd468be256a0abb0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_660d6c2faeffe477fa66ab4f253fa06c4b3bf44a9b8100dd468be256a0abb0f0->leave($__internal_660d6c2faeffe477fa66ab4f253fa06c4b3bf44a9b8100dd468be256a0abb0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
