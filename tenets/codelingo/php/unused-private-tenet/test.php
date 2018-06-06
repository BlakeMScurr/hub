<?php
class UnusedPrivateField extends AbstractRule implements ClassAware
{
    private $fields = array();
    private $unusedtestvar = array(); // THIS IS AN ISSUE
    public $publlicunusedtestvar = array();

    private function collectUnusedPrivateFields(ClassNode $class)
    {
        $this->fields = array();
        $this->collectPrivateFields($class);
        $this->removeUsedFields($class);
        return $this->fields;
    }
}