<tbody>
@foreach($products as $product)
    <tr role="row">
        <td class="sorting_1">{{ $i++ }}</td>
        <td class="">{{ $product->title }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->count }}</td>
        <td><input type="checkbox"></td>
    </tr>
@endforeach
</tbody>
<tfoot>
    <tr>
        <td colspan="5">{!! $products->render() !!}</td>
    </tr>
</tfoot>

