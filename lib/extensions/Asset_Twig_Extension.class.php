<?php

class Asset_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
        new Twig_Filter("auto_discovery_link_tag", "auto_discovery_link_tag"),
        new Twig_Filter("javascript_path", "javascript_path"),
        new Twig_Filter("javascript_include_tag", "javascript_include_tag"),
        new Twig_Filter("stylesheet_path", "stylesheet_path"),
        new Twig_Filter("stylesheet_tag", "stylesheet_tag"),
        new Twig_Filter("use_stylesheet", "use_stylesheet"),
        new Twig_Filter("use_javascript", "use_javascript"),
        new Twig_Filter("decorate_with", "decorate_with"),
        new Twig_Filter("image_path", "image_path"),
        new Twig_Filter("image_tag", "image_tag"),
        new Twig_Filter("include_metas", "include_metas"),
        new Twig_Filter("include_http_metas", "include_http_metas"),
        new Twig_Filter("include_title", "include_title"),
        new Twig_Filter("get_javascripts", "get_javascripts"),
        new Twig_Filter("include_javascripts", "include_javascripts"),
        new Twig_Filter("get_stylesheets", "get_stylesheets"),
        new Twig_Filter("include_stylesheets", "include_stylesheets"),
        new Twig_Filter("dynamic_javascript_include_tag", "dynamic_javascript_include_tag"),
        new Twig_Filter("use_dynamic_javascript", "use_dynamic_javascript"),
        new Twig_Filter("use_dynamic_stylesheet", "use_dynamic_stylesheet"),
        new Twig_Filter("get_javascripts_for_form", "get_javascripts_for_form"),
        new Twig_Filter("include_javascripts_for_form", "include_javascripts_for_form"),
        new Twig_Filter("get_stylesheets_for_form", "get_stylesheets_for_form"),
        new Twig_Filter("include_stylesheets_for_form", "include_stylesheets_for_form"),
    );
  }
}
