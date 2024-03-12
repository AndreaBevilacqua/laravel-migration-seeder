@extends('layouts.main')

@section('core-content')
    <h1>Trains Table</h1>

    <div id="trains">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Company</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Train Code</th>
                <th scope="col">Carriages Numbers</th>
                <th scope="col">On Time</th>
                <th scope="col">Canceled</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                <tr>
                    <th scope="row">{{$train->company}}</th>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages_number}}</td>
                    <td>{{$train->on_time}} </td>
                    <td>{{$train->is_canceled}}</td>
                  </tr>
                @empty
                    <h3>Non ci sono treni</h3>
                @endforelse
              
            </tbody>
          </table>
    </div>
@endsection
