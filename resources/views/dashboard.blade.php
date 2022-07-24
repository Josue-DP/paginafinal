<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bievenido a la Pagina de Administracion de Scuishy Partys
        </h2>
    </x-slot>
    <br><br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://cdn.pixabay.com/photo/2015/12/28/02/58/home-1110868_960_720.png" alt="Man looking at item at a store">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Inicio</div>
      <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Esta es la pagina principal de la administracción</a>
      <p class="mt-2 text-slate-500">Aqui podras ver todas las opciones que tiene como administrador y usuario de la pagina</p>
    </div>
  </div>
</div>
<br><br>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://3.bp.blogspot.com/-w8j19EvcOzg/WuOIwFii_iI/AAAAAAAAABc/8RpTpTuUr4w9oh8JNtDTlZGDEgXDy7FewCLcBGAs/s1600/C%25C3%25B3mo-mejorar-el-servicio-al-cliente-en-una-empresa-%25C2%25A1Debes-saberlo.jpg" alt="Man looking at item at a store">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Servicios</div>
      <a href="{{ route('servicios.index') }}" :active="request()->routeIs('servicios')" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Aqui podra ver los servicios disponibles</a>
      <p class="mt-2 text-slate-500">Podra añadir, editar, eliminar y actualizar los servicios que ofrece a sus clientes</p>
    </div>
  </div>
</div>
<br>
<br>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://www.cavsi.com/preguntasrespuestas/images/informatica/usuario-de-computadoras.jpg" alt="Man looking at item at a store">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Usuarios</div>
      <a href="{{ route('users.index') }}" :active="request()->routeIs('users')" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Aqui podra ver los usuarios de la empresa</a>
      <p class="mt-2 text-slate-500">Podra añadir, editar, eliminar y actualizar los usuarios que tiene</p>
    </div>
  </div>
</div>


    
</x-app-layout>
