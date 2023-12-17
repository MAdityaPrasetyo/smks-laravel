@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Portofolio</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="{{ route('portofolio.create') }}" class="btn btn-secondary mb-3">Create new Portofolio</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Link</th>
                    <th scope="col" class="text-center">Image</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portofolios as $portofolio)
                    <tr>
                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center">{{ $portofolio->name }}</td>
                        <td class="align-middle text-center">{{ $portofolio->link }}</td>
                        <td class="align-middle text-center">
                            @if ($portofolio->image)
                                <img src="{{ asset('images/' . $portofolio->image) }}" alt="Portofolio Image" width="120">
                            @else
                                No Image
                            @endif
                        </td>
                        <td class="align-middle text-center">
                            <a href="{{ route('portofolio.edit', $portofolio->id) }}" class="badge bg-warning">Edit</a>
                            <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
