@extends('layouts.app')

@section('content')
    <p align="center"><b>Please click on delete to delete the question or edit question to edit</b></p>
    <br>
    <div class="container">
        <div class="row ">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><b>Question</b></div>

                    <div class="card-body">

                        {{$question->body}}
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary float-right"
                           href="{{ route('question.edit',['id'=> $question->id])}}">
                            Edit Question
                        </a>

                        {{ Form::open(['method'  => 'DELETE', 'route' => ['question.destroy', $question->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-10">

                <div class="card">
                    <div class="card-header"><b>Answer question</b></div>

                    <div class="card-body">

                        {!! Form::model('', ['route' => ['answers.store', $question], 'method' => 'post']) !!}


                        <div class="form-group">
                            {!! Form::label('body', 'Compose Answer') !!}
                            {!! Form::text('body','', ['class' => 'form-control','required' => 'required']) !!}
                        </div>
                        <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>


            <div class="col-md-10">
                <br>
                <div class="card">
                    <div class="card-header">


                        <h1> Answers </h1>
                    </div>

                    <div class="card-body">
                        @forelse($question->answers as $answer)
                            <div class="card">
                                <div class="card-body">{{$answer->body}}</div>
                                <div class="card-footer">

                                    <a class="btn btn-primary float-right"
                                       href="{{ route('answer.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        View
                                    </a>

                                </div>
                            </div>
                        @empty
                            <div class="card">

                                <div class="card-body"> No Answers</div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>


@endsection