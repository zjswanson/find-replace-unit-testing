<?php
    require_once "src/Replacer.php";

    class ReplacerTest extends PHPUnit_Framework_TestCase
    {
        function test_WholeWord()
        {
            // Arrange
            $initialPhrase = "I am walking my Cat to the cathedral";
            $searchString = "cat";
            $replacementString = "dog";
            $test_case = new Replacer($initialPhrase,$searchString,$replacementString);
            // Act
            $test_case->findAndReplaceWhole();
            $result = $test_case->getResultPhraseWhole();
            // Assert
            $this->assertEquals("I am walking my dog to the cathedral", $result);
        }

        function test_PartialWord()
        {
            // Arrange
            $initialPhrase = "I am walking my Cat to the cathedral";
            $searchString = "cat";
            $replacementString = "dog";
            $test_case = new Replacer($initialPhrase,$searchString,$replacementString);
            // Act
            $test_case->findAndReplacePartial();
            $result = $test_case->getResultPhrasePartial();
            // Assert
            $this->assertEquals("I am walking my dog to the doghedral", $result);
        }

        function test_Palindrome()
            {
            // Arrange
            $initialPhrase = "Euston saw I was not Sue";
            $test_case = new Replacer($initialPhrase,"","");
            // Act
            $result = $test_case->isPalindrome();
            // Assert
            $this->assertEquals(true, $result);
        }

        function test_PalindromeRegex()
            {
            // Arrange
            $initialPhrase = "Euston saw I was not Sue";
            $test_case = new Replacer($initialPhrase,"","");
            // Act
            $result = $test_case->isPalindromeRegex();
            // Assert
            $this->assertEquals(true, $result);
        }



    }




?>
