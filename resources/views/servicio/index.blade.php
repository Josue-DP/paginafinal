<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SERVICIOS REGISTRADOS
        </h2>
    </x-slot>
    <br><br>
    <div class="container mx-auto m-2 p-3">
    <a href="servicios/create" class="btn bg-blue-500 btn btn-blue hover:bg-blue-700 text-white font-bold py-2 px-4">Crear</a>

    <table class="table table-dark table-striped mt-4 border-separate border-2 border-gray-500">
    <thead>
        <tr>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">id</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">nombre</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">apellido</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">email</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">evento</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">fecha</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->id}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->nombre}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->apellido}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->email}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->evento}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$servicio->fecha}}</td>
            <td>
         <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
          <a href="servicios/{{$servicio->id}}/edit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
         </form>          
        </td>    
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    <br><br>

    
</x-app-layout>
