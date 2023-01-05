<x-mail::message>
# Introduction

The is from {{$name}}
Message:
{{$message}}


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
