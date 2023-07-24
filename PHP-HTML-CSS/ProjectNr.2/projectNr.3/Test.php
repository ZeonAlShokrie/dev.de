<?php

class Test
{
    private string $name;
    private string $cat;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCat(): string
    {
        return $this->cat;
    }

    /**
     * @param string $cat
     */
    public function setCat(string $cat): void
    {
        $this->cat = $cat;
    }

}