<?php

namespace App\functions;

function errorHandler($code, $message, $file, $line)
{
    throw new \Exception("$message - Error from $file, l.$line", $code);
}

function exceptionToHtml(\Throwable $exception)
{
    $html  = '<div style="font-family:monospace;color:darkred;background-color:#eae8e4;';
    $html .= 'border:1px solid;padding:1em;margin:1em auto;max-width:500px;word-break:break-all;">';
    $html .= '<h3 style="color:darkred;margin-top:0;">Exception ';
    $html .= '<span style="font-weight:normal">(\\'.get_class($exception).')</span></h3><p>';
    $html .= '<p>'.$exception->getMessage().'</p>';
    $html .= '<p style="color:#885858;margin-bottom:0;font-size:.85em;">Throwed in '.$exception->getFile();
    $html .= ', l.'.$exception->getLine().'</p>';
    $html .= '</div>';

    if ($previous = $exception->getPrevious()) 
        $html = $html.exceptionToHtml($previous);

    return $html;
}