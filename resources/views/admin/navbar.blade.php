<div>
<ul class="list-group" style="background-color: #cfe2f3;">

<img src="https://www.bigscreenvr.com/images/logos/bigscreen.svg" height="64">
  <li class="list-group-item"><a href="/home">Accueil</a></li>
  <li class="list-group-item"><a href="/admin/questions">Questionnaires</a></li>
  <li class="list-group-item"><a href="/admin/answers">Réponses</a></li>
  <li class="list-group-item">
      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          Déconnexion
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  </li>
</ul>
</div>
