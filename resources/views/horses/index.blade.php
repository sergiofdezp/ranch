<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="botonAñadir pb-2">
                <a href="{{ route('horses.create')}}" class="btn btn-success">Añadir</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white text-center">
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Raza</th>
                            <th class="border px-4 py-2">Edad</th>
                            <th class="border px-4 py-2">Doma</th>
                            <th class="border px-4 py-2">Vacunas</th>
                            <th class="border px-4 py-2">Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($horses as $horse)
                        <tr class="text-center pt-5">
                            <td>{{$horse->nombre}}</td>
                            <td>{{$horse->raza}}</td>
                            <td>{{$horse->edad}}</td>
                            <td>{{$horse->doma}}</td>
                            <td>{{$horse->vacuna}}</td>
                            <td class="border px-10 py-1">
                                <img src="/imagen/{{$horse->imagen}}" width="100%">    
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <a href="{{ route('horses.edit', $horse->id)}}" class="btn btn-dark">Editar</a>
                                    <form action="{{ route('horses.destroy', $horse->id)}}" class="formEliminar" method="POST">
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
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Seguro que quiere eliminar este registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>
