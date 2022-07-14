<aside class="control-sidebar control-sidebar-dark bg-black">

    <div class="bg-dark">
        <div class="card-body bg-dark box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHb5E-6pACzAQpvomgdRjR88d9cwwPMnBa4Q&usqp=CAU"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center ellipsis">requinne </h3>

            <p class="text-muted text-center">administrateur</p>

            <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center "><i class="fa fa-lock pr-2"></i><b>Mot de
                            passe</b> </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b>Mon
                            profile</b> </a>
                </li>
            </ul>

            <a class="btn btn-primary btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Déconnexion
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- /.card-body -->
    </div>
</aside>