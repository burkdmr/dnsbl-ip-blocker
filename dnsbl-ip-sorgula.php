<?php

function dnsblSorgula($ip){

    //Reverse IP oluþturuyoruz.
    $reverse_ip = implode(".", array_reverse(explode(".", $ip)));

    //Spamhaus XBL Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".xbl.spamhaus.org.", "A")) {
        echo '<span style="color: red">Spamhaus XBL</span><br/>';
    }else{
        echo '<span style="color: green">Spamhaus XBL</span><br/>';
    }

    //Spamhaus SBL Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".sbl.spamhaus.org.", "A")) {
        echo '<span style="color: red">Spamhaus SBL</span><br/>';
    }else{
        echo '<span style="color: green">Spamhaus SBL</span><br/>';
    }

    //Spamhaus PBL Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".pbl.spamhaus.org.", "A")) {
        echo '<span style="color: red">Spamhaus PBL</span><br/>';
    }else{
        echo '<span style="color: green">Spamhaus PBL</span><br/>';
    }

    //Spamhaus ZEN Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".zen.spamhaus.org.", "A")) {
        echo '<span style="color: red">Spamhaus ZEN</span><br/>';
    }else{
        echo '<span style="color: green">Spamhaus ZEN</span><br/>';
    }

    //Spamhaus SBL-XBL Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".sbl-xbl.spamhaus.org.", "A")) {
        echo '<span style="color: red">Spamhaus SBL-XBL</span><br/>';
    }else{
        echo '<span style="color: green">Spamhaus SBL-XBL</span><br/>';
    }

    //Barracuda Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".b.barracudacentral.org.", "A")) {
        echo '<span style="color: red">Barracuda</span><br/>';
    }else{
        echo '<span style="color: green">Barracuda</span><br/>';
    }

    //SORBS Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".dnsbl.sorbs.net.", "A")) {
        echo '<span style="color: red">SORBS</span><br/>';
    }else{
        echo '<span style="color: green">SORBS</span><br/>';
    }

    //SpamCop Sorguluyoruz. Eðer spam listesinde ip adresi yer alýyorsa Kýrmýzý yer almýyorsa yeþil çýktý alýyoruz.
    if (checkdnsrr($reverse_ip . ".bl.spamcop.net.", "A")) {
        echo '<span style="color: red">SpamCop </span><br/>';
    }else{
        echo '<span style="color: green">SpamCop</span><br/>';
    }

}



dnsblSorgula("78.172.174.45");
?>