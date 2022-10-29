<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Caballos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="botonAñadir pb-2">
                <a href="{{ route('horses.create')}}" class="btn btn-success">Añadir</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Descripcion</th>
                            <th class="border px-4 py-2">Imagen</th>
                            <th class="border px-4 py-2">Raza</th>
                            <th class="border px-4 py-2">Edad</th>
                            <th class="border px-4 py-2">Altura</th>
                            <th class="border px-4 py-2">Doma</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($horses as $horse)
                        <tr>
                            <td>{{$horse->id}}</td>
                            <td>{{$horse->nombre}}</td>
                            <td>{{$horse->descripcion}}</td>
                            <td class="border px-14 py-1">
                                <img src="/img/{{$horse->imagen}}" width="60%">    
                            </td>
                            <td>{{$horse->raza}}</td>
                            <td>{{$horse->edad}}</td>
                            <td>{{$horse->altura}}</td>
                            <td>{{$horse->doma}}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <a href="{{ route('horses.edit', $horse->id)}}" class="btn btn-dark">Editar</a>
                                    <form action="{{ route('horses.destroy', $horse->id)}}" class="formElim" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    (function () {
    'use strict'

    var forms = document.querySelectorAll('.formElim')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                    title: '¿Desea confirmar la eliminación del registro?',
                    text: "You won't be able to revert this!",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                        Swal.fire(
                            'Registro eliminado.', 'El registro ha sido eliminado correctamente.', 'success'
                        )
                    }
                })
            }
        }, false)
        })
    })()
</script>
