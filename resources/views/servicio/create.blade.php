<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CREAR REGISTROS
        </h2>
    </x-slot>
    <br><br>
    <div class="container mx-auto m-2 p-3">
        <form action="{{ route('servicios.index') }}" method="POST" >
        @csrf
        <div class = "form-group mb-4">
        <label class="text-light block appearance-none w-full bg-gray-200 border" for="txtNombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar su nombre">
        </div>
        <div class = "form-group mb-4">
        <label class="text-light block appearance-none w-full bg-gray-200 border" for="txtApellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar su Apellido">
        </div>
        <div class = "form-group mb-4">
        <label class="text-light block appearance-none w-full bg-gray-200 border" for="txtEmail">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar su Email">
        </div>
        <br>
        <div class = "form-group mb-4">
        <select class="form-select relative block appearance-none w-full bg-gray-200 border"  id="evento" name="evento" aria-label="Default select example">
            <option selected disabled>Tipo de Evento</option>
            <option value="Fiesta 50 años">Fiesta 50 años</option>
            <option value="Baby Shower">Baby Shower</option>
            <option value="Graduacion">Graduacion</option>
            <option value="Fiesta Infatil">Fiesta Infatil</option>
            <option value="Pedida de Mano">Pedida de Mano</option>
            <option value="Quinceañeros">Quinceañeros</option>
        </select>
        </div>
        <br>
        <div class = "form-group mb-4">
        <label class="text-light block appearance-none w-full bg-gray-200 border" for="txtFecha">Fecha que lo requiere:</label>
        <input type="date" class="form-control " id="fecha" name="fecha">
        </div>
        <br>
        <a href="{{ route('servicios.index') }}" :active="request()->routeIs('servicios')" class="btn bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" tabindex="5">Cancelar</a>
        <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" tabindex="4">Guardar</button>
        </form>
    </div>
    <br><br>

    
</x-app-layout>
