{{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('content', 'Content', ['class'=>'control-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
      </div>
  
      <div class="form-group">
        {!! Form::label('contest_id', 'Contest_ID', ['class'=>'control-label col-md-1']) !!}
        <div class="col-md-1">
          {!! Form::text('contest_id', null, ['class' => 'form-control']) !!}
          <!--{!! $errors->has('contest_id')?$errors->first('contest_id'):'' !!}-->
        </div>
      </div>


    {{ Form::submit('Edit the Question!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}