
<?php
    
    $general    = array(
        'titulo_web'            => 'Cloud Satelital',
        'llave_sitio'           => 'Y2xvdWRzYXRlbGl0YWwy',
        'cuenta_asociada'       => 'cloudsatelital',
        'instancia_tomcat'      => 'Track?',
        'api_google_maps'       => 'AIzaSyAChB-PPsNIXMNSE9LnZ0TeZyCqCTFW2EE',
        'enlace_plataforma'     => 'http://gps.cloudsatelital.com:8080/track/Track?',
        'enlace_banners'        => 'http://gps.cloudsatelital.com:8080/track/images/banner',
        'country_code'        => '51',
    );

    $empresa    = array(
        'desarrollador'         => 'Cloud Satelital',
        'web_desarrollador'     => 'http://cloudsatelital.com/',
        'whatsapp'              => '51992784444'
    );

    $database   = array(
        'hostname'  => 'localhost',
        'username'  => 'gts',
        'password'  => 'bHVpc21p',
        'database'  => 'gts',
        'port'      => 3306
    );

    $mailDetails = array(
        'hostname'      => "mail.servidorgpsalerta.com",
        'username'      => "alertas@servidorgpsalerta.com",
        'password'      => 'paul10203040',
        'port'          => 25,
        'fromName'      => "Reporte de BUS",
        'fromEmail'     => "alertas@servidorgpsalerta.com",
        'subject'       => "Notificacion automatica del BUS",
        'replayEmail'   => "sistemas@aguilacontrol.com",
        'toEmail'       => "sistemas@aguilacontrol.com",
    );

    $system     = array(
        'sysName'   => 'PLEX',
        'appKey'    => 'cGxleGFwcA==',
        'timezone'  => -5,
    );

    $whatsapp_link = "https://api.whatsapp.com/send?phone=".$empresa['whatsapp']."&text=Tengo%20una%20consulta%20desde%20la%20App";

    // Funcion para verificar si la sesion ha sido iniciada previamente
    function is_session_started() {
        if ( php_sapi_name() !== 'cli' ) {
            if ( version_compare(phpversion(), '5.4.0', '>=') ) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }

    function toConsole( $data ) {
        if (is_array($data)){
            $output = "<script>console.log( '" . implode( ',', $data) . "' );</script>";
        } else {
            $output = "<script>console.log( '" . $data . "' );</script>";
        }
        echo $output;
    }

    function ordernarArray($ArrayaOrdenar, $por_este_campo, $descendiente = false) {
        $posicion = array();
        $NuevaFila = array();
        
        foreach ($ArrayaOrdenar as $clave => $fila) {
            $posicion[$clave] = $fila[$por_este_campo];
            $NuevaFila[$clave] = $fila;
        }

        if ($descendiente) {
            arsort($posicion);
        } else {
            asort($posicion);
        }

        $ArrayOrdenado = array();
        
        foreach ($posicion as $clave => $pos) {
            $ArrayOrdenado[] = $NuevaFila[$clave];
        }
        return $ArrayOrdenado;
        
    }
?>
