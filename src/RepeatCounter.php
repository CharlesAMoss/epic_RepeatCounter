<?php	

	Class RepeatCounter 
	{

		function countRepeats($word, $list)
		{

			$count = 0;

			$word = strtoupper ($word);
			$list = strtoupper ($list);
			 
			$split_list = preg_split('/\s|(?<=\w)(?=[.,:;!?)])|(?<=[.,"!()?\x{201C}])/u', $list, -1, PREG_SPLIT_NO_EMPTY);

			foreach ($split_list as $possible_match) 
			{
				
				if ($word === $possible_match) 
				{

					$count+= 1;

				}//end if

			}//end foreach
			
			return $count; 

		}//end countRepeats

	}//end RepeatCounter

?>