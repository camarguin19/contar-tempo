<?php

function url(string $url1): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO); 

    if (str_starts_with($url1, '/')){
        return $ambiente.$url1;
    }
    return $ambiente.'/'.$url1;

}
function localhost():bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if ($servidor == 'localhost') {
        return true;
    }
    return false;
}
function validarUrl(string $url): bool
{
   if (mb_strlen($url) <= 10) {
    return false;
   }
   if (!str_contains($url, '.')) {
    return false;
   }
   if (str_contains($url,'http://') or str_contains($url, 'https://')) {
    return true;
   }
}

function validarUrlComFiltro(string $url) : bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}
/*function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

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
}*/ 
