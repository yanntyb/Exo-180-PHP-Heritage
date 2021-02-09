<?php


class Habitation
{
    private string $pays;
    private string $ville;
    private int $postal;
    private int $chambre;
    private int $pieces;

    /**
     * Habitation constructor.
     * @param string $pays
     * @param string $ville
     * @param int $postal
     * @param int $chambre
     * @param int $pieces
     */
    public function __construct(string $pays, string $ville, int $postal, int $chambre, int $pieces)
    {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setPostal($postal);
        $this->setChambre($chambre);
        $this->setPieces($pieces);
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getPostal(): int
    {
        return $this->postal;
    }

    /**
     * @param int $postal
     */
    public function setPostal(int $postal): void
    {
        $this->postal = $postal;
    }

    /**
     * @return int
     */
    public function getChambre(): int
    {
        return $this->chambre;
    }

    /**
     * @param int $chambre
     */
    public function setChambre(int $chambre): void
    {
        $this->chambre = $chambre;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }



}