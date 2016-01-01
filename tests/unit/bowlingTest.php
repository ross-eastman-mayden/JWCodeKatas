<?php
//require '../../vendor/autoload.php';

include_once '../../bowling/bowling.php';

use bowlingPHP\bowlingGame;

class BowlingGameTest extends PHPUnit_Framework_Testcase
{
    public function testItScoresGutterGameAsZero()
    {
        $bowlingGame = new bowlingGame();
        for ($i = 0; $i < 20; $i++) {
            $bowlingGame->roll(0);
        }
        $testData = $bowlingGame->score();
        $this->assertEquals(0, $testData);
    }

    public function testItScoresTheSumOfAllPinsKnockedDownInGame()
    {
        $bowlingGame = new bowlingGame();
        for ($i = 0; $i < 20; $i++) {
            $bowlingGame->roll(1);
        }
        $testData = $bowlingGame->score();
        $this->assertEquals(20, $testData);

    }

    public function testItAwardsAOneRollBonusForEverySpare()
    {
        $bowlingGame = new bowlingGame();
        $this->rollSpare();
        $bowlingGame->roll(5);

         for ($i = 0; $i < 17; $i++) {
            $bowlingGame->roll(0);
        }

        $testData = $bowlingGame->score(20);
        $this->assertEquals(20, $testData);
    }

    private function rollSpare()
    {
        $bowlingGame->roll(2);
        $bowlingGame->roll(8);

    }

}