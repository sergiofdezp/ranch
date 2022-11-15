<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
        </div>
    </div>
</x-app-layout>