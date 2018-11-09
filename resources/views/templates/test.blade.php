@extends('app')
@section('content')
@foreach($lots as $typo)
    <table>
        <thead>
            <th>
                n° lot
            </th>
            <th>Annexe</th>
            <th>Surface</th>
            <th>Typo</th>
        </thead>
        <tbody>
            @foreach($typo as $lot)
            <tr>
                <td>{{ $lot[0] }}</td>
                <td>{{ $lot[1] }}</td>
                <td>{{ $lot[2] }}</td>
                <td>{{ $lot[3] }}</td>
                <td><a href="{{ 'LOT-'. $lot[0] .'pdf' }}">plan</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
@endsection