<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. --> 

<?php


$paragrafo = " Da quest’anno gli automobilisti cinesi potranno beneficiare dell’agopuntura mentre guidano. E’ stato infatti messo in vendita uno speciale cuscino elettrico, a vibrazioni, in grado di alleviare la fatica del guidatore.
Studiato da esperti cinesi di agopuntura, questo dispositivo si è già rivelato efficace nel ridurre gli incidenti stradali dovuti a una eccessiva fatica o stanchezza degli automobilisti.
Il cuscino, prodotto da una ditta di Pechino, è stato diffuso in 135.000 pezzi destinati al mercato interno. Ma già alcune aziende francesi, tedesche e americane ne hanno chiesto la licenza per produrlo e destinarlo agli automobilisti occidentali.";

$pieces = explode(".", $paragrafo);

var_dump ($pieces)

?>