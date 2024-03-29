<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-center p-12">
                    <div class="mx-auto w-full max-w-[550px]">
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="mb-2 block text-base font-medium text-[#07074D]">Nombre</label>
                                <input type="text" name="name" id="name" value="{{$user->name}}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-2 block text-base font-medium text-[#07074D]">Email</label>
                                <input type="text" name="email" id="email" value="{{$user->email}}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <label for="role" class="mb-2 block text-base font-medium text-[#07074D]">Rol</label>
                            <div class="form-check mb-4" style="display: ;">
                                @foreach ($roles as $role)
                                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" 
                                        @foreach($user->roles as $permissions)
                                            @if ($permissions->id == $role->id)
                                                checked
                                            @endif
                                        @endforeach
                                    id="roles">
                                    <label class="form-check-label">{{ $role->name }}</label>
                                    <br>
                                @endforeach
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
