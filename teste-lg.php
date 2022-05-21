<?php
class Maps
{

    //chave publica de acesso
    private static $googleKey = 'AIzaSyAEfuEc51rYqxv3Z8tNmWOanZqE5Lq4unc';

    static function loadUrl($url)
    {
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($cURL);
        curl_close($cURL);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    static function getLocal($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);

        $json = json_decode($result);
        $lat = json_decode($result);
        $lng = json_decode($result);
        if ($json->{'status'} == 'OK') {

            return $json->{'results'}[0]->{'geometry'}->{'location'};
            return $lat->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
            return $lng->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        } else {
            return false;
        }
    }
    static function getLat($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);
        $lat = json_decode($result);
        if ($lat->{'status'} == 'OK') {
            return $lat->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        } else {
            return false;
        }
    }
    static function getLng($address)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . self::$googleKey;
        $result = self::loadUrl($url);
        $lng = json_decode($result);
        if ($lng->{'status'} == 'OK') {
            return $lng->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        } else {
            return false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $return = Maps::getLocal("Rua Miguel Calmon, 68, Cotia, SP");
    print_r($return); ?><br>
    <?php $lat = Maps::getLat("Rua Miguel Calmon, 68, Cotia, SP");
    print_r($lat); 
    $lng = Maps::getLng("Rua Miguel Calmon, 68, Cotia, SP");
    print_r($lng); ?><br>
</head>

<body>

</body>

</html>