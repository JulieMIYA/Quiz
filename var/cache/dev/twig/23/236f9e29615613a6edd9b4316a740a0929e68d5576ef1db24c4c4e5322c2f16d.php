<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1200d8c828ef6017c2335e875d08a8152955f801d4bd1801c8b0310e2374ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9497e972343357bb9cc5e22446e490f4f38209f86cc12a10e472b85513177d70 = $this->env->getExtension("native_profiler");
        $__internal_9497e972343357bb9cc5e22446e490f4f38209f86cc12a10e472b85513177d70->enter($__internal_9497e972343357bb9cc5e22446e490f4f38209f86cc12a10e472b85513177d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9497e972343357bb9cc5e22446e490f4f38209f86cc12a10e472b85513177d70->leave($__internal_9497e972343357bb9cc5e22446e490f4f38209f86cc12a10e472b85513177d70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45dcd5564d2cd947d694857cb7665be8cffcdfb54e8011270395983f503684c9 = $this->env->getExtension("native_profiler");
        $__internal_45dcd5564d2cd947d694857cb7665be8cffcdfb54e8011270395983f503684c9->enter($__internal_45dcd5564d2cd947d694857cb7665be8cffcdfb54e8011270395983f503684c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45dcd5564d2cd947d694857cb7665be8cffcdfb54e8011270395983f503684c9->leave($__internal_45dcd5564d2cd947d694857cb7665be8cffcdfb54e8011270395983f503684c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a6319d3503b926f3a3f502cc7ab7775cdbf6a367b8f322e1579027746d02a2f = $this->env->getExtension("native_profiler");
        $__internal_1a6319d3503b926f3a3f502cc7ab7775cdbf6a367b8f322e1579027746d02a2f->enter($__internal_1a6319d3503b926f3a3f502cc7ab7775cdbf6a367b8f322e1579027746d02a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a6319d3503b926f3a3f502cc7ab7775cdbf6a367b8f322e1579027746d02a2f->leave($__internal_1a6319d3503b926f3a3f502cc7ab7775cdbf6a367b8f322e1579027746d02a2f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8760246739e5c510271d80d99a4dd78c45c13d75ee382a4587f31e41a739bddb = $this->env->getExtension("native_profiler");
        $__internal_8760246739e5c510271d80d99a4dd78c45c13d75ee382a4587f31e41a739bddb->enter($__internal_8760246739e5c510271d80d99a4dd78c45c13d75ee382a4587f31e41a739bddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8760246739e5c510271d80d99a4dd78c45c13d75ee382a4587f31e41a739bddb->leave($__internal_8760246739e5c510271d80d99a4dd78c45c13d75ee382a4587f31e41a739bddb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
