<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_300bc932e4eabfcd899e330cbaef1747398dbd9cf7d42efdeef1ddef5f7bbea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17423588b4c6d29da7defa212874adc1ee6dc876dfc162537cea8b4958bfddb2 = $this->env->getExtension("native_profiler");
        $__internal_17423588b4c6d29da7defa212874adc1ee6dc876dfc162537cea8b4958bfddb2->enter($__internal_17423588b4c6d29da7defa212874adc1ee6dc876dfc162537cea8b4958bfddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17423588b4c6d29da7defa212874adc1ee6dc876dfc162537cea8b4958bfddb2->leave($__internal_17423588b4c6d29da7defa212874adc1ee6dc876dfc162537cea8b4958bfddb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_593a86fa929e87cb8f76716fa43cd01b0bfeb6f77b6997c44a1a13862e72f164 = $this->env->getExtension("native_profiler");
        $__internal_593a86fa929e87cb8f76716fa43cd01b0bfeb6f77b6997c44a1a13862e72f164->enter($__internal_593a86fa929e87cb8f76716fa43cd01b0bfeb6f77b6997c44a1a13862e72f164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_593a86fa929e87cb8f76716fa43cd01b0bfeb6f77b6997c44a1a13862e72f164->leave($__internal_593a86fa929e87cb8f76716fa43cd01b0bfeb6f77b6997c44a1a13862e72f164_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c74a7dfa59e65c86ff31a9a9d84ea4fa9361fd1b6846934a0d4a24ce9ff9d1c = $this->env->getExtension("native_profiler");
        $__internal_6c74a7dfa59e65c86ff31a9a9d84ea4fa9361fd1b6846934a0d4a24ce9ff9d1c->enter($__internal_6c74a7dfa59e65c86ff31a9a9d84ea4fa9361fd1b6846934a0d4a24ce9ff9d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c74a7dfa59e65c86ff31a9a9d84ea4fa9361fd1b6846934a0d4a24ce9ff9d1c->leave($__internal_6c74a7dfa59e65c86ff31a9a9d84ea4fa9361fd1b6846934a0d4a24ce9ff9d1c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f88fc7bb5cd3a7d0823098d119c424b26978b0de7e11273ca0337dd694a9b03d = $this->env->getExtension("native_profiler");
        $__internal_f88fc7bb5cd3a7d0823098d119c424b26978b0de7e11273ca0337dd694a9b03d->enter($__internal_f88fc7bb5cd3a7d0823098d119c424b26978b0de7e11273ca0337dd694a9b03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f88fc7bb5cd3a7d0823098d119c424b26978b0de7e11273ca0337dd694a9b03d->leave($__internal_f88fc7bb5cd3a7d0823098d119c424b26978b0de7e11273ca0337dd694a9b03d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
