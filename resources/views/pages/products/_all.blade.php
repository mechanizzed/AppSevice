<tr>
  <td class="link">
    <a href="{{ route('products.show', ['id' => $product->id, 'slug' => \Illuminate\Support\Str::slug($product->pro_descr)]) }}">
      <small>{{ $product->pro_descr }}</small>
    </a>
  </td>
  <td><small>R$ {{ $product->pro_venda}}</small></td>
</tr>
