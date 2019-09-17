@extends ('layouts.app')
Hola mundo desde vista

@section('contenido')


@for($x=0; $x<5; $x++){
    <ul>
    <li>
    holo{{ $x}}</li>
    </ul>
}
@endfor
@end 