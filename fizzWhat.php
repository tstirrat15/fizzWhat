<?php

class fizzWhat {
	public static $fizzBuzzes = array();



	public function __construct($language = 'php', $numbers = array(15, 5, 3)) {
		$this->initFizzBuzzes();

		if (!isset(self::$fizzBuzzes[$language])) {
			echo "Tell interviewer you appreciate their time but you feel you are not a great fit for this position.";
		}
		$this->language = $language;

		arsort($numbers);
		$this->numbers = $numbers;
	}

	public function initFizzBuzzes() {
		self::$fizzBuzzes['php'][] = '
		for ($i = 1; $i <= 100; $i++) {
			if ($i % {number0} == 0) {
				echo "fizzBuzz";
			}
			else if ($i % {number1} == 0) {
				echo "buzz";
			}
			else if ($i % {number2} == 0) {
				echo "fizz";
			}
			else {
				echo $i;
			}
		}
		';

		self::$fizzBuzzes['java'][] = '
		for (int i = 1; i <= 100; i++) {
			if (i % {number0} == 0) {
				System.out.println("fizzBuzz");
			}
			else if (i % {number1} == 0) {
				System.out.println("buzz");
			}
			else if (i % {number2} == 0) {
				System.out.println("fizz");
			}
			else {
				System.out.println(i);
			}
		}
		';

		self::$fizzBuzzes['my background is not really in programming'][] = '
			I dunno sir/madam, I think you like use the modulo operator to see if like, first {number0} is divisible by 0 or something?
			Please hire me.
		';
	}

	public function ohCrapInterviewerAskedForDifferentLanguage($language) {
		$this->language = $language;
	}

	public function passProgrammingTest() {
		//Have to vary our answers a bit.
		$randomNumber = rand(0, count(self::$fizzBuzzes[$this->language]) - 1); 
		$answer = self::$fizzBuzzes[$this->language][$randomNumber];

		for($i = 0; $i < 3; $i++) {
			$answer = str_replace('{number' . $i .'}', $this->numbers[$i], $answer);
		}

		return $answer;
	}
}

?>