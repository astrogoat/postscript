<?php

namespace Astrogoat\Postscript\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class   PostscriptSettings extends AppSettings
{
     public string $shop_id;

    public function rules(): array
    {
        return [
            'shop_id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Postscript.';
    }

    public static function group(): string
    {
        return 'postscript';
    }
}
