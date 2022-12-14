@extends('layouts.base')

@section('content')

<div class="headTextEventList">
    <h1>Preview all the events</h1>
</div>
<div class="row">
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">Card title</h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">Order Ticket</a>
        </div>
    </div>
</div>
{{-- <Table>
    <thead>
        <th>
            Naam
        </th>
        <th>
            Locatie
        </th>
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
        </tr>
        @endforeach
    </tbody>
</Table> --}}
@endsection