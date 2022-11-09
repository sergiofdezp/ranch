<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-end pb-2">
                <a href="{{ route('horses.create')}}" class="btn btn-success">Añadir un caballo</a>
            </div>
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <input type="text" id="horseInput" onkeyup="myFunction()" placeholder="Buscar por nombre...">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="tabla_horses" class="table-fixed w-full">
                    <thead>
                        <tr class="text-white text-center" style="background-color: #6875F5;">
                            <th class="border px-4 py-2">Dueño</th>    
                            <th class="border px-4 py-2">Nombre</th>
                            <th class="border px-4 py-2">Raza</th>
                            <th class="border px-4 py-2">Edad</th>
                            <th class="border px-4 py-2">Doma</th>
                            <th class="border px-4 py-2">Herraje</th>
                            <th class="border px-4 py-2">Imagen</th>
                            <th class="border px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($horses as $horse)
                        <tr class="text-center">
                            <td>{{$horse->user->name}}</td>
                            <td>{{$horse->nombre}}</td>
                            <td>{{$horse->raza}}</td>
                            <td>{{$horse->edad}}</td>
                            <td>{{$horse->doma}}</td>
                            <td>{{$horse->herraje}}</td>
                            <td class="border px-10 py-1">
                                <img src="/imagen/horses/{{$horse->imagen}}" width="100%">    
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <a href="{{ route('horses.edit', $horse->id)}}" class="btn btn-dark mx-1">Editar</a>
                                    <form action="{{ route('horses.destroy', $horse->id)}}" class="formEliminar" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="background-color: #bb2b3b;">Eliminar</button>
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
<!-- Modal eliminar -->
<script>
    (function () {
        'use strict' 
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("horseInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla_horses");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<style>
    #horseInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    border-radius: 7px;
    }
</style>