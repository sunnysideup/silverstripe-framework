<?php

namespace SilverStripe\Forms;

/**
 * The readonly class for our {@link TimeField}.
 */
class TimeField_Readonly extends TimeField
{
    protected $readonly = true;

    protected $disabled = true;

    public function Type()
    {
        return 'readonly';
    }
}
