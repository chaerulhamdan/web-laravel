<a href="{{route('logout')}}" class="text-danger"  onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Go back to the login</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>