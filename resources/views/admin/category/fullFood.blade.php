@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Меню категориялари</span>
                        <!-- <a href="/admin/categories/create" class="btn btn-success"> Янги Яратиш</a> -->
                        <a href="{{ route('admin/categories/index') }}" class="btn btn-outline-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Taomlari</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $item)
                                    <tr>
                                        <th>
                                            @foreach($item->food as $food)
                                                {{ $food->nomi }} </br>
                                            @endforeach
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection