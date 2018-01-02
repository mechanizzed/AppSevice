<tr>
  <td class="link">
    <a href="{{ route('products.show', ['id' => $product->id, 'slug' => \Illuminate\Support\Str::slug($product->pro_descr)]) }}">
      <small>{{ $product->pro_descr }}</small>
    </a>
  </td>
  <td><small>R$ {{ number_format($product->pro_venda, 2, ',', ' ') }}</small></td>
</tr>
