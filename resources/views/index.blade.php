<h1>WELCOME HEHE</h1>
<a href="{{ url ('/signin')}}">LOGIN TES</a>
<form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger ">
        LOGOUT
    </button>
</form>