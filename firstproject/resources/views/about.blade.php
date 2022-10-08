<!-- 
    For loop
    Foreach loop
    For else loop
    While loop

-->

{{ $i = 0 }}
@while ($i < 10)
    <h1>{{ $i }}</h1>
    {{ $i++ }}
@endwhile