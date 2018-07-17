<html>
<table>
    <thead>
    <tr>
        <td>Item Code</td>
        <td>Description</td>
        <td>Unit Price</td>
    </tr>
    </thead>
    @foreach($product as $products)

    <tbody>
    <tr>
        <td> {{   $products->item_code }}
        </td>
        <td>
            {{$products->description }}
        </td>
        <td>
          {{  $products->unit_price }}

        </td>
    </tr>

    </tbody>
    @endforeach

</table>

</html>