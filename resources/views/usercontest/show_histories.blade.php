@foreach($question as $h)
<table>
	{!!$h->user_id!!}
	{!!$h->contest_id!!}
	{!!$h->question_id!!}

</table>
@endforeach