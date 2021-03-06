<?php

namespace TickTackk\ReportReasons\Finder;

use XF\Mvc\Entity\Finder;

/**
 * Class ReportReason
 *
 * @package TickTackk\ReportReasons\Finder
 */
class ReportReason extends Finder
{
    /**
     * @return $this
     */
    public function isNotDefaultReason() : self
    {
        $this->where('reason_id', '<>', 0);

        return $this;
    }

    /**
     * @return $this
     */
    public function isActive() : self
    {
        $this->where('active', true);

        return $this;
    }
}