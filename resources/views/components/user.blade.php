<ul class="navbar nav mt-3">
    <li class="ms-3 me-2">
        <i class="bi bi-lock fs-5"></i>
    </li>
    <li class="me-auto">
        <p class="fs-5 m-0">{{Auth::user()->name}}</p>
    </li>
    <li>
        <i class="bi bi-plus-square fs-5 me-3"></i>
    </li>
    <li>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="bi bi-box-arrow-right fs-4 text-black me-3 border border-0 bg-white"></button>
        </form>
    </li>
</ul>