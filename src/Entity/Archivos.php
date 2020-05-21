<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArchivosRepository")
 */
class Archivos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * Uno o varios archivos sólo se relacionan con un usuario
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuarios", inversedBy="archivos")
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2)
     */
    private $size;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $borrado;

    /**
     * Archivos constructor.
     */
    public function __construct()
    {
        $this->fecha = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size =$size;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getBorrado(): ?string
    {
        return $this->borrado;
    }

    public function setBorrado(?string $borrado): self
    {
        $this->borrado = $borrado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
        
    }
}