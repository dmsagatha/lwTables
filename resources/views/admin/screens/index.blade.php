<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Listado de Pantallas
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto">
      <div class="overflow-hidden">
        <livewire:admin.screens.screens-table>
      </div>
    </div>
  </div>
</x-app-layout>