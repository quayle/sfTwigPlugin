<?php

class Url_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
        new Twig_Filter("link_to2", "link_to2"),
        new Twig_Filter("link_to1", "link_to1"),
        new Twig_Filter("url_for2", "url_for2"),
        new Twig_Filter("url_for1", "url_for1"),
        new Twig_Filter("url_for", "url_for"),
        new Twig_Filter("link_to", "link_to"),
        new Twig_Filter("url_for_form", "url_for_form"),
        new Twig_Filter("form_tag_for", "form_tag_for"),
        new Twig_Filter("link_to_if", "link_to_if"),
        new Twig_Filter("link_to_unless", "link_to_unless"),
        new Twig_Filter("public_path", "public_path"),
        new Twig_Filter("button_to", "button_to"),
        new Twig_Filter("mail_to", "mail_to"),
    );
  }
}
