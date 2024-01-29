@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 48px;">All Beers</h1>

                <form action="{{ route('beers.store') }}" method="POST">
                    @csrf
                    <label for="name">Beer Name:</label>
                    <input type="text" name="name" id="name" required>
                    <br>
                    <label for="brewery">Brewery:</label>
                    <input type="text" name="brewery" id="brewery" required>
                    <br>
                    <label for="style">Style:</label>
                    <input type="text" name="style" id="style" required>
                    <br>
                    <button type="submit">Add Beer</button>
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brewery</th>
                            <th>Style</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beers as $beer)
                            <tr>
                                <td>{{ $beer->name }}</td>
                                <td>{{ $beer->brewery }}</td>
                                <td>{{ $beer->style }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection            
