<?php

namespace SilverStripe\Forms;

class SelectionGroup_Item extends CompositeField
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $title;

    /**
     * @param string $value Form field identifier
     * @param FormField|array $fields Contents of the option
     * @param string $title Title to show for the radio button option
     */
    public function __construct($value, $fields = null, $title = null)
    {
        $this->setValue($value);
        if ($fields && !is_array($fields)) {
            $fields = [$fields];
        }

        parent::__construct($fields);

        $this->setTitle($title ?: $value);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($Value, $data = null)
    {
        $this->value = $Value;
        return $this;
    }
}
