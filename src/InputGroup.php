<?php

namespace Silverhand7\InputGroup;

use Laravel\Nova\Fields\Field;

class InputGroup extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'input-group';

    public function addonPosition($position = 'left')
    {
        return $this->withMeta([
            'addonPosition' => $position,
        ]);
    }

    public function addonText($text = '')
    {
        return $this->withMeta([
            'addonText' => $text
        ]);
    }
}
