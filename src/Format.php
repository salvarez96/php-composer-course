<?php

namespace Text;

class Format
{
  public static function toUpper(string $text)
  {
    return strtoupper($text);
  }

  public static function toLower(string $text)
  {
    return strtolower($text);
  }
}