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

    public function addonPosition(String $position = 'left')
    {
        return $this->withMeta([
            'addonPosition' => $position,
        ]);
    }

    public function addonText(String $text = '')
    {
        return $this->withMeta([
            'addonText' => $text
        ]);
    }

    public function addonDisplayIndex(Bool $bool = true)
    {
        return $this->withMeta([
            'addonDisplayIndex' => $bool
        ]);
    }
}
