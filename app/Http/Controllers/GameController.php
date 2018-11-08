<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{


    private $TOTAL = 6; # Total constant of all door values

    /*
     * @param Request $request
     * @return Index view
     *
     * Method takes the $request variable and returns index view along with request values
     */

    public function index(Request $request)
    {
        return view('game.index')->with([
            'type' => $request->session()->get('type', null),
            'repetitions' => $request->session()->get('repetitions', null),
            'guess' => $request->session()->get('guess', null),
            'num_correct' => $request->session()->get('num_correct', null),
            'percentage' => $request->session()->get('percentage', null),
            'response' => $request->session()->get('response', null),
        ]);
    }

    /*
     * @param Request $request
     * @return Index view
     *
     * Method takes the $request variable and processes the input values, returning to the index view with the
     * updated $request values
     */
    public function processInput(Request $request)
    {
        # Validate the inputs, otherwise return to index view
        $request->validate([
            'type' => 'required',
            'repetitions' => 'required|digits_between:2,4',
            'guess' => 'required|integer|between:1,999'
        ]);

        # Update local variables to reflect inputs
        $type = $request->input('type');
        $repetitions = $request->input('repetitions');
        $guess = $request->input('guess');

        # Process the local variables
        $num_correct = $this->process($type, $repetitions); # Confirm number correct
        $percentage = ($num_correct / $repetitions) * 100; # Confirm percentage of number correct
        $response = $this->respond($guess, $num_correct); # Confirm response

        # return to the index with updated values
        return redirect('/')->with([
            'type' => $type,
            'repetitions' => $repetitions,
            'guess' => $guess,
            'num_correct' => $num_correct,
            'percentage' => $percentage,
            'response' => $response,
        ]);
    }

    /**
    * @param $guess
    * @param $num_correct
    * @return string

    * Method compares the user guess to the results and assigns response to be passed to
    * user
    */

    private function respond($guess, $num_correct)
    {
        $difference = abs($num_correct - $guess);

        if ($difference < 10)
        {
            $response = "Great guess!";
            return $response;
        } elseif ($difference >= 10 and $difference < 50 ){
            $response = "Very close!";
            return $response;
        }

        $response = "You'll get it next time!";
        return $response;
    }

    /**
    * @param $input
    * @return integer
    *
    * Method initiates helper methods setDoor and match in order to calculate the number of
    * prize doors.
    */

    private function process($type, $repetitions)
    {
        $matching = 0;          // reset number of prize doors

        # Repeat door selection and confirm prize door
        for ($i=0; $i < $repetitions; $i++) {
            $choice = rand(1, 3);       // assign door 1 value at random
            $other1 = $this->setDoor($choice);  // assign door 2 value at random
            $other2 = $this->TOTAL - ($choice + $other1);   // assign door 3 value
            $correct = rand(1, 3);  // set the prize door value at random

            # confirm if user choice to stay or change returns prize door.
            $matching += $this->match($correct, $other1, $other2, $type);
        }

        # return number of prize doors
        return $matching;
    }

    /**
    * @param $choice
    * @return integer
    *
    * Method assigns number to door 2, ensuring different from door 1
    */
    private function setDoor($choice)
    {
        $other1 = 0;

        # repeat assignment until door 2 different from door 1
        while ($other1 == 0)
        {
            $other1 = rand(1, 3);
            if($other1 == $choice)
            {
                $other1 = 0;
            }
        }
        return $other1;
    }

    /**
    * @param $correct
    * @param $other1
    * @param $other2
    * @return integer
    *
    * Method confirms if type selection, either to stay or change, returns prize door or not. If
    * prize door, return integer value, otherwise return zero.
    */

    private function match($correct, $other1, $other2, $type)
    {
        if ($type == 'change')
        {
            if ($other1 == $correct || $other2 == $correct)
            {
                return 1;
            } else {
                return 0;
            }
        } else {
            if ($other1 == $correct || $other2 == $correct)
            {
                return 0;
            }
        }
        return 1;
    }

}
