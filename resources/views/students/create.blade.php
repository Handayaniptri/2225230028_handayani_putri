@extends('students.layout')
@section('content')
<style>
  .card {
    color: #fff;
    background: #1307b9c2;
    border-radius: 20px;
  }
  
/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: #BCB07E;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  /* background: rgb(130, 106, 251); */
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #0c0000;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: darkslategrey;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #000000;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgb(0, 0, 0);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #e40e0e;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}

  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender){
    row-gap: 15px;
  }




  
</style>
    <section class="container">
      <header>Tambah data mahasiswa</header>
      <form action="{{ url('student') }}" class="form" method="post">
        {!! csrf_field() !!}
        <div class="input-box">
          <label>Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>NIM</label>
          <input type="text" name="nim" id="nim" class="form-control" placeholder="Enter NIM" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Enter Jurusan" required />
          </div>
          <div class="input-box">
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Enter alamat" required />
          </div>
        </div>
        <div class="input-box address">
          
        <input type="submit" value="Save" class="btn btn-success"></br>

        </div>
      </form>
    </section>
@stop