<?php

namespace Sumatra\Type;

class Vermittler_einwilligung_argument
{

    /**
     * @var string
     */
    private $sumatra_id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $begruendung;

    /**
     * @var bool
     */
    private $dienstleister;

    /**
     * @var bool
     */
    private $newsletter;

    /**
     * @var bool
     */
    private $unternehmensgruppe;

    /**
     * @var string
     */
    private $anrede;

    /**
     * @var string
     */
    private $zuname;

    /**
     * @return string
     */
    public function getSumatra_id()
    {
        return $this->sumatra_id;
    }

    /**
     * @param string $sumatra_id
     * @return Vermittler_einwilligung_argument
     */
    public function withSumatra_id($sumatra_id)
    {
        $new = clone $this;
        $new->sumatra_id = $sumatra_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Vermittler_einwilligung_argument
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getBegruendung()
    {
        return $this->begruendung;
    }

    /**
     * @param string $begruendung
     * @return Vermittler_einwilligung_argument
     */
    public function withBegruendung($begruendung)
    {
        $new = clone $this;
        $new->begruendung = $begruendung;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDienstleister()
    {
        return $this->dienstleister;
    }

    /**
     * @param bool $dienstleister
     * @return Vermittler_einwilligung_argument
     */
    public function withDienstleister($dienstleister)
    {
        $new = clone $this;
        $new->dienstleister = $dienstleister;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param bool $newsletter
     * @return Vermittler_einwilligung_argument
     */
    public function withNewsletter($newsletter)
    {
        $new = clone $this;
        $new->newsletter = $newsletter;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUnternehmensgruppe()
    {
        return $this->unternehmensgruppe;
    }

    /**
     * @param bool $unternehmensgruppe
     * @return Vermittler_einwilligung_argument
     */
    public function withUnternehmensgruppe($unternehmensgruppe)
    {
        $new = clone $this;
        $new->unternehmensgruppe = $unternehmensgruppe;

        return $new;
    }

    /**
     * @return string
     */
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * @param string $anrede
     * @return Vermittler_einwilligung_argument
     */
    public function withAnrede($anrede)
    {
        $new = clone $this;
        $new->anrede = $anrede;

        return $new;
    }

    /**
     * @return string
     */
    public function getZuname()
    {
        return $this->zuname;
    }

    /**
     * @param string $zuname
     * @return Vermittler_einwilligung_argument
     */
    public function withZuname($zuname)
    {
        $new = clone $this;
        $new->zuname = $zuname;

        return $new;
    }


}

