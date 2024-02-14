<div class="row">
    <div class="col-xl-9 mx-auto mt-5">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="fa-solid fa-list font-22 text-primary me-1"></i>
                    </div>
                    <h5 class="mb-0 text-primary">{{ $title }}</h5>
                </div>
                <hr>
                <form class="row g-3" action='{{ $action }}' method="POST">
                    @csrf
                    {{$slot}}
                </form>
            </div>
        </div>
    </div>
</div>