<?php

namespace crudBundle\Entity;

/**
 * usuario
 */
class usuario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apPat;

    /**
     * @var string
     */
    private $apMat;

    /**
     * @var int
     */
    private $edad;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apPat
     *
     * @param string $apPat
     *
     * @return usuario
     */
    public function setApPat($apPat)
    {
        $this->apPat = $apPat;

        return $this;
    }

    /**
     * Get apPat
     *
     * @return string
     */
    public function getApPat()
    {
        return $this->apPat;
    }

    /**
     * Set apMat
     *
     * @param string $apMat
     *
     * @return usuario
     */
    public function setApMat($apMat)
    {
        $this->apMat = $apMat;

        return $this;
    }

    /**
     * Get apMat
     *
     * @return string
     */
    public function getApMat()
    {
        return $this->apMat;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }
}
