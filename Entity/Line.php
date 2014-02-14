<?php

namespace CanalTP\MethBundle\Entity;

use CanalTP\MethBundle\Entity\AbstractEntity;

/**
 * Line
 */
class Line extends AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $externalCoverageId;

    /**
     * @var string
     */
    private $externalNetworkId;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $layout;

    /**
     * @var string
     */
    private $twigPath;

    /**
     * @var Array
     */
    private $blocks;

    /**
     * @var Array
     */
    private $stopPoints;

    /**
     * Set id
     *
     * @return Object
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set externalCoverageId
     *
     * @param  string $externalCoverageId
     * @return Line
     */
    public function setExternalCoverageId($externalCoverageId)
    {
        $this->externalCoverageId = $externalCoverageId;

        return $this;
    }

    /**
     * Get externalCoverageId
     *
     * @return string
     */
    public function getExternalCoverageId()
    {
        return $this->externalCoverageId;
    }

    /**
     * Set externalNetworkId
     *
     * @param  string $externalNetworkId
     * @return Line
     */
    public function setExternalNetworkId($externalNetworkId)
    {
        $this->externalNetworkId = $externalNetworkId;

        return $this;
    }

    /**
     * Get externalNetworkId
     *
     * @return string
     */
    public function getExternalNetworkId()
    {
        return $this->externalNetworkId;
    }

    /**
     * Set externalId
     *
     * @param  string $externalId
     * @return Line
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get getExternalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set layout
     *
     * @param  string $layout
     * @return Line
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get getLayout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set blocks
     *
     * @param  array $blocks
     * @return Line
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return array
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Set stopPoints
     *
     * @param  array $stopPoints
     * @return Line
     */
    public function setStopPoints($stopPoints)
    {
        $this->stopPoints = $stopPoints;

        return $this;
    }

    /**
     * Get stopPoints
     *
     * @return array
     */
    public function getStopPoints()
    {
        return $this->stopPoints;
    }

    /**
     * Get twigPath
     *
     * @return string
     */
    public function getTwigPath()
    {
        return ($this->twigPath);
    }

    /**
     * Set twigPath
     *
     * @param  string $twigPath
     * @return Line
     */
    public function setTwigPath($twigPath)
    {
        $this->twigPath = $twigPath;

        return $this;
    }
}