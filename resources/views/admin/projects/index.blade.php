@extends('layouts.app')
@section('content')
    <h1>Pproject</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex new-cat-btn px-5">
                        <h5 class="">Categories</h5>
                        <div><a class="btn btn-primary " href="{{ route('project.create') }}">Create New Project</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col"># ID</th>
                                    <th scope="col">Project Name</th>
                                    <th scope="col">Project Autor</th>
                                    <th scope="col">Project Category</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Images</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->author_name }}</td>
                                        <td>{{ $category->category->name }}</td>
                                        <td>
                                            <a href="{{ route('project.edit', $category->id) }}"
                                                class="btn btn-dark">Edit</a>
                                            <form class="d-inline" action="{{ route('project.delete', $category->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit">Trash</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('image', $category->id) }}"
                                                class="btn btn-info mx-2">Add Image</a>
                                            <a href="{{ route('image.show', $category->id) }}"
                                                    class="btn btn-info mx-2">show Image</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
