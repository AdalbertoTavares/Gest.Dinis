<?php namespace Models\Entities;

use DateTime;

class Reserva
{
    public string $EmployeeId;
    public string $HardwareId;
    public string $Observation;
    public DateTime $StartDate;
    public DateTime $EndDate;

}
