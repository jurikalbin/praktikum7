<?php

$rattad= array(
    array('liik'=>'Maantee', 'seisukord'=>"uus", 'ostetud_aasta'=>2013, 'myyk_asukoht'=>'Tallinn', 'vajab_remonti'=>'ei', 'raami_suurus'=>"M", 'v2rvus'=>'hall'),
    array('liik'=>'Cruiser', 'seisukord'=>"korras", 'ostetud_aasta'=>2016, 'myyk_asukoht'=>'Tallinn', 'vajab_remonti'=>'ei', 'raami_suurus'=>"L", 'v2rvus'=>'sinine'),
    array('liik'=>'Fatbike', 'seisukord'=>"uus", 'ostetud_aasta'=>2017, 'myyk_asukoht'=>'Pärnu', 'vajab_remonti'=>'ei', 'raami_suurus'=>"XL", 'v2rvus'=>'kollane'),
    array('liik'=>'MTB', 'seisukord'=>"vana", 'ostetud_aasta'=>1999, 'myyk_asukoht'=>'Tallinn', 'vajab_remonti'=>'jah', 'raami_suurus'=>"S", 'v2rvus'=>'must'),
    array('liik'=>'Linna', 'seisukord'=>"puudulik", 'ostetud_aasta'=>1960, 'myyk_asukoht'=>'Tartu', 'vajab_remonti'=>'jah', 'raami_suurus'=>"XL", 'v2rvus'=>'roheline'),
    array('liik'=>'Laste', 'seisukord'=>"korras", 'ostetud_aasta'=>2004, 'myyk_asukoht'=>'Tallinn', 'vajab_remonti'=>'ei', 'raami_suurus'=>"L", 'v2rvus'=>'roosa'),
    array('liik'=>'BMX', 'seisukord'=>"vana", 'ostetud_aasta'=>2011, 'myyk_asukoht'=>'Valga', 'vajab_remonti'=>'jah', 'raami_suurus'=>"S", 'v2rvus'=>'punane')
);
    foreach ($rattad as $ratas){
        include('template.html');
    }
    ?>