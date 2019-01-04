<?php

class Partial_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
        new Twig_Filter("include_component_slot", "include_component_slot"),
        new Twig_Filter("get_component_slot", "get_component_slot"),
        new Twig_Filter("has_component_slot", "has_component_slot"),
        new Twig_Filter("include_component", "include_component"),
        new Twig_Filter("get_component", "get_component"),
        new Twig_Filter("include_partial", "include_partial"),
        new Twig_Filter("get_partial", "get_partial", array('is_safe' => array('html'))),
        new Twig_Filter("slot", "slot"),
        new Twig_Filter("end_slot", "end_slot"),
        new Twig_Filter("has_slot", "has_slot"),
        new Twig_Filter("include_slot", "include_slot"),
        new Twig_Filter("get_slot", "get_slot"),
    );
  }
}
