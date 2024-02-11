<aside class="control-sidebar control-sidebar-dark">
    
    <div class="p-3">
    <h5>{{ GoogleTranslate::trans('Title', app()->getLocale()) }}</h5>
    <p>{{ GoogleTranslate::trans('Sidebar content', app()->getLocale()) }}</p>
    </div>
    </aside>
    
    
    <footer class="main-footer">
    
    <div class="float-right d-none d-sm-inline"> <a class="btn btn-danger btn-sm" href="{{URL::to("/logout")}}"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout  </a> </div>
    <p>Copyright &copy; Digital Grave Memory.  All rights reserved. </p>
</footer>