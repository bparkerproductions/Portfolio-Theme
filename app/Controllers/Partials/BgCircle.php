<?php

namespace App\Controllers\Partials;

trait BgCircle {
   // Add classes dynamically to the bg-circle element based on the passed properties
   public static function bgCircleClasses($properties) {
    $classes = '';
    $baseClass = 'bg-circle';

    foreach($properties as $property) {
      $classes .= $baseClass . '--' . $property . ' ';
    }

    return $classes;
  }

  // Dynamically add styles to the bg-circle element
  public static function bgCircleStyles(
    $opacity=false,
    $posRight=false,
    $posTop=false,
    $posLeft=false
  ) {
    $styleStr = '';

    if ($opacity) {
      $styleStr .= 'opacity: ' . $opacity . ';';
    }

    if ($posRight) {
      $styleStr .= 'right: ' . $posRight . 'px;';
    }

    if ($posTop) {
      $styleStr .= 'top: ' . $posTop . 'px';
    }

    if ($posLeft) {
      $styleStr .= 'left: ' . $posLeft . 'px';
    }

    return $styleStr;
  }
}