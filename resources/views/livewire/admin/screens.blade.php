<table class="table">
  <thead>
    <tr>
      <th class="cursor-pointer w-20">
        ID
      </th>
      <th class="cursor-pointer">
        Serial
      </th>
      <th class="cursor-pointer w-36">
        Tamaño
      </th>
      <th scope="col" class="relative">
        <span class="sr-only">Acciones</span>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($screens as $item)
      <tr>
        <td class="text-center">{{ $item->id }}</td>
        <td class="text-center">{{ $item->serial }}</td>
        <td>{{ $item->size }}</td>
        <td>
          Acciones
        </td>
      </tr>
    @endforeach
  </tbody>
</table>