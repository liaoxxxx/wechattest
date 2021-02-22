<?php


class TypeTest
{
   protected string $name='TypeTest';

   public  function __construct()
   {
       echo $this->name.PHP_EOL;
   }
}


new TypeTest();
