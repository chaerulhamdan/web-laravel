@section('sidebar')
<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
   <h1 id="colorlib-logo"><a href="#" style="font-size: 26px">Sistem Absensi</a></h1>
   <nav id="colorlib-main-menu" role="navigation">
      <ul class="colorlib {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
         <li><a href="{{ route('user.index') }}">Dashboard Users</a></li>
      </ul>
      <br>
      <ul>
         <li><a href="/users/profile">Profile</a></li>
         <li><a href="/absensi/create">Absensi</a></li>
         <li><a href="/aspirasi/create">Aspirasi</a></li>
         <li><a href="{{route('logout')}}" class="text-danger"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
         </li>
      </ul>
   </nav>

   <div class="colorlib-footer">
      <p>
         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         Copyright &copy;<script>
            document.write(new Date().getFullYear());
         </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
            href="https://colorlib.com" target="_blank">Colorlib</a>
      <ul>
         <li><a href="#"><i class="icon-facebook"></i></a></li>
         <li><a href="#"><i class="icon-twitter"></i></a></li>
         <li><a href="#"><i class="icon-instagram"></i></a></li>
         <li><a href="#"><i class="icon-linkedin"></i></a></li>
      </ul>
   </div>
</aside>
@show