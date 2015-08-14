<?php	

	Class RepeatCounter {

		function countRepeats($word, $list)
		{

			$count = 0;

			$word = strtoupper ($word);
			$list = strtoupper ($list);

			if ($word === $list) {

				$count+= 1;

			}//end if


			return $count; 

		}//end countRepeats

	}//end RepeatCounter


?>