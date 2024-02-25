<?php namespace Models\Interfaces;

use Models\Entities\Reserva;

interface IReservaManager
{
    public function GetAll();
    public function GetReserva(string $reservaId);
    public function  GetUserReservas(string $userID);
    public function Add(Reserva $reserva):bool;
    public function GetHardware():array;
}