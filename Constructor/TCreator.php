<?php

namespace Hleb\Constructor;

class TCreator
{
    private $contentData = "";

    private $teplateData = [];

    function __construct( $content, $data = [])
   {
       $this->contentData = $content;

       $this->teplateData = $data;
   }

   public function include()
   {
       extract($this->teplateData);

       require $this->contentData;

   }

    public function print()
    {
        extract($this->teplateData);

        print $this->contentData;

    }
}

