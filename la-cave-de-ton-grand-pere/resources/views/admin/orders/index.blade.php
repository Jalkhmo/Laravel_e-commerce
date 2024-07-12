@extends('layouts.admin')

@section('content')
    <h1>Commandes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Numéro de téléphone</th>
                <th>Numéro de carte</th>
                <th>Total</th>
                <th>Liste de produits</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->card_number }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->product_list }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
