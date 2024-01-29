@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 48px;">All Beers</h1>

                <form action="{{ route('beers.store') }}" method="POST">
                    @csrf
                    <!-- these are the fields
                $table->string('title');
                $table->text('tags')->nullable();
                $table->text('notes')->nullable();
                $table->string('style')->nullable();
                $table->json('price');
                $table->float('abv')->nullable();
                $table->date('date_brewed')->nullable();
                $table->string('glass_type')->nullable();
                $table->string('color')->nullable();
                $table->string('aroma')->nullable();
                $table->integer('ibu')->nullable();
                $table->float('untappd_rating')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
                        -->

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control">

                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="notes" class="form-label">Notes</label>
                    <textarea name="notes" id="notes" class="form-control"></textarea>

                    @error('notes')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="style" class="form-label">Style</label>
                    <input type="text" name="style" id="style" class="form-control">

                    @error('style')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" id="price" class="form-control">

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="abv" class="form-label">ABV</label>
                    <input type="text" name="abv" id="abv" class="form-control">

                    @error('abv')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date_brewed" class="form-label">Date Brewed</label>
                    <input type="text" name="date_brewed" id="date_brewed" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="glass_type" class="form-label">Glass Type</label>
                    <input type="text" name="glass_type" id="glass_type" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" id="color" class="form-control">

                    @error('color')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="aroma" class="form-label">Aroma</label>
                    <input type="text" name="aroma" id="aroma" class="form-control">

                    @error('aroma')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ibu" class="form-label">IBU</label>
                    <input type="text" name="ibu" id="ibu" class="form-control">

                    @error('ibu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="untappd_rating" class="form-label">Untappd Rating</label>
                    <input type="text" name="untappd_rating" id="untappd_rating" class="form-control">

                    @error('untappd_rating')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" id="image" class="form-control">

                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                

                
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
