<tr>
  <td class="link">
    <a href="{{ route('products.store', ['id' => $product->pro_cod, 'slug' => \Illuminate\Support\Str::slug($product->pro_descr)]) }}">
      <small>{{ $product->pro_descr }}</small>
    </a>
  </td>
  <td><span class="badge badge-primary badge-pill">14</span></td>
</tr>