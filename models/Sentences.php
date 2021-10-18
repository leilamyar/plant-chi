<?php 
require_once("Connection.php");
//the require_once is the same as the require. When the db is required, it will not include it a second time, juste once.
class Sentences extends Connection {
	// the class sentences is an extention of the connection page. It's a good practice to make it like this. And the connection page is linked to the db on file Connection (cf line 40)
	public function getSentenceRandom(){
		//to get the sentences randomly 
		try{
			//try to 
			$nbSentences = random_int(1, $this->getSentenceCount());
			//the sentence = random_int[minimum, maximum]. On that case, the $this->getSentenceCount()(on line 27) is to get the number of the sentences that getSentenceCount has. PS: obligatory to begin at 1 for the minimum :-) 'cause on mysql the tab begin at 1, not 0.
			$request= "SELECT * FROM sentences WHERE sentence_id = $nbSentences";
					//select all from sentences(on the data base) where sentence_id = nbSentences on line 10.
			if($this->execute($request)!= null){
				//if ($this execute the request (on line 12) is different than null)
				return $this->execute($request)[0]['sentence'];
				//return 
			}
			else {
				throw new Exception("The sentence doesn't exist") ;
			}	
		}
		catch(Exception $e){
			
			return null;
		}
	}

	public function getSentenceCount(){
		// 
		try{
			$request= "SELECT COUNT(*) AS nbSentences FROM `sentences`";
			//
			if($this->execute($request)!= null){
				return $this->execute($request)[0]['nbSentences'];
			}
			else {
				throw new Exception("The sentence doesn't exist") ;
			}	
		}
		// 
		catch(Exception $e){
			
			return null;
		}
	}
}
 ?>