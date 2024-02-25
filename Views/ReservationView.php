<?php namespace Views;

require_once '..\Models\Interfaces\IReservationView.php';

use Models\Interfaces\IReservationView;

class ReservationView implements IReservationView{

    public function GetAll(array $reservas):void
    {
        echo '<table class="table table-striped table-light table-reserves">
                <thead>
                    <tr class="table-header-container">
                        <th scope="col">Equipamento</th>
                        <th scope="col">PRofessor</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Data Emprestimo</th>
                        <th scope="col">Data Entrega</th>
                        <th scope="col"></th>
                    </tr>
              </thead>';
        echo '<tbody>';

        foreach ($reservas as $reserva)
        {
            echo '<tr>';
            echo '<th>'.$reserva->Name.'</th>';
            echo '<td>'.$reserva->FullName.'</td>';
            echo '<td>'.$reserva->Observation.'</td>';
            echo '<td>'.$reserva->IsActive.'</td>';
            echo '<td>'.$reserva->StartDate.'</td>';
            echo '<td>'.$reserva->EndDate.'</td>';
            echo '<td><a href="../Pages/EditReserva.php?reservaId='.$reserva->Id.'">Editar</a>
                    <a href="../Pages/ApagarReserva.php?reservaId='.$reserva->Id.'"">Apagar</a></td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
    public function GetReservation($reserva):void
    {
        $view = <<<HTML
                <div class="mb-3 container-form-edit-reserva">
                    <form class="form-edit-reserva">
                        <div class="mb-3">
                            <label  for="professorName" class="form-label">Professor</label>
                            <input id="professorName" value='$reserva->FullName' name="professorName" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label  for="hardwareId" class="form-label">Hardware</label>
                            <input id="hardwareId" value='$reserva->Name'  class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label  for="observationId" class="form-label">Observação</label>
                            <input id="observationId" value='$reserva->Observation' class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label  for="dateEndId" class="form-label">Data Fim</label>
                            <input id="dateEndId" value='$reserva->EndDate' class="form-control" type="datetime-local"/>
                        </div>    
                        <div class="mb-3 d-grid gap-2">
                            <input type="submit" value="Guardar" class="btn btn-primary mb-3" />
                        </div>
                        <div class="mb-3 d-grid gap-2">
                            <a href="../Views/Admin.php" class="btn btn-info link-go-admin">Voltar</a>
                        </div>
                    </form>
                </div>
                HTML;

        echo $view;
    }

    public function GetUserReservation():void
    {
        // TODO: Implement GetUserReservas() method.
    }

    public function Add($hardware): void
    {
        $employeeName = "Douglas Valdo";//$_SESSION['EmployeeName'];
        $employeeId = 1;//$_SESSION['EmployeeID'];
        $hardwareList = $this->ListHardware($hardware);

        $viewAddReservation = <<<HTML
            
            <div class="md-3 container-add-reservation">
                <form>
                    <div class="md-3 d-grid gap-2">
                        <label for="EmployeeName" class="form-label">Funcionario: </label>
                        <input readonly value="$employeeName" class="form-control" id="EmployeeName"/>
                        <input type="hidden" value="$employeeId" />
                    </div>
                    <div class="md-3 d-grid gap-2">
                        <label for="Hardware" class="form-label">Hardware: </label>
                        <select name="hardware" id="Hardware" class="form-control">$hardwareList</select>
                    </div>
                     <div class="md-3 d-grid gap-2">
                        <label for="Observation" class="form-label">Observações: </label>
                        <textarea rows="5" cols="2" id="Observation" class="form-control"></textarea>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                            <input type="submit" value="Reservar" class="btn btn-primary mb-3 btn-add-reservation" />
                    </div>
                </form>
            </div>
                            
        HTML;

        echo $viewAddReservation;
    }

    private function ListHardware($hardware):string
    {
        $view = "";

        foreach ($hardware as $element)
            $view .= "<option value='".$element->Id."'>".$element->Name."</option>";

        return $view;
    }

    public function DeleteReservation():string
    {
       return <<<HTML
            <div>
                <label> Do you confirm delete Reservation? </label>
                <input type="button" value="Apagar">
                <input type="button" value="Cancelar">
            </div>        
        
        HTML;
    }
}

