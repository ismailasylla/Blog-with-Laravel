 @if(Auth::guard('web')->check())
    <p class="alert alert-success" role="alert">
        You are Logged In as <strong>User</strong>
    </p>

     @else

     <p class="alert alert-danger" role="alert">
         You are Logged Out as <strong>User</strong>
     </p>

 @endif


 @if(Auth::guard('admin')->check())
     <p class="alert alert-success" role="alert">
         You are Logged In as <strong>Admin</strong>
     </p>

 @else

     <p class="alert alert-danger" role="alert">
         You are Logged Out as <strong>Admin</strong>
     </p>

 @endif