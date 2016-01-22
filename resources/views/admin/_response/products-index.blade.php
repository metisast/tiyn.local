<tbody>
@if($products->count() != 0)
    @foreach($products as $product)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ str_limit($product->description, 150) }}</td>
            <td class="text-center">{{ $product->count }}</td>
            <td class="text-center"><div class="checkbox icheck"><input type="checkbox"></div></td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5" class="text-center"><h3>Пусто</h3></td>
    </tr>
@endif
</tbody>
<tfoot>
    <tr>
        <td colspan="5">{!! $products->render() !!}</td>
    </tr>
</tfoot>
<!-- Enable iCheck plugin -->
@include('admin._response.scripts.checkbox')

