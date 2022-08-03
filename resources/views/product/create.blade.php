<h1>Create Product</h1>

<table>
  <form action="/products" method="POST">
    @csrf
  <tr>
    <td>Name Product</td>
    <td>&nbsp;</td>
    <td><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td>Description Product</td>
    <td>&nbsp;</td>
    <td><input type="text" name="description" id="description"></td>
  </tr>
  <tr>
    <td>Price Product</td>
    <td>&nbsp;</td>
    <td><input type="number" name="price" id="price"></td>
  </tr>
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Save"></td>
  </tr>
</form>
</table>