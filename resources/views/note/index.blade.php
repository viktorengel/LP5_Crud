@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Create new note</a>
    <ul>
        @forelse ($notes as $note)
        {{-- Cuando son varios paramentos --}}
        {{-- <li><a href="#">{{ $note->title }}</a> | <a href="{{ route('note.edit'), ['note' = $note->id,$note->title] }}">EDIT</a> | <a href="">DELETE</a></li> --}}
        {{-- Cuando es un unico parametro --}}
        {{-- <li><a href="#">{{ $note->title }}</a> | <a href="{{ route('note.edit'), ['note' = $note->id] }}">EDIT</a> | <a href="">DELETE</a></li> --}}
        {{-- Atajo cuando es un unico parametro} --}}
        <li><a href="#">{{ $note->title }}</a> | <a href="{{ route('note.edit', $note->id) }}">EDIT</a> | <a href="">DELETE</a></li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>    
@endsection