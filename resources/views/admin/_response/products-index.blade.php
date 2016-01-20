<tbody>
@if($products->count() != 0)
    @foreach($products as $product)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->count }}</td>
            <td><input type="checkbox"></td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5" class="text-center">Пусто</td>
    </tr>
@endif
</tbody>
<tfoot>
    <tr>
        <td colspan="5">{!! $products->render() !!}</td>
    </tr>
</tfoot>

