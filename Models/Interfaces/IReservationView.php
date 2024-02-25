<?php namespace Models\Interfaces;

interface IReservationView
{
    public function GetAll(array $reservas):void;
    public function GetReservation($reserva):void;
    public function  GetUserReservation():void;
    public function Add($hardware):void;
    public function DeleteReservation():string;
}