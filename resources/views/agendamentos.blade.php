@section('content')

<h2>Agendamentos</h2>

<ul>
    @foreach ($agendamentos as $agendamento)
        <li>{{$agendamento->nome}}</li>
    @endforeach
</ul>

@endsection