<x-app-layout>
    <div class="py-12 bg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="row">
                @foreach ($horses as $horse)
                    <div class="card col-6 my-1" style="background-color: transparent; border: none;">
                        <img src="/imagen/horses/{{$horse->imagen}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title mt-2"><strong>{{$horse->nombre}} | {{$horse->edad}} años</strong></h5>
                            <h6 class="card-subtitle text-muted my-2">Raza: {{$horse->raza}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .bg{
        display: grid;
        height: 100%;
        width: 100%;
        font-family: "Poppins", sans-serif;
        place-items: center;
        background-color: Bisque;
    }
</style>