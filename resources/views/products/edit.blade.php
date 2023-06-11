<form action="/products/create" method="POST">
    @csrf
    Nama : <input type="text" name="name" value="{{ $product->name }}"><br>
    Deskripsi : <input type="text" name="description" value="{{ $product->description }}"><br>
    Harga : <input type="text" name="price" value="{{ $product->price }}"><br>
    Gambar : <input type="text" name="image_url" value="{{ $product->image_url }}"><br>

    <button>Simpan</button>
</form>
