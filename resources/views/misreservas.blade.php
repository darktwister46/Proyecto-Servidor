@extends('layouts.nav')
@section('viteimports')
@endsection
@section('content')


<table style="border: 1px solid black">
    <tr>
        <td>Fecha</td>
        <td>Mesa</td>
        <td>Menú</td>
        <td>Nº de personas</td>
    </tr>

    @isset($reservas)
        @foreach($reservas as $r)
            <tr>
                <td>{{$r->fecha_reserva}}</td>
                <td>{{$r->id_mesa}}</td>
                <td>{{$r->id_menu}}</td>
                <td>{{$r->num_personas}}</td>
            </tr>
        @endforeach

    @endisset
</table>

@endsection
