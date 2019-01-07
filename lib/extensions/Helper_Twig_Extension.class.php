<?php

class Helper_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
        new Twig_Filter("use_helper", "use_helper"),
    );
  }
}
