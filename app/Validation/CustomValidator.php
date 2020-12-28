<?php

namespace App\Validation;

class CustomValidator
{
    public function validateExtensionCfg($attribute, $value, $parameters)
    {
        $fileName = $value->getClientOriginalName();
        $extension = \File::extension($fileName);
        if($extension === 'cfg')
        {
            return true;
        }
        return false;
    }
}