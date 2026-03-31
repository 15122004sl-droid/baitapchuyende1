<h2>Thêm sinh viên</h2>

<form method="POST" action="/students/store">
    @csrf

    Tên: <input name="name"><br><br>

    <button type="submit">Gửi</button>
</form>