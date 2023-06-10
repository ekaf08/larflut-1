<form action="/products/create" method="POST">
    @csrf
    Nama : <input type="text" name="name"><br>
    Deskripsi : <input type="text" name="description"><br>
    Harga : <input type="text" name="price"><br>
    Gambar : <input type="text" name="image_url"><br>

    <button>Simpan</button>
</form>
