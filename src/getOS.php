<?php

namespace insign;

/**
 * Created by PhpStorm.
 * User: helio
 * Date: 10/01/17
 * Time: 15:35
 */
class getOS
{
   const UNKNOWN = 1;
   const WIN = 2;
   const LINUX = 3;
   const OSX = 4;

   /**
    * @return int
    */
   static public function ofServer()
   {
      switch (TRUE) {
         case stristr(PHP_OS, 'DAR'):
            return self::OSX;
         case stristr(PHP_OS, 'WIN'):
            return self::WIN;
         case stristr(PHP_OS, 'LINUX'):
            return self::LINUX;
         default :
            return self::UNKNOWN;
      }
   }
}