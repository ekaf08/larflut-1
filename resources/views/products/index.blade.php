<h1>INI PRODUK</h1>
<h4>{{ $subjudul }}</h4>
<a href="/products/create">Tambah Produk</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item => $key)
            <tr>
                <td>{{ $item + 1 }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->description }}</td>
                <td>{{ $key->price }}</td>
                <td>
                    <a href="/products/show/{{ $key->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
