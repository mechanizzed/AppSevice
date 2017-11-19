<tr>
  <td class="link">
    <a href="{{ route('products.show', ['id' => $product->id, 'slug' => \Illuminate\Support\Str::slug($product->pro_descr)]) }}">
      <small>{{ $product->pro_descr }}</small>
    </a>
  </td>
  <td><span class="badge badge-primary badge-pill">14</span></td>
</tr>