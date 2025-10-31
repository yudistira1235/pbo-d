<?php

require_once('./LuasLingkaran.php'); //panggil file LuasLingkaran.php

use App\Math\LuasLingkaran; //panggil namespace

$Lingkaran = new LuasLingkaran(10);
$Lingkaran->tampil('roda'); //panggil method
LuasLingkaran::testing();