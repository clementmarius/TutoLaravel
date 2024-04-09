@extends('admin.admin')

@section('content')

    <h1>Les biens</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach($properties as $property)
            <tr>
                <td>{{ $properties->title }}</td>
                <td>{{ $properties->surface }}m²</td>
                <td>{{ number_format( $properties->price, thousands_separator : ' ') }}</td>
                <td>{{ $properties->city }}</td>
                <td>


                </td>
            </tr>

        @endforeach
        </tbody>

    </table>

    {{ $properties->links() }}
@endsection
