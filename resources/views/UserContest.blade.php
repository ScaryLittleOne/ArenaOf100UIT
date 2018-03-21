<table>
        {!!$question->content!!}
</table>
@foreach($answers as $answer)
    <table>     
        {!!$answer->id!!}
        {!!$answer->content!!}
    </table>
    
@endforeach