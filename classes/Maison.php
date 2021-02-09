<?php


class Maison extends Habitation
{
    private bool $jardin;
    private int $etages;
    private bool $garages;

    /**
     * Maison constructor.
     * @param bool $jardin
     * @param int $etages
     * @param bool $garages
     */
    public function __construct(string $pays, string $ville, int $postal, int $chambre, int $pieces, bool $jardin, int $etages, bool $garages)
    {
        parent::__construct($pays,$ville,$postal,$chambre,$pieces);
        $this->setJardin($jardin);
        $this->setEtages($etages);
        $this->setGarages($garages);
    }


    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function isGarages(): bool
    {
        return $this->garages;
    }

    /**
     * @param bool $garages
     */
    public function setGarages(bool $garages): void
    {
        $this->garages = $garages;
    }


}