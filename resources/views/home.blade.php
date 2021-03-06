@extends('layouts.app')

@section('content')
    <div class="container">
        <dvi class="row">
            <div class="col-xs-12 col-sm-8">
                <h2>Tâches en cours</h2>

                 @foreach($tasksInGoing as $task)
                    <a href="/kanban/{{$task->kanban->id}}">

                        <div class="tasksToDo">
                            <h4>Projet :  {{$task->kanban->title}} <span style="float: right;">{{--$task->state->title --}}</span></h4>
                            <hr>
                            <h3>{{$task->title}}</h3>
                            <p>{{str_limit($task->description,150)}}</p>
                        </div>
                    </a>
                @endforeach

            </div>
            <div class="col-xs-12 col-sm-4">
                <h2>Mes Projets</h2>
                @foreach($kanbans as $kanban)
                    <a href="/kanban/{{$kanban->id}}">
                        <div class="project">
                            <h3>{{$kanban->title}}</h3>
                            <p>{{str_limit($kanban->description, 150)}}</p>
                        </div>
                    </a>
                @endforeach
                <!-- Button trigger modal -->
                <br>
                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                    Ajouter Projet
                </button>
            <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            {!! Form::open(['url' => '/addKanban']) !!}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Entrez les informations de votre projet</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title-name" class="control-label">Nom du projet :</label>
                                        <input type="text" class="form-control" id="title-name" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="description-text" class="control-label">Description :</label>
                                        <textarea class="form-control" id="description-text" name="description"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </dvi>
    </div>
@endsection
