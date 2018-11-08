@extends('layouts.master')

@section('content')
    <div class='container'>
        <h1>Winner! You guessed correctly!</h1>
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
        <div class='alert alert-warning' role='alert'>
            You Win! Did you notice that if you chose to <strong>Change</strong> doors instead of
            <strong>Stay</strong>, you more
            consistently chose the correct door? That's the trick of the
            <strong>Monty Hall Game</strong>. To learn more click
            <a target='_blank' href='https://en.wikipedia.org/wiki/Monty_Hall_problem'> here</a>,
            or else <a href='/'>Play Again</a>.
        </div>

    </div>
@endsection