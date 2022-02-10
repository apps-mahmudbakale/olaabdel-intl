@component('mail::message')
# Contact Message
<div style="border-top: 2px solid #336633;  box-shadow: 10px 10px 5px grey;">
	<p>From: {{$contact['name']}}-{{$contact['email']}}</p>
	<h2 style="text-align: center;">{{$contact['subject']}}</h2>

	{{$contact['message']}}
</div>

Thanks,<br>
{{ $contact['name'] }}
@endcomponent
