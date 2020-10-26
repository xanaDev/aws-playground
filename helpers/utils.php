<?php

if (! function_exists('config')) {
  /**
   * Load environment variable by key
   * 
   * @return string
   */
  function config(string $key): string
  {
    return $_ENV[$key];
  }
}

if (! function_exists('render_error')) {
  /**
   * Render the error
   */
  function render_error(string $error)
  {
    var_dump($error);
  }
}