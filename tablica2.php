<?php
 /*$products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>";    
			 echo $products['paper']['copier'];
			 echo "<br>";
			 echo $products['misc']['tape'];
			 echo "<br>";
			 echo $products['pens']['ball'];
			 
			 foreach($products as $section => $items)
				foreach($items as $key => $value)
				if($key=='copier' or $key=='ball' or $key=='tape')
					echo "$section: \t $key \t ($value)<br>";*/
				

    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
	/*	
	//ustawic nowa wartość na dane miejsce w tablicy
	$chessboard[4][0] = "P";
	//ustaswienie pustego miejsca na tablicy skąd został ruszony pionek
	$chessboard[6][0] = " ";
	*/
	
	$move_array = [
		0=>["move"=>[4,2], "clear"=>[6,2]],
		1=>["move"=>[3,5], "clear"=>[1,5]]
	];
	
	for($i=0; $i<sizeof($move_array); $i++) {
	
			$move = $move_array[$i]["move"];
			$clear = $move_array[$i]["clear"];
			
			$chessboard[$move[0]][$move[1]] = $chessboard[$clear[0]][$clear[1]];
			
		
		echo "<pre>";
		foreach($chessboard as $row) {
			foreach($row as $piece) {
				echo "$piece ";
			}
			echo "<br>";
		}
		echo "</pre>";
		echo "<br>";		
	}

?>