<?php
namespace Plexo\Sdk\Models;

class ExpressCheckoutSettingsDto extends ModelsBase
{
    /**
     * @var DisplayOptionsDto $Display
     */
    
    protected $data = [
        'Display' => null,
    ];
    
    public static function getValidationMetadata()
    {
        return [
            'Display' => [
                'type' => 'class',
                'class' => 'DisplayOptionsDto',
                'required' => false,
            ],
        ];
    }
}