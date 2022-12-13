@extends('layouts.base')

@section('content')

<Table>
    <thead>
        <th>
            Naam
        </th>
        <th>
            Locatie
        </th>
        <th>Acties</th>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>
                {{ $event->name }}
            </td>
            <td>
                {{ $event->location }}
            </td>
            <td>
                <a href="{{ route('delete-event', $event->id) }}">Delete</a>
            </td>
            <td>
                <a href="{{}}">Change</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</Table>

@endsection