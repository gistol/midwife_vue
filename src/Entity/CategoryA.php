<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryARepository")
 */
class CategoryA
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field1;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field2;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field3;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field4;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field5;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field6;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field7;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field8;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field9;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $field10;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $semester;

    public function getId()
    {
        return $this->id;
    }

    public function getField1()
    {
        return $this->field1;
    }

    public function setField1($field1): self
    {
        $this->field1 = (string)$field1;

        return $this;
    }

    public function getField2()
    {
        return $this->field2;
    }

    public function setField2($field2): self
    {
        $this->field2 = (string)$field2;

        return $this;
    }

    public function getField3()
    {
        return $this->field3;
    }

    public function setField3($field3): self
    {
        $this->field3 = (string)$field3;

        return $this;
    }

    public function getField4()
    {
        return $this->field4;
    }

    public function setField4($field4): self
    {
        $this->field4 = (string)$field4;

        return $this;
    }

    public function getField5()
    {
        return $this->field5;
    }

    public function setField5($field5): self
    {
        $this->field5 = (string)$field5;

        return $this;
    }

    public function getField6()
    {
        return $this->field6;
    }

    public function setField6($field6): self
    {
        $this->field6 = (string)$field6;

        return $this;
    }

    public function getField7()
    {
        return $this->field7;
    }

    public function setField7($field7): self
    {
        $this->field7 = (string)$field7;

        return $this;
    }

    public function getField8()
    {
        return $this->field8;
    }

    public function setField8($field8): self
    {
        $this->field8 = (string)$field8;

        return $this;
    }

    public function getField9()
    {
        return $this->field9;
    }

    public function setField9($field9): self
    {
        $this->field9 = (string)$field9;

        return $this;
    }

    public function getField10()
    {
        return $this->field10;
    }

    public function setField10($field10): self
    {
        $this->field10 = (string)$field10;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSemester(): ?int
    {
        return $this->semester;
    }

    public function setSemester(int $semester): self
    {
        $this->semester = $semester;

        return $this;
    }
}
