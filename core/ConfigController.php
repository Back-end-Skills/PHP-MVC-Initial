<?php
    namespace Core;
    class ConfigController {

        public function __construct() {
          $url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        
          echo $url;
        }
    }