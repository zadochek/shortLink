@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Введите ссылку" aria-label="Введите ссылку" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success" id="btnSubmit" type="button">Сократить</button>
                        </div>
                    </div>
                    <div class="error"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Сокращённая ссылка</th>
                        <th>Оригинальная ссылка</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
