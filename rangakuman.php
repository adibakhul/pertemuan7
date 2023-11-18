<?php 
    //Perulangan for
    echo "<h2>PERULANGAN FOR</h2>";
    for($i = 1; $i < 11; $i++){
        echo "<h2>Ini perulangan ke-$i</h2>";
    }

    //Perulangan While
    echo "<h2>PERULANGAN WHILE</h2>";
    $hitung = 1;

    while($hitung < 11){
        echo "<p>Ini adalah perulangan ke-$hitung</p>";
        $hitung++;
    }

    //Perulangan Do/While
    echo "<h2>PERULANGAN DO/WHILE</h2>";
    $mulai = 10;

    do{
        echo "<p>Ini adalah perulangan ke-$mulai</p>";
        $mulai--;
    }while($mulai > 0);

    //Perulangan Froeach
    echo "<h2>PERULANGAN FROEACH</h2>";
    $books = [
        "Panduan belajar PHP unutuk pemula",
        "Membangun aplikasi web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat bot dengan PHP",
    ];

    echo "<h5>Judul Buku PHP : </h5>";
    echo "<ul>";
    foreach($books as $buku){
        echo "<li>$buku</li>";
    }
    echo "</ul>";

    //Perulangan Bersarang
    echo "<h2>PERULANGAN BERSARANG</h2>";
    //contoh 1
    echo "<h2>contoh 1</h2>";
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 10; $j++){
            echo "ini perulangan ke ($i, $j)<br>";
        }
    }
    //contoh 2
    echo "<h2>contoh 2</h2>";
    $i = 0;
    while($i < 10){
        for($j = 0; $j < 10; $j++){
            echo "Ini perulangan ke ($i, $j)<br>";
        }

        $i++;
    }

    //Tugas
    echo "<h2>TUGAS</h2><br>";
	$star=10;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>