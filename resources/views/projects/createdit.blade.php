@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <h5 class="card-header">{{ !isset($project) ? "Create New project" : "Update Project" }} </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <form
                                    action=" @if (!isset($project)) {{ route('project.store')  }}@else {{ route('project.update', $project->id) }} @endif"
                                    method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Project
                                            Name</span>
                                        <input type="text" name="name" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                            value="{{ isset($project) ? $project->name : '' }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Author
                                            Name</span>
                                        <input type="text" name="author_name" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                            value="{{ isset($project) ? $project->author_name : '' }}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                                        <textarea name="description" class="form-control"
                                            value="{{ isset($project) ? $project->description : '' }}"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <select name="category_id" class="p-2 form-control">
                                            <option value="{{ isset($project) ? $project->category->id : '' }}">{{ isset($project) ? $project->category->name : 'Select Category' }}</option>
                                            @foreach ($cats as $cat )
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>  
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Date Create</span>
                                        <input type="datetime" name="date_create" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                            value="{{ isset($project) ? $project->date_creation : '' }}">
                                    </div>
                                    <button class="btn btn-primary cat-btn" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
