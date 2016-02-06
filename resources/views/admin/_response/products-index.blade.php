<tbody>
@if($products->count() != 0)
    @foreach($products as $product)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ str_limit($product->description, 70) }}</td>
            <td class="text-center">{{ $product->count }}</td>
            <td class="text-center"><a href="{{route($lang.'.admin.products.edit', $product->id)}}" class="fa fa-2x fa-edit"></a></td>
            <td class="text-center"><div class="checkbox icheck system-delete"><input type="checkbox" name="item_id" value="{{$product->id}}"></div></td>
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
        <td colspan="6" class="text-center">{!! $products->render() !!}</td>
    </tr>
</tfoot>
<!-- Enable iCheck plugin -->
@include('admin._response.scripts.checkbox')

