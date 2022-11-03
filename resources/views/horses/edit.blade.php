<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-center p-12">
                    <div class="mx-auto w-full max-w-[550px]">
                        <form action="{{ route('horses.update', $horse->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nombre" class="mb-2 block text-base font-medium text-[#07074D]">Nombre</label>
                                <input type="text" name="nombre" id="nombre" value="{{$horse->nombre}}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="raza" class="mb-2 block text-base font-medium text-[#07074D]">Raza</label>
                                <input type="text" name="raza" id="raza" value="{{$horse->raza}}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="mb-2 block text-base font-medium text-[#07074D]">Edad</label>
                                <input type="number" name="edad" id="edad" value="{{$horse->edad}}" min=0 class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="doma" class="mb-2 block text-base font-medium text-[#07074D]">Doma</label>
                                <select name="doma" id="doma" value="{{$horse->doma}}" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="" disabled>Seleccione una doma</option>
                                    <option value="No" @if($horse->doma=="No")selected @endif>No</option>
                                    <option value="Doma equina" @if($horse->doma=="Doma equina")selected @endif>Doma equina</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="vacuna" class="block text-base font-medium text-[#07074D]">Vacunas</label>
                                <select name="vacuna" id="vacuna" value="{{$horse->vacuna}}"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="" disabled>Seleccione una vacuna</option>
                                    <option value="No" @if($horse->vacuna=="No")selected @endif>No</option>
                                    <option value="Gripe equina" @if($horse->vacuna=="Gripe equina")selected @endif>Gripe equina</option>
                                </select>
                            </div>
                            <!-- IMAGEN -->
                            <div class="">
                                <img src="/imagen/{{ $horse->imagen }}" id="imagenSeleccionada" style="max-height: 200px;" class="mx-auto d-block">
                            </div>
                            <div class="mb-4">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                                <div class='flex items-center justify-center w-full'>
                                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                        <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccionar imagen</p>
                                        </div>
                                    <input name="imagen" id="imagen" type='file' class="hidden" />
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('horses.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                                <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- Previsualización de la img -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>