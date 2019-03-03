<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procat_info
 *
 * @ORM\Table(name="procat_info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Procat_infoRepository")
 */
class Procat_info
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_first", type="string", length=100)
     */
    private $clientFirst;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_last", type="string", length=100)
     */
    private $clientLast;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_och", type="string", length=100)
     */
    private $clientOch;

    /**
     * @var string
     *
     * @ORM\Column(name="Marka_avto", type="string", length=100)
     */
    private $markaAvto;

    /**
     * @var string
     *
     * @ORM\Column(name="Model_avto", type="string", length=100)
     */
    private $modelAvto;

    /**
     * @var string
     *
     * @ORM\Column(name="Tochka", type="string", length=100)
     */
    private $tochka;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_go", type="datetime")
     */
    private $dataGo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_finish", type="datetime")
     */
    private $dataFinish;

    /**
     * @var string
     *
     * @ORM\Column(name="Number_avto", type="string")
     */
    private $numberAvto;


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
     * Set clientFirst
     *
     * @param string $clientFirst
     *
     * @return Procat_info
     */
    public function setClientFirst($clientFirst)
    {
        $this->clientFirst = $clientFirst;

        return $this;
    }

    /**
     * Get clientFirst
     *
     * @return string
     */
    public function getClientFirst()
    {
        return $this->clientFirst;
    }

    /**
     * Set clientLast
     *
     * @param string $clientLast
     *
     * @return Procat_info
     */
    public function setClientLast($clientLast)
    {
        $this->clientLast = $clientLast;

        return $this;
    }

    /**
     * Get clientLast
     *
     * @return string
     */
    public function getClientLast()
    {
        return $this->clientLast;
    }

    /**
     * Set clientOch
     *
     * @param string $clientOch
     *
     * @return Procat_info
     */
    public function setClientOch($clientOch)
    {
        $this->clientOch = $clientOch;

        return $this;
    }

    /**
     * Get clientOch
     *
     * @return string
     */
    public function getClientOch()
    {
        return $this->clientOch;
    }

    /**
     * Set markaAvto
     *
     * @param string $markaAvto
     *
     * @return Procat_info
     */
    public function setMarkaAvto($markaAvto)
    {
        $this->markaAvto = $markaAvto;

        return $this;
    }

    /**
     * Get markaAvto
     *
     * @return string
     */
    public function getMarkaAvto()
    {
        return $this->markaAvto;
    }

    /**
     * Set modelAvto
     *
     * @param string $modelAvto
     *
     * @return Procat_info
     */
    public function setModelAvto($modelAvto)
    {
        $this->modelAvto = $modelAvto;

        return $this;
    }

    /**
     * Get modelAvto
     *
     * @return string
     */
    public function getModelAvto()
    {
        return $this->modelAvto;
    }

    /**
     * Set tochka
     *
     * @param string $tochka
     *
     * @return Procat_info
     */
    public function setTochka($tochka)
    {
        $this->tochka = $tochka;

        return $this;
    }

    /**
     * Get tochka
     *
     * @return string
     */
    public function getTochka()
    {
        return $this->tochka;
    }

    /**
     * Set dataGo
     *
     * @param \DateTime $dataGo
     *
     * @return Procat_info
     */
    public function setDataGo($dataGo)
    {
        $this->dataGo = $dataGo;

        return $this;
    }

    /**
     * Get dataGo
     *
     * @return \DateTime
     */
    public function getDataGo()
    {
        return $this->dataGo;
    }

    /**
     * Set dataFinish
     *
     * @param \DateTime $dataFinish
     *
     * @return Procat_info
     */
    public function setDataFinish($dataFinish)
    {
        $this->dataFinish = $dataFinish;

        return $this;
    }

    /**
     * Get dataFinish
     *
     * @return \DateTime
     */
    public function getDataFinish()
    {
        return $this->dataFinish;
    }

    /**
     * Set numberAvto
     *
     * @param string $numberAvto
     *
     * @return Procat_info
     */
    public function setNumberAvto($numberAvto)
    {
        $this->numberAvto= $numberAvto;

        return $this;
    }




    /**
     * Get numberAvto
     *
     * @return string
     */
    public function getNumberAvto()
    {
        return $this->numberAvto;
    }

}



