<?php

if (!function_exists('toUpper')) {
  function toUpper(string $text)
  {
    return Text\Format::toUpper($text);
  }
}

if (!function_exists('toLower')) {
  function toLower(string $text)
  {
    return Text\Format::toLower($text);
  }
}