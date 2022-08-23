<?php

namespace App\Interfaces;

interface ShowTimeRepositoryInterface
{

    public function FindAllShowTimes();

    public function FindShowTimeByShowTimeStartDateAndShowTimeEndDate($time_from,$time_to);

    public function FindPriceByShowTimeStartDateAndShowTimeEndDate($time_from,$time_to);

    public function FindShowTimes();
}
