<h1>Edit Product</h1>

<table>
  <form action="/product/{{ $product->id }}" method="POST">
    @method('PUT')
    @csrf
  <tr>
    <td>Name Product</td>
    <td>&nbsp;</td>
    <td><input type="text" name="name" id="name" value="{{ $product->name }}"></td>
  </tr>
  <tr>
    <td>Description Product</td>
    <td>&nbsp;</td>
    <td><input type="text" name="description" id="description" value="{{ $product->description }}"></td>
  </tr>
  <tr>
    <td>Price Product</td>
    <td>&nbsp;</td>
    <td><input type="number" name="price" id="price" value="{{ $product->price }}"></td>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update"></td>
  </tr>
</form>
</table>