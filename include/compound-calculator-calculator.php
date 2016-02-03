<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		if(isset($_POST['compoundPrinciple']) || isset($_POST['compoundInterest']) || isset($_POST['compoundTimesPerYear']) || isset($_POST['yearsAccrued']))
		{
			//Form Variables
			$principle = ($_POST['compoundPrinciple']);
			$interest = ($_POST['compoundInterest'])/100;
			$compoundTimesPerYear = ($_POST['compoundTimesPerYear']);
			$yearsAccrued = ($_POST['yearsAccrued']);
			//$monthlyAddition = ($_POST['monthlyAddition']);
			
			//Compound 	Interest For Principle
			$inParen = 1+($interest/$compoundTimesPerYear);
			$exponent = $compoundTimesPerYear * $yearsAccrued;
			$parenRaised = pow($inParen, $exponent);
			$compoundInterestForPrinciple  = $principle * $parenRaised;
			
			/*
			* Monthly addition part... add later
			//Future Value Of A series
			//variables
			$fvFirstSet = 1 + ($interest/$compoundTimesPerYear);
			$fvExponent = ($compoundTimesPerYear * $yearsAccrued) - 1;
			$fvLastSet = ($interest/ $compoundTimesPerYear);
			//Setup
			$firstsetRaised = pow($fvFirstSet, $fvExponent);
			$futureValueOfASeries = $monthlyAddition * ($firstsetRaised/$fvLastSet);
			*/
			
			echo 'If you intially invest $'
					. $principle . ' into an account with an '
					. ($interest*100) .'% return that compounds '
					. $compoundTimesPerYear . ' times a year for '
					. $yearsAccrued . ' years, Your investmnt will be worth '
					. number_format($compoundInterestForPrinciple, 2);
			
			
			
			
		}
			
				
	}