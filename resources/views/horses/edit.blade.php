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
                                <input type="text" name="nombre" id="nombre" value="{{$horse->nombre}}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-4">
                                <label for="sexo" class="block text-base font-medium text-[#07074D]">Sexo</label>
                                <select name="sexo" id="sexo" value="{{$horse->sexo}}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="" disabled>Seleccione el sexo del caballo</option>
                                    <option value="Macho" @if($horse->sexo=="Macho")selected @endif>Macho</option>
                                    <option value="Hembra" @if($horse->sexo=="Hembra")selected @endif>Hembra</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="raza" class="mb-2 block text-base font-medium text-[#07074D]">Raza</label>
                                <input type="text" name="raza" id="raza" value="{{$horse->raza}}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="mb-2 block text-base font-medium text-[#07074D]">Edad</label>
                                <input type="number" name="edad" id="edad" value="{{$horse->edad}}" min=0 required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-4">
                                <label for="vacuna" class="mb-2 block text-base font-medium text-[#07074D]">Vacuna</label>
                                <select name="vacuna_id" id="vacuna_id" required="required" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="{{$horse->vacunas->nombre}}" selected disabled>{{$horse->vacunas->nombre}}</option>
                                    @foreach ($vacunas as $vacuna)
                                        <option value="{{$vacuna->id}}">{{$vacuna->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="doma" class="mb-2 block text-base font-medium text-[#07074D]">Doma</label>
                                <select name="doma_id" id="doma_id" required="required" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="{{$horse->domas->nombre}}" selected disabled>{{$horse->domas->nombre}}</option>
                                    @foreach ($domas as $doma)
                                        <option value="{{$doma->id}}">{{$doma->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="herraje" class="mb-2 block text-base font-medium text-[#07074D]">Herraje</label>
                                <select name="herraje_id" id="herraje_id" required="required" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option value="{{$horse->herrajes->nombre}}" selected disabled>{{$horse->herrajes->nombre}}</option>    
                                    @foreach ($herrajes as $herraje)
                                        <option value="{{$herraje->id}}">{{$herraje->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- IMAGEN -->
                            <label for="imagen" class="block text-base font-medium text-[#07074D]">Imagen</label>
                            <div class="">
                                <img src="/imagen/horses/{{ $horse->imagen }}" id="imagenSeleccionada" style="max-height: 150px;" class="mx-auto d-block">
                            </div>
                            <div class="mb-4">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                                <div class='flex items-center justify-center w-full'>
                                    <label class='flex flex-col border-2 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group' style="border-color: #6875F5;">
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                        <svg class="w-10 h-10" style="color: #6875F5;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <p class='text-sm text-gray-400 pt-1 tracking-wider'>Seleccionar imagen</p>
                                        </div>
                                    <input name="imagen" id="imagen" type='file' class="hidden" />
                                    </label>
                                </div>
                            </div>
                            <p class="mb-2" style="color: #6875F5;">(*)Todos los campos deben ser rellenados para poder guardar los datos.</p>
                            <div class="text-center">
                                <button type="submit" style="background-color: #6875F5;" class='w-auto hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
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
