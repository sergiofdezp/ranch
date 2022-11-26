
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-center p-12">
                    <div class="map">
                        <iframe class="w-full text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23202.87212814502!2d-5.866167370916516!3d43.36951671151896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd368c9a60ac1c67%3A0x3134440ecc5e6224!2sOviedo%2C%20Asturias!5e0!3m2!1ses!2ses!4v1669465147664!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mx-auto w-full max-w-[550px]">
                        @if(session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="mb-2 block text-base font-medium text-[#07074D]">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3" hidden>
                                <label for="email" class="mb-2 block text-base font-medium text-[#07074D]">Email</label>
                                <input type="email" name="email" id="email" value="laravel.8.ranch@gmail.com" class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="emailFrom" class="mb-2 block text-base font-medium text-[#07074D]">Email</label>
                                <input type="email" name="emailFrom" id="emailFrom" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="mb-2 block text-base font-medium text-[#07074D]">Asunto</label>
                                <input type="text" name="subject" id="subject" value="" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="mb-2 block text-base font-medium text-[#07074D]">Mensaje</label>
                                <textarea name="content" id="content" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-2 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>
                            <p class="mb-2" style="color: #6875F5;">(*)Todos los campos deben ser rellenados para poder guardar los datos.</p>
                            <div class="text-center">
                                <button type="submit" style="background-color: #6875F5;" class='w-auto hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>