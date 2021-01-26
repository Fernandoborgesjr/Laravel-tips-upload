<form action="{{ route('upload')}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction:column; max-width:500px ">
    @csrf
    <input type="file" name="file">
    <button tyoe="submit" style="margin-top: 10px;">Enviar arquivo</button>
</form>