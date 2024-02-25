<?php namespace Models\Interfaces;

interface IReservaController
{
    public function GetAll();
    public function GetReserva(string $reservationId):void;
    public function  GetUserReservas(string $userID):void;
    public function Add():void;
    public function GetDeleteReservation(string $reservationId):void;
}