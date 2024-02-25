<?php namespace Models;

require_once '..\Models\Interfaces\IReservaManager.php';

 use DbConnectionProvider;
 use Models\Entities\Reserva;
 use Models\Interfaces\IReservaManager;
 use PDO;

 class ReservaManager implements IReservaManager
{
    private PDO $_connectionProvider;

    public function __construct(DbConnectionProvider $dbProvider)
    {
        $this->_connectionProvider = $dbProvider->GetPDOConnection();
    }

     public function GetAll(): array
     {
         $query = "SELECT h.Name, e.FullName, r.Observation, r.IsActive, r.StartDate, r.EndDate, r.Id  FROM reservation r
                LEFT JOIN hardware h on h.Id = r.HardwareId LEFT JOIN employee e on e.Id = r.EmployeeId";

         $statement = $this->_connectionProvider->prepare($query);

         $statement->execute();

         $result = $statement->fetchAll(PDO::FETCH_OBJ);

         return $result != null ? $result : array();
     }

     public function GetReserva(string $reservaId)
     {
         $query = "SELECT h.Name, e.FullName, r.Observation, r.IsActive, r.StartDate, r.EndDate, r.Id  FROM reservation r
                LEFT JOIN hardware h on h.Id = r.HardwareId LEFT JOIN employee e on e.Id = r.EmployeeId WHERE r.Id = :reservaId";

         $statement = $this->_connectionProvider->prepare($query);

         $statement->bindParam(":reservaId", $reservaId);

         $statement->execute();

         return $statement->fetch(PDO::FETCH_OBJ);
     }

     public function GetUserReservas(string $userID)
     {
         // TODO: Implement GetUserReservas() method.
     }

     public function Add(Reserva $reserva):bool
     {

         $query = "INSERT INTO reservation(EmployeeId, HardwareId, StartDate, EndDate, Observation)
                    VALUES (:employeeId, :hardwareId, :startDate, :endDate, :observation)";

         $statement = $this->_connectionProvider->prepare($query);

         $statement->bindParam(":employeeId",   $reserva->EmployeeId);
         $statement->bindParam(":hardwareId",   $reserva->HardwareId);
         $statement->bindParam(":startDate",    $reserva->StartDate);
         $statement->bindParam(":endDate",      $reserva->EndDate);
         $statement->bindParam(":observation",  $reserva->Observation);

         return $statement->execute();
     }

     public function GetHardware():array
     {
         $query = "SELECT * FROM  hardware";

         $statement = $this->_connectionProvider->prepare($query);

         $statement->execute();

         $result = $statement->fetchAll(PDO::FETCH_OBJ);

         return is_array($result) ? $result : [""];
     }
 }