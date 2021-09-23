
{{ Illuminate\Mail\Markdown::parse($content) }}
<img src="{{ $message->embed(public_path() . '/images/image.jpg') }}" width="200">
<img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path() . '/images/image.jpg'))}}" alt="">



