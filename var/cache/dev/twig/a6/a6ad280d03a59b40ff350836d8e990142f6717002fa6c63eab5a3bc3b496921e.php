<?php

/* base.html.twig */
class __TwigTemplate_20264a761c071a1263b4459df2ffa59ec0fdfc549def1623a05c432ea5ab5bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac6ba3a643df74e2d674835eb6b7e63c1c13fe9f8a8bb171f93617689bb3cb35 = $this->env->getExtension("native_profiler");
        $__internal_ac6ba3a643df74e2d674835eb6b7e63c1c13fe9f8a8bb171f93617689bb3cb35->enter($__internal_ac6ba3a643df74e2d674835eb6b7e63c1c13fe9f8a8bb171f93617689bb3cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ac6ba3a643df74e2d674835eb6b7e63c1c13fe9f8a8bb171f93617689bb3cb35->leave($__internal_ac6ba3a643df74e2d674835eb6b7e63c1c13fe9f8a8bb171f93617689bb3cb35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e2405882b1eb0be611473f43a1661c0ae1b17f7008a1e04809173dcefe200d = $this->env->getExtension("native_profiler");
        $__internal_48e2405882b1eb0be611473f43a1661c0ae1b17f7008a1e04809173dcefe200d->enter($__internal_48e2405882b1eb0be611473f43a1661c0ae1b17f7008a1e04809173dcefe200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48e2405882b1eb0be611473f43a1661c0ae1b17f7008a1e04809173dcefe200d->leave($__internal_48e2405882b1eb0be611473f43a1661c0ae1b17f7008a1e04809173dcefe200d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66ebee196f00ad0c09f7f3f5e57298b59896225959074bda27a3a75bfa11f0c4 = $this->env->getExtension("native_profiler");
        $__internal_66ebee196f00ad0c09f7f3f5e57298b59896225959074bda27a3a75bfa11f0c4->enter($__internal_66ebee196f00ad0c09f7f3f5e57298b59896225959074bda27a3a75bfa11f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_66ebee196f00ad0c09f7f3f5e57298b59896225959074bda27a3a75bfa11f0c4->leave($__internal_66ebee196f00ad0c09f7f3f5e57298b59896225959074bda27a3a75bfa11f0c4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b4665d39e14463dac543408ad8a098fc03995faf32eea0b3ccee847ab7bc29 = $this->env->getExtension("native_profiler");
        $__internal_57b4665d39e14463dac543408ad8a098fc03995faf32eea0b3ccee847ab7bc29->enter($__internal_57b4665d39e14463dac543408ad8a098fc03995faf32eea0b3ccee847ab7bc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57b4665d39e14463dac543408ad8a098fc03995faf32eea0b3ccee847ab7bc29->leave($__internal_57b4665d39e14463dac543408ad8a098fc03995faf32eea0b3ccee847ab7bc29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82d49489e87c0a38635adb9bffc6b49d80dda0aebf2e0af96dcc919ec7ea1176 = $this->env->getExtension("native_profiler");
        $__internal_82d49489e87c0a38635adb9bffc6b49d80dda0aebf2e0af96dcc919ec7ea1176->enter($__internal_82d49489e87c0a38635adb9bffc6b49d80dda0aebf2e0af96dcc919ec7ea1176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82d49489e87c0a38635adb9bffc6b49d80dda0aebf2e0af96dcc919ec7ea1176->leave($__internal_82d49489e87c0a38635adb9bffc6b49d80dda0aebf2e0af96dcc919ec7ea1176_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
