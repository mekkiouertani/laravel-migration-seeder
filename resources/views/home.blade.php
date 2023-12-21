@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="container mt-5">
            <table class="table p-5">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col">Binario</th>
                        <th scope="col">Giorno di Partenza</th>
                        <th scope="col">Orario Partenza</th>
                        <th scope="col">Orario Arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">N. Carrozze</th>
                        <th scope="col">Ritardo</th>
                        <th scope="col">Cancellati</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->train_track }}</td>
                            <td>{{ substr($train->departure_day, 0, 10) }}</td>
                            <td>{{ substr($train->departure_time, 0, 5) }}</td>
                            <td>{{ substr($train->arrival_time, 0, 5) }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->carriages_count }}</td>
                            <td class="{{ $train->on_time ? 'bg-success' : 'bg-warning' }}">
                                {{ $train->on_time ? 'In orario' : 'In ritardo' }}</td>
                            <td class="{{ $train->canceled ? '' : 'bg-danger' }}">
                                {{ $train->canceled ? ' ' : 'Cancellato' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </main>

@endsection
