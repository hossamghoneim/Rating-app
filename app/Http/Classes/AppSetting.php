<?php

namespace App\Http\Classes;

class AppSetting
{
   private $settingsFile;
   private $settings;

   function __construct() // initialize settingsFile ( string ) && initialize settings array variables
   {
       $this->settingsFile = $this->getFile();
       $this->settings     = json_decode($this->settingsFile,true);
   }

   public function get( $key = null ) // get setting with specific key or get all settings if the key is null
   {

       if ( $key )
           return $this->settings[$key] ?? null;
       else
           return $this->settings;

   }

    public function set($key,$value) // set a new key with the given value
    {

        $this->settings[$key] = $value;
        $this->saveFile();
        return $this->settings;

    }

    public function remove($key) // remove the entry with the given key ( return null if the key not exist else return the entire array)
    {
        if (array_key_exists($key , $this->settings)) {
            unset($this->settings[$key]);
            $this->saveFile();
            return $this->settings;
        }

        return null;

    }

    private function getFile() : string // get the file content ( string )
    {
        $filePath = public_path('settings.json');
        return file_get_contents( $filePath );
    }

    private function saveFile() // decode the file content and overwrite the old content
    {
        $filePath    = public_path('settings.json');
        $fileContent = json_encode( $this->settings );
        file_put_contents( $filePath , $fileContent );
    }
}
