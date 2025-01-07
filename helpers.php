<?php
function contarTempo(string $data)
{

    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $mes = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : ' há ' . $minutos . ' minutos ';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : ' há ' . $horas . ' horas ';
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'ontem' : ' há ' . $dias . ' dias ';
    } elseif ($semanas <= 30) {
        return $semanas == 1 ? 'há 1 semana' : ' há ' . $semanas . ' semanas ';
    } elseif ($mes <= 12) {
        return $mes == 1 ? 'há 1 mês' : ' há ' . $mes . ' mês ';
    } else {
        return $anos == 1 ? 'há 1 ano' : ' há ' . $anos . ' anos ';}
}
