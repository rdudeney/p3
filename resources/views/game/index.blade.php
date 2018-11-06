@extends('layouts.master')

@section('content')

    <div class='container'>
        <h1>Monty Hall Game Show</h1>
        <table>
            <thead>
            <tr>
                <td><img src='images/door.png' alt='Door 1'></td>
                <td><img src='images/door.png' alt='Door 2'></td>
                <td><img src='images/door.png' alt='Door 3'></td>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th>Door 1</th>
                <th>Door 2</th>
                <th>Door 3</th>
            </tr>
            </tbody>
        </table>

        <p>
            Imagine you're at a game show.
            You are given the choice of three doors, one of which has a prize behind it.
            You have already chosen Door 1, but there's a twist.
            The game show host tells you Door 3 does not have a prize behind it and gives you the option to change your choice.
            Do you have a better chance of choosing the prize door by changing your choice of doors, or staying?
            What if you are given the same choice many times, with the prize switching doors at random each time?
            How many times do you think you'd choose the prize door making the same choice?
        </p>

        <form method='GET' action='/processInput'>
            <fieldset class='radios'>
                <div class='row'>
                    <div class='col-15'>
                        <label>Do you Change or do you Stay?</label>
                    </div>
                    <div class='col-15'>
                        <label>
                            <input type='radio'
                                   name='type'
                                   value='change' @if(old('type') == 'change') {{'checked'}} @endif> Change
                        </label>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-15'></div>
                    <div class='col-15'>
                        <label>
                            <input type='radio'
                                   name='type'
                                   value='stay' @if(old('type') == 'stay') {{'checked'}} @endif> Stay
                        </label>
                    </div>
                </div>
            </fieldset>

            @if($errors->get('type'))
                <div class='alert alert-danger'>{{ $errors->first('type') }}</div>
            @endif

            <div class='row'>
                <div class='col-15'>
                    <label>Choose how many times to repeat this same choice:</label>
                </div>
                <div class='col-15'>
                    <select name='repetitions' id='repetitions'>
                        <option value='choose'>Choose one...</option>
                        <option value='50' @if(old('repetitions') == '50') {{'selected'}} @endif>50</option>
                        <option value='100' @if(old('repetitions') == '100') {{'selected'}} @endif>100</option>
                        <option value='500' @if(old('repetitions') == '500') {{'selected'}} @endif>500</option>
                        <option value='1000' @if(old('repetitions') == '1000') {{'selected'}} @endif>1000</option>
                    </select>
                </div>
            </div>

            @if($errors->get('repetitions'))
                <div class='alert alert-danger'>{{ $errors->first('repetitions') }}</div>
            @endif

            <div class='row'>
                <div class='col-15'>
                    <label>Guess how many times the same choice would be right, any number 1 - 999:</label>
                </div>
                <div class='col-15'>
                    <input type='text' name='guess' size='4' value='{{old('guess') ?? ' ' }}'>
                </div>
            </div>

            @if($errors->get('guess'))
                <div class='alert alert-danger'>{{ $errors->first('guess') }}</div>
            @endif

            <input type='submit' class='submit' value='Get Answer'>
        </form>

        @if($num_correct != null)
            <div class='alert alert-success' role='alert'>
                By making the choice to <strong>{{$type}}</strong> you would have chosen the prize door
                <strong>{{$num_correct}}</strong> times out of <strong>{{$repetitions}}</strong> chances, or
                <strong>{{$percentage}}%</strong>.
            </div>
            <div class='alert alert-primary' role='alert'>
                You guessed <strong>{{$guess}}</strong>. {{$response}}
            </div>
            <div class='alert alert-warning' role='alert'>
                Try changing your choices and see what results you get! To learn more about the Monty Hall
                problem click <a target='_blank' href='https://en.wikipedia.org/wiki/Monty_Hall_problem'>here</a>.
            </div>
        @endif
    </div>
@endsection