<h1>List Products</h1>

<a href="/product/create">Create</a>

<table border="1">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $p)
        <tr>
          <td>{{ $p->name }}</td>
          <td>{{ $p->description }}</td>
          <td>{{ $p->price }}</td>
          <td>
            <a href="/product/{{ $p->id }}/edit">Edit</a>
            <form action="/product/{{ $p->id }}" method="POST">
              @method('DELETE')
              @csrf
              <input type="submit" value="Delete">
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>