<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class CalcularDataVencimentoController extends Controller
{
    static public function calcularDataVencimento() {
        $dias_uteis = 5;
    
        $dias_somados = 0;
    
        $data = new DateTime();
    
        $dia_semana = $data->format('N');
        if ($dia_semana > 5) {
            $dias_a_adiantar = 8 - $dia_semana;
            $data->add(new DateInterval('P' . $dias_a_adiantar . 'D'));
        }
    
        while ($dias_somados < $dias_uteis) {
            $data->add(new DateInterval('P1D'));
    
            $dia_semana = $data->format('N');
            if ($dia_semana < 6) {
                $dias_somados++;
            }
        }
    
        return $data->format('Y-m-d');
    }
}
