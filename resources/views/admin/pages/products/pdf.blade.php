<table border="1">
    <thead>
        <tr>
            <td>Sl#</td>
            <td>Title</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$product->title}}</td>
        </tr>
        @endforeach
    </tbody>
</table>