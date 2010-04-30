<?php

namespace Documents;

/** @Document */
class Profile
{
    /** @Field(id=true) */
    private $id;

    /** @Field */
    private $name;

    public function getId()
    {
      return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}