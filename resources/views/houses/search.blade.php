@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Поиск домов</h1>
        <form id="search-form" class="mb-4">
            <div class="row">
                <div class="col-md-4 my-1">
                    <input type="text" id="name-input" name="name" class="form-control" placeholder="Название">
                </div>
                <div class="col-md-4 my-1">
                    <input type="number" id="price-input" name="price" class="form-control" placeholder="Цена">
                </div>
                <div class="col-md-4 my-1">
                    <input type="number" id="bedrooms-input" name="bedrooms" class="form-control" placeholder="Спальни">
                </div>
                <div class="col-md-4 my-1">
                    <input type="number" id="bathrooms-input" name="bathrooms" class="form-control" placeholder="Ванные комнаты">
                </div>
                <div class="col-md-4 my-1">
                    <input type="number" id="storeys-input" name="storeys" class="form-control" placeholder="Этажи">
                </div>
                <div class="col-md-4 my-1">
                    <input type="number" id="garages-input" name="garages" class="form-control" placeholder="Гаражи">
                </div>
            </div>
        </form>

        <table id="results-table" class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Спальни</th>
                <th>Ванные комнаты</th>
                <th>Этажи</th>
                <th>Гаражи</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
