<?php

namespace Controllers;

require_once '..\Models\DBConnectionProvider.php';
require_once '..\Models\Interfaces\IReservaController.php';
require_once '..\Models\ReservaManager.php';
require_once '..\Views\ReservationView.php';

use Models\Interfaces\IReservaController;
use DbConnectionProvider;
use Models\ReservaManager;
use Views\ReservationView;

class ReservaController implements IReservaController
{
    private DbConnectionProvider $connectionProvider;
    private ReservaManager $reservaManager;
    private ReservationView $reservaView;

    public function __construct()
    {
        $this->connectionProvider = new DbConnectionProvider();
        $this->reservaManager = new ReservaManager($this->connectionProvider);
        $this->reservaView = new ReservationView();
    }

    public function GetAll(): void
    {
        $reservas = $this->reservaManager->GetAll();

        $this->reservaView->GetAll($reservas);
    }

    public function GetReserva(string $reservationId):void
    {
        $reserva = $this->reservaManager->GetReserva($reservationId);

        $this->reservaView->GetReservation($reserva);

    }

    public function GetUserReservas(string $userID):void
    {
        // TODO: Implement GetUserReservas() method.
    }

    public function Add(): void
    {
        $hardware = $this->reservaManager->GetHardware();
        $this->reservaView->Add($hardware);
    }

    public function GetDeleteReservation(string $reservationId): void
    {
       echo $this->reservaView->DeleteReservation();
    }
}