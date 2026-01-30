<?php
abstract class Language
{
    abstract public function getLanguage($name);
}

class Hindi extends Language
{
    public function getLanguage($name)
    {
        echo " $name Extends by Langauge class.\n";
    }
}
$hindi = new Hindi();
$hindi->getLanguage("eng");
