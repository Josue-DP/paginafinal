<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            USUARIOS REGISTRADOS
        </h2>
    </x-slot>
    <br><br>
    <div class="container mx-auto m-2 p-3">

    <table class="table table-dark table-striped mt-4 border-separate border-2 border-gray-500">
    <thead>
        <tr>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">ID</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">Name</th>
            <th scope="col" class="border border-gray-400 px-4 py-2 text-gray-800">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="border border-gray-400 px-4 py-2">{{$user->id}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$user->name}}</td>
            <td class="border border-gray-400 px-4 py-2">{{$user->email}}</td>
            <td>
         <form action="{{ route('users.destroy',$user->id) }}" method="POST"> 
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
