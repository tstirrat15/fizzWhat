Are you tired of failing all of your programming tests during those important job interviews? Fail no further. With my help, you can turn FizzBuzz into FizzBoyThatWasEasy! Simply modify example.php to match the language you're asked to write in, and BOOM: INSTANT CAREER SUCCESS.

#WOW
FizzWhat is even designed generically for more numbers than just 15, 5, and 3. Simply pass an array of the three numbers
you want to use, as so:

'''php
$fizzWhat = new fizzWhat('php', array(2, 10000, 7));
'''



#But code maintainer, the interviewer asked for generic language that isn't included! How will I pass a fizzbuzz test now?
Have no fear. Simply add your favorite language example as so within fizzWhat.php and submit a pull request:

'''php
	public function initFizzBuzzes() {
		self::$fizzBuzzes['beloved-language'][] = '
		your fizzbuzz example goes here,
		replace 15 with number0, 5 with number1, and 3 with number2,
		';
'''

#No no no, my way of writing fizzbuzz is better than that person who did it before me.
No problem, just add another! Follow the above instructions, it'll work I think.