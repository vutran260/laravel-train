@extends('layouts.app')

@section('content')
<h1>This is Admin Login page</h1>
<form action="/foods" method="post"
        enctype="multipart/form-data"
    >
        @csrf
        {{-- the key is generated at every session start --}}
        {{-- only apply to non-read routes --}}
        {{-- If some hacker access to this site from hist/her site --}}

        <input
            class="form-control"
            type="text"
            name="username"
            placeholder="Enter username">
        <input
            class="form-control"
            type="text"
            name="password"
            placeholder="Enter password">

    <button 
        class="btn btn-primary"
        type="submit"
        >
        Login
    </button>
    </form>
@endsection